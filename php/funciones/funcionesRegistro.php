<?php

function obtenerCantidadPorDNI($dni) {

    $conect = conectar();
    $sql = "SELECT COUNT(prod.id) as cantidad
            FROM persona as per
            INNER JOIN producto as prod ON (prod.persona_id = per.id)
            WHERE per.dni = ?
            GROUP BY per.dni";


    $stmt = $conect->prepare($sql);
    $stmt->bind_param('i', $dni);
    $stmt->execute();

    $stmt->bind_result($cantidad);

    $stmt->store_result();

    if (mysqli_stmt_num_rows($stmt) > 0) {
        $row = mysqli_stmt_fetch($stmt);

        $result = array(
            'estado' => true,
            'cantidad' => $cantidad,
        );
    } else {
        $result = array(
            'estado' => false,
        );
    }

    return $result;
}

function realizarAgregacionRegistro($datos) {
    $conect = conectar();

    $resultado = array('estado' => FALSE);
    try {

        /* Autocommit false para la transaccion */
        $conect->autocommit(FALSE);
        $estadoConsulta = TRUE;

        /* Insert registro */
        $sql4 = "INSERT INTO persona(nomyape, dni, domicilio, codPostal, ciudad, provincia, telefono, email, fecha_ingreso, recibir) 
                VALUES (?,?,?,?,?,?,?,?,'" . date('Y-m-d H:i:s') . "',?)";
        $stmt4 = $conect->prepare($sql4);
        $stmt4->bind_param('sisssssss', $datos['nomyape'], $datos['dni'], $datos['domicilio'], $datos['codPostal'], $datos['ciudad'], $datos['provincia'], $datos['telefono'], $datos['correo'], $datos['recibir']);
        if (!$stmt4->execute()) {
            $estadoConsulta = FALSE;
        }

        $persona_id = $conect->insert_id;

        $stmt4->close();


        if ($estadoConsulta) {
            foreach ($datos['productos'] as $key => $producto) {
                $sql5 = "INSERT INTO producto(cod_barra, persona_id) 
                        VALUES (?,?)";
                $stmt5 = $conect->prepare($sql5);
                $stmt5->bind_param('ii', $producto, $persona_id);
                if (!$stmt5->execute()) {
                    $estadoConsulta = FALSE;
                    break;
                }

                $stmt5->close();
            }
        }

        /* Commit or rollback transaction */
        if ($estadoConsulta) {
            $conect->commit();
            desconectar($conect);

            $resultado['estado'] = TRUE;
            return $resultado;
        } else {
            $conect->rollback();
            desconectar($conect);
            return $resultado;
        }
    } catch (mysqli_sql_exception $e) {
        $conect->rollback();
        desconectar($conect);
        return $resultado;
    }
}



jQuery.fn.slideFadeToggle = function (speed, easing, callback) {
    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};



$(function () {
    $('.btnProd').click(function () {
        $('.btnProd').removeClass('active');
        $(this).addClass('active');
        $('.prodContent').load(PATH_HOME+'html/productos/' + $(this).attr('data'), function () {
            $(this).fadeIn('slow');
        });
        
    });
});

$(function () {
    $('#abreBases').click(function () {
        $('#masBases').slideFadeToggle();
        if ($(this).text() == 'LEER MENOS')
        {
            $(this).text('LEER MÁS');
        }
        else
        {
            $(this).text('LEER MENOS');
        }
    });
});

// $(function () {
//     $('.prodImg').hover(function () {
//         $('.globoProd').toggle();
//     });
//     $('.globoProd').hover(function () {
//         $('.globoProd').show();
//     }, function () {
//         $('.globoProd').hide();
//     });
// });


/*
 * FUNCIONES DEL FORMULARIO
 */
function ShowLoading() {
    $("#divLoading").show();
    return true;
    // These 2 lines cancel form submission, so only use if needed.
    //window.event.cancelBubble = true;
    //e.stopPropagation();
}


$(function () {
    var cantProds = 1;
    $('.masEan').click(function () {
        if (cantProds < 10)
        {
            //$('#masProd').append('<input type="text" name="prods[]" class="num ancho60" required="true">');
            $('.masEan').before('<input type="text" name="prods[]" class="num ancho60 ean">');
            cantProds++;
        }
    });
});

function validateEmail(sEmail) {

    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}

$(function () {
    $(".num").bind('keypress', function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if ((!regex.test(key))) {//
            if (($.inArray(event.keyCode, [8, 9, 13, 37, 38, 39, 46])) == -1)
            {
                event.preventDefault();
                return false;
            }
        }
    });
});

function validarRegistro() {
    var ok = false;

    var nombre = $("input[name='nomyape']");
    var dni = $("input[name='dni']");
    var domicilio = $("input[name='domicilio']");
    var cdpostal = $("input[name='cdpost']");
    var ciudad = $("input[name='ciudad']");
    var provincia = $("input[name='prov']");
    var codTel = $("input[name='codTel']");
    var numTel = $("input[name='numTel']");
    var correo = $("input[name='correo']");
	var comentarios = $("textarea[name='comentarios']");


    if (nombre.val() == "")
    {
        alert("El Nombre y Apellido está vacío.");
        nombre.focus();
    }
    else if ((dni.val() == "") || isNaN(dni.val()))
    {
        alert("El DNI está vacío o contiene caracteres alfanuméricos.");
        dni.focus();
    }
    else if (domicilio.val() == "")
    {
        alert("El Domicilio está vacío.");
        domicilio.focus();
    }
    else if ((cdpostal.val() == "") /*|| isNaN(cdpostal.val())*/)
    {
        alert("El Código Postal está vacío."); //o contiene caracteres alfanuméricos.
        cdpostal.focus();
    }
    else if (ciudad.val() == "")
    {
        alert("La Ciudad está vacía.");
        ciudad.focus();
    }
    else if (provincia.val() == "")
    {
        alert("La Provincia está vacía.");
        provincia.focus();
    }
    else if ((codTel.val() == "") || isNaN(dni.val()))
    {
        alert("La Característica del Teléfono está vacía o contiene caracteres alfanuméricos.");
        codTel.focus();
    }
    else if ((numTel.val() == "") || isNaN(dni.val()))
    {
        alert("El Número del Teléfono está vacío o contiene caracteres alfanuméricos.");
        numTel.focus();
    }
    else if ((correo.val() == "") || (!validateEmail(correo.val())))
    {
        alert("El Correo electrónico está vacío o no tiene un formato válido.");
        correo.focus();
    }
	else if ((comentarios.val() == ""))
    {
        alert("El Comentario está vacío.");
        comentarios.focus();
    }
    else
    {
        ok = true;
    }

    return ok;
}

function f_submit_replace(form, validar, path_replace) {
    var post_url = form.attr("action");
    var post_data = form.serialize();

    if (validar) {
        console.log($.ajax({
            type: 'POST',
            url: post_url,
            data: post_data,
            dataType: "json",
            beforeSend: function (xhr) {
                ShowLoading();
            },
            success: function (registro) {
                $('#divLoading').hide();
                alert(registro.texto);
                if (registro.estado)
                {
                    window.location.replace(path_replace);
                }
            }
        }));
    }
    return false;
}

$(function () {
    $("#registroForm").submit(function (e) {
        e.preventDefault();

        var form = $(this);

        //var path_replace_local = '';
        var path_replace_local = PATH_HOME + "/html/confirma.php?cg=090";
        //var path_replace_www = PATH_HOME + "/../gestion";
        var f_validar = validarRegistro();
        //var f_validar = true;

        console.log(f_submit_replace(form, f_validar, path_replace_local));

        return false;
    });
});
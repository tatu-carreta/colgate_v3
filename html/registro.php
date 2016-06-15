<!-- Section REGISTRO -->
<section id="registro">
    <div class="container">
        <div class="papelitosProd"><img src="<?php echo PATH_IMAGES; ?>papelitos2.gif" alt="Colgate Plax"></div>
        <form id="registroForm" action="<?php echo PATH_CONTROLLER; ?>controladorAdminModel.php" method="post" class="formRegistro" >
            <div class="combo">
                <label for="nomyape">Nombre y Apellido</label><br>
                <input id="nomyape" type="text" name="nomyape" required="" class="ancho100">
            </div>
            <div class="combo comboDni ancho60">
                <label for="dni">DNI (mayor a 18 años)</label><br>
                <input id="dni" type="text" name="dni" class="num" required="">
            </div>
            <div class="combo">
                <label for="domicilio">Domicilio</label><br>
                <input id="domicilio" type="text" name="domicilio" required="">
            </div>
            <div class="combo">
                <span class="ancho20 codigo">
                    <label for="cdpost">CP</label><br>
                    <input id="cdpost" type="text" name="cdpost" required="">
                </span>
                <span class="ancho40 ciudad">
                    <label for="ciudad">Ciudad</label><br>
                    <input id="ciudad" type="text" name="ciudad" required="">
                </span>

                <span class="ancho40 prov">
                    <label for="provincia">Provincia</label><br>
                    <input id="provincia" type="text" name="prov" required="">
                </span>
            </div>
            <div class="combo">
                <span class="ancho20 cArea">
                    <label for="ca">Cód. Área</label><br>
                    <input id="ca" type="text" name="codTel" class="num" required="">
                </span>
                <span class="ancho40 telContacto">
                    <label for="tel">Teléfono de contacto</label><br>
                    <input id="tel" type="text" name="numTel" class="num" required="">
                </span>
            </div>
            <div class="combo">
                <label for="correo">Correo electrónico</label>
                <input id="correo" type="email" name="correo" required="" class="ancho100">
            </div>
            <div class="combo comboEan">
                <label for="ean" class="labelEan">EAN del producto <span>(código de barras 13 dígitos)</span></label>
                <input id="ean" type="text" name="prods[]" class="num ancho60 ean" required=""> 
                <button type="button" class="masEan"><span>Agregar más códigos</span></button>
                <span class="observacion">Podés cargar hasta 10 productos</span>
            </div>
            <div class="combo envio">
                <input type="hidden" name="section" value="registro">
                <input class="btn" type="submit" value="ENVIAR">
            </div>
            <div class="combo check">
                <input id="nov" type="checkbox" name="novedades" value="T" checked=""><label class="observacion2" for="nov">Deseo recibir información sobre promociones especiales, nuevos productos y otras comunicaciones de Colgate.</label>
                <div class="clear"></div>
            </div>
        </form>
        <div class="divDivisor"><img src="<?php echo PATH_IMAGES; ?>divisor.svg" alt="Colgate"></div>
    </div>
</section>
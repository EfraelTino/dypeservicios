<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>D&P - Contacto</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dominio.com/">
    <meta property="og:site_name" content="https://dominio.com/">
    <meta property="og:title" content="Benji Pet Shop - Tienda de animaless">
    <meta property="og:description" content="Description">
    <meta property="og:image" content="https://dominio.com/images/og.png">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">

    <!-- HEAD -->
    <?php include('page-master/head.php') ?>

<body>


    <!-- HEADER -->
    <?php include('page-master/header.php') ?>
    <div class="bg-principal-nosotros">
        <div class="cl-normal fondo-color">
            <div class="texto-desarrollo">

                TIENES ALGUNA, <strong style="font-weight: 900; color: white;">DUDA?</strong>
            </div>
        </div>
    </div>
    <div class="cl-normal">
        <div class="texto-nosotros-title"> ESCRÍBENOS ESTAMOS LISTOS PARA <strong style="font-weight: 900; text-decoration: underline;">AYUDARTE</strong>
        </div>

        <div class="escribenos">

            <div class="mapa-contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.4642431115282!2d-75.24806774119185!3d-12.053360349471351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e95e29d2679c9%3A0xae5914077a275bd1!2sCoronel%20Parra%20852%2C%20Huancayo%2012006!5e0!3m2!1ses-419!2spe!4v1574714267692!5m2!1ses-419!2spe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <form id="frmContacto" method="post" action="">
                <div class="contacto1">
                    <input class="contacto1-a" type="text" name="nombres" placeholder="Nombres">
                </div>
                <div class="contacto1">
                    <input class="contacto1-a" type="text" name="apellidos" placeholder="Apellidos">
                </div>
                <div class="contacto1">
                    <input class="contacto1-a" type="text" name="email" placeholder="E-mail">
                </div>
                <div class="contacto1">
                    <input class="contacto1-a" type="text" name="celular" placeholder="Celular">
                </div>
                <div class="contacto1">
                    <input class="contacto1-a" type="text" name="empresa" placeholder="Empresa">
                </div>
                <div class="contacto1">
                    <textarea rows="4" class="contacto1-a" name="mensaje" placeholder="Consulta o mensaje"></textarea>
                </div>
                <input type="hidden" name="idioma" value="es">
                <a href="" class="bt2 btn_enviar">Enviar</a>
                <div class="wpcf7-response-output-form"></div>
            </form>


        </div>
    </div>
    <?php
    include "footerclientes.php";
    ?>
    <!-- 
        <div class="txt-int">
            
        </div> -->

    </div>






    <!-- FOOTER -->
    <?php include('page-master/footer.php') ?>



    <!-- JS -->
    <?php include('page-master/js.php') ?>




</body>

</html>
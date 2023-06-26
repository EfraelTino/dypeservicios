<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>D&P - Nosotros</title>

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

                GESTIÓN Y ADMINISTRACIÓN DE INMUEBLES DE <strong style="font-weight: 900; color: white;">ALTA CALIDAD</strong>
            </div>
        </div>
    </div>
    <div class="cl-normal">
        <div class="texto-nosotros-title"> TRABAJAMOS PARA HACERTE LA <strong style="font-weight: 900; text-decoration: underline;">VIDA MÁS FÁCIL</strong>
        </div>
        <div class="wrap-somos">
            <div class="hogar-img somos-img">
                <img src="images/proimg.jpg" alt="" class="img-yellow">
                <div class="rombo-container">
                    <div class="rombo-int">
                        <img src="images/menpis.webp" alt="" class="img-rombo">
                    </div>
                </div>
            </div>
            <div class="somos-section">
                <div class="title-somos">Somos <strong>D&P SERVICIOS MULTIPLES INMOBILIARIOS</strong></div>
                <p class="somos-text">Somos una empresa con gran experiencia en el sector de administración de edificios y mantenimiento de condominios, edificios y oficinas. Brindamos soluciones creativas, siendo líderes a través de la innovación, eficiencia, seguridad y tranquilidad.
                </p>
            </div>
        </div>
        <div class="texto-nosotros-title"> NUESTRAS <strong style="font-weight: 900; text-decoration: underline; padding-bottom: 1rem;">ÁREAS</strong>
        </div>
        <div class="wrap-areas">
            <?php
            $elementos = [
                ['title' => 'Administración'],
                ['title' => 'Administración'],
                ['title' => 'Administración'],
                ['title' => 'Administración'],
                ['title' => 'Administración'],
                ['title' => 'Administración'],
            ];
            foreach ($elementos as $key => $data) :
            ?>
                <div class="bg-area">
                    <div class="bg-sobre">
                        <div class="text-area">
                            <?php echo $data['title']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="wrap-frecuentes">
            <?php
            $acordionItems = [
                [
                    'title' => 'Misión',
                    'descripcion' => 'Brindar servicios de gestión y administración de inmuebles de alta calidad que permita a nuestros clientes mantener y mejorar su inversión mediante una propuesta de valor efectiva y sostenible en el tiempo.
                    '
                ],
                [
                    'title' => 'Visión',
                    'descripcion' => 'Ser líder en la gestión y administración de inmuebles en el mercado local e internacional, adaptándonos a los cambios que demande, siendo el socio estratégico más serio, confiable y eficiente de nuestros clientes en base a una cool-tura y compromiso que genere un alto nivel de confianza en nuestros proyectos.'
                ],
                [
                    'title' => 'Valores',
                    'descripcion' => '<span class="icon-check-circle" style="font: size 1rem !important;"></span> Honestidad <br> <span class="icon-check-circle" style="font: size 1rem !important;"></span> Confianza <br> <span class="icon-check-circle" style="font: size 1rem !important;"></span> Responsabilidad <br> <span class="icon-check-circle" style="font: size 1rem !important;"></span> Positivismo <br> <span class="icon-check-circle" style="font: size 1rem !important;"></span> Equidad <br> <span class="icon-check-circle" style="font: size 1rem !important;"></span> Lealtad'
                ],
                [
                    'title' => 'Beneficios',
                    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quisquam magnam atque corrupti harum modi omnis, cumque, non totam excepturi, asperiores voluptatem. Officia delectus blanditiis optio, magnam maxime harum corporis!'
                ]
            ];

            ?>
            <div class="frecuentes-action">
                <?php
                $pos = 0;
                foreach ($acordionItems as $index => $item) :
                    $pos++;
                    $collapseId = "collapse" . $index;
                    $iconId = "icon-flech" . $index;
                ?>
                    <div class="card">
                        <div class="frecuentes-contenido">
                            <a role="button" class="panel-title text-black collapsed" onclick="verCollapse(<?php echo $index; ?>, '<?php echo $collapseId; ?>', '<?php echo $iconId; ?>');">
                                <h6><?php echo '0' . $pos . '. ' . $item['title'] ?></h6>
                                <span class="icon-chevron-down" id="<?php echo $iconId; ?>"></span>
                            </a>
                            <div id="<?php echo $collapseId; ?>" class="panel-collapse">
                                <div class="panel-body">
                                    <p><?php echo $item['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>
            </div>
            <div class="hogar-img img-frecuente">
                <img src="images/proimg.jpg" alt="" class="img-yellow">
                <div class="rombo-container">
                    <div class="rombo-int">
                        <img src="images/menpis.webp" alt="" class="img-rombo">
                    </div>
                </div>
            </div>
            <script>
                function verCollapse(id, collapseId, iconId) {
                    var collaId = document.getElementById(collapseId);
                    var iconDow = document.getElementById(iconId);
                    collaId.classList.toggle("collapse-show");
                    iconDow.classList.toggle("icon-chevron-up");
                }
            </script>
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
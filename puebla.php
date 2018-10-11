<!DOCTYPE html>
<html lang="es">

<head>

    <?php require('require/head.php'); ?>
    <link rel="stylesheet" href="css/muzquiz.css">
</head>

<body>

    <?php require('require/float-social.php'); ?>

    <header>

        <?php require('require/nav.php'); ?>

        <!-- Full Page Intro -->
        <div id="slide-puebla" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Puebla403</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4"><span class="font-weight-bold">Una casona del siglo XX donde habitan múltiples ideas.</h3>
                        </div>
                        <!--Grid column-->

                        <?php require('require/social-header.php'); ?>

                    </div>
                    <!--Grid row-->
                    <div class="row align-items-end justify-content-center">
                        <div class="col-10 col-md-6 col-lg-3 text-center mt-5 bottom">
                            <div class='icon-scroll'></div>
                        </div>
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
            <!-- Full Page Intro -->
        </div>
    </header>

    <!-- Main navigation -->
    <div class="separador30VH"></div>

    <div class="container-fluid">
        <div class="row mx-0 my-4">
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                        <h2 class="titulos sans-bold mt-5 mb-4">Ubicado en Reforma, Roma y del Bosque de Chapultepec.</h2>
                        <p class="subtitulo mb-2">Un conjunto de espacios para crear en un barrio céntrico y cultural; cercano a Reforma, Avenida Chapultepec y el Bosque de Chapultepec.</p>
                        <p class="subtitulo mb-0">Amplias y funcionales salas de juntas, oficinas privadas y terrazas únicas con una vista inigualable al Castillo de Chapultepec. <span class="font-weight-bold">#PUEBLA403</span> mezcla diseño arquitectónico, diseño industrial y arte como las oficinas privadas con mobiliario de PÚBLICO Industrial y nuestra terraza roja con la obra de Fabien Capello.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.8233536257385!2d-99.17732028560424!3d19.42003688689144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff4f66c68361%3A0x89bf8e79189b4cd2!2zUMO6YmxpY28!5e0!3m2!1smb-5es-419!2smx!4v1533755939860" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    
    <?php require('require/membresia-puebla.php'); ?>


    <?php require('require/servicios-puebla.php'); ?>

    <section id="video" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/x36_MyzfzKg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


    <?php require('require/testimoniales.php'); ?>

    <?php require('require/galeria-puebla.php'); ?>


    <section id="proximamente" class="pb-5">
        <div class="container-fluid">
            <!--
            <div class="row mx-0">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="row mt-5">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h2 class="titulos sans-bold">Estudio fotográfico:</h2>

                        </div>
                    </div>
                </div>
            </div>
-->
            <div class="row justify-content-center mb-5">
                <div class="col-10 pt-5">
                    <!-- Grid row colaborador-->
                    <div class="row justify-content-center my-4">

                        <!-- Grid column -->
                        <div class="col-12 col-lg-5 order-lg-last mb-4">
                            <div class="card noShadow">
                                <!-- Post title -->
                                <div class="card-body p-0">
                                    <h3 class="font-weight-bold mb-3"><strong>PÚBLICO comedor</strong></h3>
                                    <!-- Excerpt -->
                                    <p class="card-text text-justify">El concepto que ya conoces en Polanco: cocina mexicana sencilla, accesible y rica pero con la influencia de La Condesa. El menú de la casa está creado por el chef Pablo Salas tomando en cuenta el estilo de vida de los que habitantes del barrio. <span class="font-weight-bold"> PROXIMAMENTE </span></p>
                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 col-lg-5 order-lg-first mb-5">
                            <!-- Featured image -->
                            <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/comedor_Puebla.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--                            <a class="btn btn-outline-black btn-block waves-effect d-block d-lg-none"><strong>Conocenos más</strong></a>-->
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </div>
        </div>
    </section>

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>

</body>

</html>

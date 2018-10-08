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
        <div id="slide-moliere" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Moliere50</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4">Un espacio que ofrece diseño para la productividad y cercanía a vías de comunicación de gran importancia en la CDMX.</h3>
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
                        <h2 class="titulos sans-bold mt-4 mb-4">Público se encuentra en 2 barrios de Polanco.</h2>
                        <p class="subtitulo mb-2">Creamos un conjunto de oficinas privadas rodeadas de cultura y moda con una gran conectividad a diferentes puntos de la CDMX. <span class="font-weight-bold">#MOLIERE50</span> se trata de una propuesta que integra oficinas privadas y un concepto gastronómico que ofrece comida rica y accesible para todos los profesionistas de la zona: <a href="comedores.php" class="black-text"><span class="font-weight-bold">PÚBLICO Comedor.</span></a> </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5627709391233!2d-99.20460978560406!3d19.43128848688504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021d6a9653b1%3A0x1f9de90a88bc3901!2sP%C3%9ABLICO+MOLIERE+50!5e0!3m2!1ses-419!2smx!4v1533759116044" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php require('require/membresia-moliere.php'); ?>
    
    <?php require('require/servicios-moliere.php'); ?>

    <section id="video" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/x36_MyzfzKg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php require('require/testimoniales.php'); ?>

    <?php require('require/galeria-moliere.php'); ?>

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
                                    <h3 class="font-weight-bold mb-3"><strong>Público Comedor</strong></h3>
                                    <!-- Excerpt -->
                                    <p class="card-text text-justify">PÚBLICO / comedor nace con la finalidad de ofrecer cocina mexicana sencilla, accesible y rica. Unimos la comida de tradición casera con un entorno moderno y cómodo a través de altos estándares de trabajo y cuidado al detalle. Dirección: Moliere 50, Polanco, CDMX. <span class="font-weight-bold">Teléfono:</span> 40001288</p>
                                </div>

                            </div>
                            <!-- Read more button -->
                            <a href="img/menus/publico_comedor_menu.pdf" target="_blank" class="btn btn-outline-green btn-block waves-effect d-none d-lg-block mt-5">
                                <strong>Conoce nuestro menú</strong>
                            </a>
                            <a href="https://www.rappi.com.mx/restaurantes/pblico-comedor" target="_blank" class="btn btn-outline-green btn-block waves-effect d-none d-lg-block">
                                <strong>Pide a Domicilio</strong>
                            </a>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 col-lg-5 order-lg-first mb-5">
                            <!-- Featured image -->
                            <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/fotos/moliere/publico_coworking_muzquiz_comedor.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Read more button -->
                            <a href="img/menus/publico_comedor_menu.pdf" target="_blank" class="btn btn-outline-green btn-block waves-effect d-block d-lg-none mt-5">
                                <strong>Conoce nuestro menú</strong>
                            </a>
                            <a href="https://www.rappi.com.mx/restaurantes/pblico-comedor" target="_blank" class="btn btn-outline-green btn-block waves-effect d-block d-lg-none">
                                <strong>Pide a Domicilio</strong>
                            </a>

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

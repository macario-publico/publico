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
        <div id="slide-muzquiz" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Muzquiz15</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4"><span class="font-weight-bold">Un espacio que invita a co-crear<br> con la comunidad que lo habita</h3>
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
                        <h2 class="titulos sans-bold mt-5 mb-4">San Miguel Chapultepec</h2>
                        <p class="subtitulo mb-3">
                            Ubicado en la Colonia San Miguel Chapultepec y cercano a Polanco, Lomas, Reforma y La Condesa, este complejo fusiona diseño, arquitectura y arte en espacios de trabajo privados y compartidos.
                        </p>
                        <p class="subtitulo pt-0">
                            <span class="font-weight-bold">#MUZQUIZ15</span> cuenta con amplias y funcionales oficinas, terrazas, <span class="font-weight-bold">estudio fotográfico</span> y <span class="font-weight-bold">PÚBLICO Itacate:</span> una barra con cocina abierta especializada en “Itacates”: bowls de arroz o quinoa con guisados mexicanos para llevar o subir a tu oficina.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.007582716011!2d-99.19203055011823!3d19.41207834630378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201e1fd4fada3%3A0x3433fd6c1d0f7e61!2zUMO6YmxpY28!5e0!3m2!1ses-419!2smx!4v1533675330065" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php require('require/membresia.php'); ?>

    <section id="video" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/x36_MyzfzKg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php require('require/servicios.php'); ?>

    <?php require('require/testimoniales.php'); ?>

    <?php require('require/galeria-muzquiz.php'); ?>

    <section id="colaboradores" class="">
        <div class="container-fluid">

            <div class="row justify-content-center mb-5">
                <!--                <div class="col-10 pt-5 text-center owl-colaboradores owl-carousel owl-theme">-->
                <div class="col-10 pt-5">
                    <div class="row mx-0 mb-5">
                        <div class="col-12 col-md-10 col-lg-7">
                            <div class="row mt-5">
                                <div class="col-12 col-md-10 offset-md-1">
                                    <h2 class="titulos sans-bold">Estudio fotográfico:</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid row colaborador-->
                    <div class="row justify-content-center my-4">

                        <!-- Grid column -->
                        <div class="col-12 col-lg-5 order-lg-last mb-4">

                            <div class="card noShadow">
                                <div class="card-body p-0">
                                    <!--                             <h3 class="font-weight-bold mb-3"><strong>Chef Pablo salas</strong></h3>-->
                                    <!-- Excerpt -->
                                    <p class="card-text text-justify">Un espacio profesional de fotografía; ciclorama blanco, cortinas blackout y stand de maquillaje incluidos. Aquí podrás realizar sesiones de fotografía profesional de producto, moda, retrato, grabaciones en ubicación fija; las posibilidades para crear son ilimitadas en esta cómoda locación.</p>
                                </div>
                            </div>
                            <!-- Read more button -->
                            <a class="btn btn-outline-black btn-block waves-effect d-none d-lg-block mt-5" href="publico-estudio-fotografico-cdmx.php"><strong>Conocenos más</strong></a>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 col-lg-5 order-lg-first mb-5">
                            <!-- Featured image -->
                            <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/fotos/muzquiz/publico_coworking_muzquiz_estudio_fotografia.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <a href="publico-estudio-fotografico-cdmx.php" class="btn btn-outline-black btn-block waves-effect d-block d-lg-none"><strong>Conocenos más</strong></a>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->

                    <div class="row mx-0 mb-5">
                        <div class="col-12 col-md-10 col-lg-7">
                            <div class="row mt-5">
                                <div class="col-12 col-md-10 offset-md-1">
                                    <h2 class="titulos sans-bold">PÚBLICO /itacate</h2>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid row colaborador-->
                    <div class="row justify-content-center my-4">

                        <!-- Grid column -->
                        <div class="col-lg-5 order-lg-last">
                            <!-- Featured image -->
                            <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/fotos/muzquiz/publico_coworking_muzquiz_itacate.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-5  order-lg-first mb-4">

                            <div class="card noShadow">
                                <div class="card-body p-0">
                                    <!--                                        <h3 class="font-weight-bold mb-3"><strong>Chef Pablo salas</strong></h3>-->
                                    <!-- Excerpt -->
                                    <p class="card-text text-justify"><span class="font-weight-bold">Itacate:</span> Inspirado en / Comedor, pero reinventado. Una barra con cocina abierta especializada en ‘itacates’: bowls de arroz o quinoa con guisados mexicanos para llevar, con el distintivo sabor de nuestro chef <span class="font-weight-bold">Pablo Salas</span>. Itacate también ofrece tortas, ensaladas, café de especialidad y cerveza, en un ambiente relajado pero cuidadosamente diseñado. <span class="font-weight-bold">Dirección:</span> Muzquiz 15, San Miguel Chapultepec, CDMX. <span class="font-weight-bold">Teléfono:</span> 71608112</p>
                                </div>
                            </div>

                            <!-- Read more button -->
                            <a href="img/menus/publico_comedor_menu.pdf" target="_blank" class="btn btn-outline-green btn-block waves-effect mt-5">
                                <strong>Conoce nuestro menú</strong>
                            </a>
                            <a href="https://www.rappi.com.mx/restaurantes/pblico-comedor" target="_blank" class="btn btn-outline-green btn-block waves-effect">
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

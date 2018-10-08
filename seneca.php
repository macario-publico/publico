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
        <div id="slide-seneca" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Séneca61</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4">Sobrio e intelectual; un complejo de espacios para crear en uno de los barrios más cosmopolitas en CDMX. </h3>
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
                         <p class="subtitulo mb-0">Oficinas privadas y escritorios de coworking funcionales para los emprendedores y profesionistas de Polanco. <span class="font-weight-bold">#SÉNECA61</span> cuenta con oficinas privadas, escritorios de coworking y showrooms para venta. El desarrollo de esta ubicación está basado en sistemas sustentables de climatización y cuenta con generación de electricidad por medio de paneles solares.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.5541090692554!2d-99.204785185604!3d19.431662386884827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2021d15d3241d%3A0x6158eaf050d97d11!2zUMOaQkxJQ08gU8OJTkVDQSA2MQ!5e0!3m2!1ses-419!2smx!4v1533760105671" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    <?php require('require/membresia-seneca.php'); ?>

    <?php require('require/servicios-seneca.php'); ?>

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

    <?php require('require/galeria-seneca.php'); ?>

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

        </div>
    </section>

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>

</body>

</html>

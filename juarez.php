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
        <div id="slide-hamburgo" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">PÚBLICO Juárez</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4"><span class="font-weight-bold">Próximamente:</span> Espacios de trabajo y escritorios de coworking con todas las comodidades incluidas</h3>
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
                        <h2 class="titulos sans-bold mt-5 mb-4">PÚBLICO Juárez</h2>
                        <p class="subtitulo mb-s">
                            A partir del verano 2019 renta tu oficina o cowork en la Colonia Juárez, nuestra espacio contará con una ubicación privilegiada dentro de la CDMX.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15050.503658957956!2d-99.159581!3d19.4285626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf382664adb0fe37c!2sP%C3%BAblico+Coworking!5e0!3m2!1ses-419!2smx!4v1536607958819" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- Read more button -->
                <a class="btn btn-outline-black btn-block waves-effect" href="contacto.php"><strong>Se el primero en enterarte</strong></a>
            </div>

        </div>
    </div>


    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>


</body>

</html>

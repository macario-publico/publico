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
        <div id="slide-prado" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Prado Norte 225</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4"><span class="font-weight-bold">Próximamente:</span> Espacios de trabajo y escritorios de coworking con todas las comodidades incluidas.</h3>
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
                        <h2 class="titulos sans-bold mt-5 mb-4">Prado Norte 225</h2>
                        <p class="subtitulo mb-s">a partir del verano 2019 renta tu oficina o cowork en el nuevo distrito financiero de la CDMX, nuestra espacio contará con una ubicación privilegiada dentro de la CDMX.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mt-4 mb-5">
                <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.642013006584!2d-99.20920538560415!3d19.427867586886986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f5dc7bf9ed%3A0xd9b52487f06b4d9a!2sAvenida+Prado+Norte+225%2C+Lomas+-+Virreyes%2C+Lomas+de+Chapultepec+III+Secc%2C+11000+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1536607246071" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- Read more button -->
                <a class="btn btn-outline-black btn-block waves-effect" href="contacto.php"><strong>Se el primero en enterarte</strong></a>
            </div>
        </div>

        <?php require('require/info-contacto.php'); ?>

        <?php require('require/footer.php'); ?>

        <?php require('require/scripts.php'); ?>
</body>

</html>

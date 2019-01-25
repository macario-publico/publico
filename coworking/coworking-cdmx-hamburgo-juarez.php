<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.png" />
     <title> PÚBLICO Juarez | Coworking CDMX</title>

    <?php require('require2/head.php'); ?>
    <link rel="stylesheet" href="../css/muzquiz.css">
</head>

<body>

    <?php require('require2/float-social.php'); ?>

    <header>

        <?php require('require2/nav.php'); ?>

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
                            <h2 class="mb-4 tagtitle"><span class="font-weight-bold">Próximamente:</span> Espacios de trabajo y escritorios de coworking con todas las comodidades incluidas</h2>
                        </div>
                        <!--Grid column-->

                        <?php require('require2/social-header.php'); ?>

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
                        <h1 class="titulos sans-bold mt-5 mb-4">PÚBLICO Juárez</h1>
                        <p class="subtitulo mb-s">
                            A partir del marzo 2019 renta tu oficina o cowork en la Colonia Juárez, nuestro espacio contará con una ubicación privilegiada dentro de la CDMX.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-10 my-4">
                <div id='map' class="alturasMapa" style='width: 100%;'></div>
            </div>
        </div>
    </div>
    </div>


    <?php require('require2/info-contacto.php'); ?>

    <?php require('require2/footer.php'); ?>

     <script src='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>

    <?php require('require2/scripts.php'); ?>

    <script src="require2/locations.js"></script>

</body>

</html>

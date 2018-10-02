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
        <div id="slide-membresias" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Nuestros planes de renta</h1>
                            <h3 class="mb-4">Elige el plan que mejor se adapte a tus necesidades</h3>
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
                        <h2 class="titulos sans-bold mt-5 mb-4">Tipos de membresías</h2>
                        <p class="subtitulo pt-0">
                            Contamos con diferentes membresías según el espacio de trabajo que la dinámica de tu empresa necesite.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('require/membresia.php'); ?>

    <?php require('require/servicios.php'); ?>

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>
    
    
</body>

</html>

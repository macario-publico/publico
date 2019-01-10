<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.png" />

    <?php require('require/head.php'); ?>
    <link rel="stylesheet" href="css/muzquiz.css">
</head>

<body>

    <?php include('require/float-social.php'); ?>

    <header>
        <?php include('require/nav.php'); ?>

        <!-- Full Page Intro -->
        <div id="slide-cowork" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-xl-5">PÚBLICO Coworking</h1>
                            <!--<hr class="hr-light">-->
                            <h2 class="mb-4 tagtitle">Renta de salas de juntas, oficinas privadas y espacios de coworking en la CDMX.</h2>
                        </div>
                        <!--Grid column-->

                        <?php include('require/social-header.php'); ?>

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


    <div class="row mx-0 my-4">
        <div class="col-12 col-md-10 col-lg-7">
            <div class="row m-botton">
                <div class="col-12 col-md-10 offset-md-1">

                </div>
            </div>
        </div>
    </div>

    <section id="ubicaciones">
        <div class="container-fluid">
            <div class="row justify-content-around mt-negativo2">

                <?php include('require/ubicaciones.php'); ?>

            </div>
        </div>
    </section>
    <div class="separador5"></div>
    <div class="container-fluid">
        <div class="row mx-0 my-4">
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                        <h2 class="titulos sans-bold">Beneficios:</h2>
                        <p class="subtitulo text-justify">Hemos creado una experiencia para el usuario basada en sus necesidades. Conoce nuestros beneficios:
                        </p>
                        <ul class="subtitulo">
                            <li>
                                <p class="subtitulo text-justify">Trabaja en nuestras múltiples ubicaciones.</p>
                            </li>
                        </ul>

                            <p class="subtitulo text-justify ml-5">Oficinas completamente equipadas con todos los servicios y comodidades.</p>
                            <p class="subtitulo text-justify ml-5">Experiencia personalizada: nuestro equipo entiende y te ayudará a satisfacer las necesidades de tu negocio.</p>
                            <p class="subtitulo text-justify ml-5">Disfruta de nuestros eventos especiales para la comunidad y de las colaboraciones con artistas mexicanos en nuestras ubicaciones.</p>
                            <p class="subtitulo text-justify ml-5">Forma parte de una comunidad que busca colaborar entre sí.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 my-4">
                <div id='map' class="alturasMapa" style='width: 100%;'></div>
            </div>
        </div>
    </div>

    <div class="separador5"></div>

    <section id="espacios">

        <div class="container-fluid">
            <div class="row mx-0 my-4">
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-12 col-md-11 offset-md-1">
                            <h2 class="titulos sans-bold mb-3">Espacios para la creatividad y productividad</h2>
                            <p class="subtitulo text-justify mb-3">Pensados en la dinámica de diferentes tipos de equipos de trabajo, las oficinas privadas y espacios de coworking de PÚBLICO le darán un boost a la productividad y proactividad de tu empresa y sus miembros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('require/galeria-espacios.php'); ?>

    <?php include('require/testimoniales.php'); ?>

    <?php include('require/servicios.php'); ?>

    <?php include('require/info-contacto.php'); ?>

    <?php include('require/footer.php'); ?>

    <?php include('require/scripts.php'); ?>


</body>

</html>

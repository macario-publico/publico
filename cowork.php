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
                            <h3 class="mb-4">Renta de salas de juntas, oficinas privadas y espacios de coworking en la CDMX.</h3>
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

                <?php require('require/ubicaciones.php'); ?>

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
                        <p class="subtitulo text-justify">Hemos creado una experiencia para el usuario basada en sus necesidades, conoce nuestros beneficios:
                        </p>
                        <p class="subtitulo text-justify">Trabaja en nuestras múltiples ubicaciones.</p>
                        <ul class="subtitulo">
                            <li>Oficinas completamente equipadas con todos los servicios y comodidades.</li>
                            <li>Experiencia personalizada: nuestro equipo entiende y te ayudará a satisfacer las necesidades de tu negocio.</li>
                            <li>Disfruta de nuestros eventos especiales para la comunidad y de las colaboraciones con artistas mexicanos en nuestras ubicaciones.</li>
                            <li>Forma parte de una comunidad que busca colaborar entre sí.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 my-4">
                 <iframe class="alturasMapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.007582716011!2d-99.19203055011823!3d19.41207834630378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201e1fd4fada3%3A0x3433fd6c1d0f7e61!2zUMO6YmxpY28!5e0!3m2!1ses-419!2smx!4v1533675330065" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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


    <?php require('require/galeria-espacios.php'); ?>
    
    <?php require('require/testimoniales.php'); ?>
    
    <?php require('require/servicios.php'); ?>

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>
    
    
</body>

</html>

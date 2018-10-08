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
        <div id="slide-about" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Publico,<br>espacios para crear</h1>
                            <!--<hr class="hr-light">-->
                            <!--                            <h3 class="mb-4">Renta de espacios de coworking y<br> oficinas privadas en la CDMX.</h3>-->
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
                        <h2 class="titulos sans-bold">Acerca de Nosotros</h2>
                        <p class="subtitulo">
                            Desarrollamos proyectos inmobiliarios basados en la forma actual en la que viven las personas.
                        </p>
                        <p class="subtitulo">
                            Somos también una comunidad que inspira creatividad al combinar diversas disciplinas y fomentar el intercambio de ideas. Nuestros espacios para crear incluyen oficinas amuebladas, estudio de fotografía, salas de juntas y conferencias y amplias terrazas con vistas únicas de la CDMX.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="membresias" class="py-5">
        <div class="container-fluid">
            <div class="row mx-0 my-4">
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h2 class="titulos sans-bold">CREDO</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around">
                <div class="col-12 col-lg-10">
                    <img src="img/fotos/about/PUBLICO_COWORKING_CREDO.jpg" alt="" class="img-fluid">
                    <ul class="text-body mt-5">
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en el bienestar individual y colectivo</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en el debate y en la colaboración con mentes creativas.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en cuestionar el status quo y en la búsqueda de mejores alternativas.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en el ingenio y en la innovación y sabemos que los recursos son finitos.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en la constante reinvención pero también en nuestra esencia.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en la autenticidad cultural.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en la investigación responsable.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> en los detalles.</li>
                        <li class="my-3"><span class="font-weight-bold">Creemos</span> que solo en el cumplimiento de nuestros principios rectores podremos lograr experiencias perdurables.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/x36_MyzfzKg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>


</body>

</html>

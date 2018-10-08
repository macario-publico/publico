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
        <div id="slide-estudio" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Estudio de fotografía</h1>
                            <!--<hr class="hr-light">-->
                            <!--                            <h3 class="mb-4"><span class="font-weight-bold">Emprende en la Condesa.</span> Una mezcla de modernidad, tradición y riqueza histórica en la <span class="font-weight-bold">Condesa.</span></h3>-->
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
                        <p class="subtitulo lineHeight">
                            Ubicado en <a href="muzquiz.php" class="black-text"><span class="font-weight-bold">San Miguel Chapultepec</span></a>, el estudio fotográfico de PÚBLICO es un espacio que te permitirá realizar sesiones fotográficas y videos profesionales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="membresias" class="py-5">
        <div class="container-fluid">
            <div class="row mx-0 my-4">
<!--
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h2 class="titulos sans-bold">Características</h2>
                        </div>
                    </div>
                </div>
-->
            </div>

            <div class="row justify-content-around">
                <div class="col-12 col-lg-10">
                    <img src="img/fotos/estudio/PUBLICO_COWORKING_estudiofoto.jpg" alt="" class="img-fluid">
                    <h5 class="titulos sans-bold mt-5">Características</h5>
                    <p class="subtitulo">La renta de este espacio incluye:</p>
                    <ul class="subtitulo mt-3">
                        <li class="my-3"> Cortinas black out y buena iluminación durante el día </li>
                        <li class="my-3"> Ciclorama color blanco / 6x5mts </li>
                        <li class="my-3"> Altura total 3 mts</li>
                        <li class="my-3"> Stand de maquillaje</li>
                        <li class="my-3"> Conexión a internet</li>
                    </ul>
<!--                    <p class="titulos sans-bold mt-4">Horario</p>-->
                    <p class="subtitulo">Horario: de lunes a domingo de 8am a 8pm (Ver disponibilidad de horario)</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reservaciones" class="my-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-10">
                    <!-- Material form contact -->
                    <div class="card noShadow">

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form action="estudio.php" method="post">
                                <div class="form-row mb-4">
                                    <!-- Name -->
                                    <div class="col md-form">
                                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                                        <label for="nombre">Nombre</label>
                                    </div>

                                    <!-- Apellido -->
                                    <div class="col md-form">
                                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                                        <label for="apellido">Apellido</label>
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <!-- E-mail -->
                                    <div class="col-12 col-md-6 md-form">
                                        <input type="email" id="materialContactFormEmail" name="email" class="form-control" required>
                                        <label for="materialContactFormEmail">E-mail</label>
                                    </div>
                                    <!-- Name -->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="horas" required>
                                                <option selected disabled>Cuántas horas?</option>
                                                <option value="4hrs">Mínimo 4 hrs</option>
                                                <option value="5-10">5-10</option>
                                                <option value="Dia completo">Día completo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--Message-->
                                <div class="form-row mb-4">
                                    <div class="col-12 md-form">
                                        <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="materialContactFormMessage">Message</label>
                                    </div>

                                    <!-- Copy -->
                                    <div class="co--12 form-check">
                                        <input type="checkbox" class="form-check-input" id="materialContactFormCopy" required>
                                        <label class="form-check-label" for="materialContactFormCopy">Acepto el Aviso de Privacidad</label>
                                    </div>
                                </div>
                                <!-- Send button -->
                                <button class="btn btn-outline-black font-weight-bold btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Enviar</button>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form contact -->
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <?php require('require/info-contacto.php'); ?>

    <?php require('require/footer.php'); ?>

    <?php require('require/scripts.php'); ?>


</body>

</html>

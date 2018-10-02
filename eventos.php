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
        <div id="slide-eventos" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-8 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">Eventos</h1>
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
                    <div class="col-12 offset-md-1">
                        <h2 class="titulos sans-bold mb-4">¿Porqué hacer tu evento en Público?</h2>
                        <p class="subtitulo lineHeight">
                            Al rentar un espacio para tu evento en PÚBLICO nuestro equipo te ofrecerá una atención personalizada para asegurarnos que esta experiencia resulte tal y como lo imaginas.</p>
                    </div>

                </div>
            </div>
            <div class="col-12 text-center">
                <img src="img/fotos/eventos/publico_coworking_EVENTOS_galeria1.jpg" alt="" class="mx-auto d-block img-fluid">
            </div>
        </div>
    </div>

    <section id="eventos" class="">
        <div class="container-fluid">
            <div class="row mx-0 my-4">
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-12 offset-md-1">
                            <h2 class="titulos sans-bold mb-4">Tipos de evento que puedes realizar.</h2>
                            <p class="subtitulo lineHeight mb-4">
                                <span class="font-weight-bold">Eventos privados:</span> Realiza cualquier tipo de evento privado: desde reuniones con clientes potenciales hasta celebraciones únicas.
                            </p>
                            <p class="subtitulo lineHeight mb-4">
                                <span class="font-weight-bold">Eventos empresariales:</span>  Lanzamientos de obras, Exposiciones de arte, showrooms.
                            </p>
                            <p class="subtitulo lineHeight mb-4">
                                <span class="font-weight-bold">Eventos para tu marca:</span> Pop ups, lanzamientos de productos, eventos de crowdfunding.
                            </p>
                            <p class="subtitulo lineHeight mb-4">
                                <span class="font-weight-bold">Eventos para la comunidad:</span> Clases de meditación y yoga, talleres y workshops para emprendedores, diseñadores y fotógrafos. PÚBLICO es tu aliado en difundir tus habilidades.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('require/galeria.php'); ?>

    <section id="reservaciones" class="my-5">
        <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 offset-md-1">
                    <p class="titulos mt-5 mb-3">
                        <span class="font-weight-bold">Cuéntanos sobre tu evento ¿Qué tienes en mente? ¡Déjalo en nuestras manos!</span>
                    </p>
                </div>
                <div class="col-12">
                    <!-- Material form contact -->
                    <div class="card noShadow">
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                            <!-- Form -->
                            <form action="PHPMailer/eventos.php" method="post">
                                <h2 class="titulos sans-bold mb-4"><span class="font-weight-bold">Tu evento en PÚBLICO</span></h2>
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
                                        <input type="text" id="empresa" name="empresa" class="form-control" required>
                                        <label for="empresa">Nombre de la empresa</label>
                                    </div>
                                    <!-- Name -->
                                    <div class="col-12 col-md-6 md-form">
                                        <input type="tel" id="telefono" name="telefono" class="form-control" required>
                                        <label for="telefono">Teléfono</label>
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
                                            <select name="afiliado" required>
                                                <option selected disabled>¿Tú empresa tiene oficina en Público?</option>
                                                <option value="Soy parte de Público">Soy parte de Público</option>
                                                <option value="No somos parte de Público">No somos parte de Público</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="titulos sans-bold mb-4"><span class="font-weight-bold">Informe del evento</span></h2>
                                <div class="form-row mb-4">
                                    <!-- E-mail -->
                                    <div class="col-12 col-md-6 md-form">
                                        <label for="horario" class="labelHorario">Horario:</label>
                                        <input type="time" id="horario" name="horario" min="09:00" max="20:00" value="09:00" class="form-control" required>
                                        <!--
                                        <div class="caja-select">
                                            <select>
                                                <option selected disabled>Horario:</option>
                                                <option value="Soy parte de Público">Soy parte de Público</option>
                                                <option value="No somos parte de Público">No somos parte de Público</option>
                                              </select>
                                        </div>
-->
                                    </div>
                                    <!-- Name -->
                                    <div class="col-12 col-md-6 md-form">
                                        <label for="fecha" class="labelHorario">Fecha:</label>
                                        <input type="date" id="fecha" name="fecha" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <!--Invitados-->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="invitados" required>
                                                <option selected disabled>Numero Invitados:</option>
                                                <option value="5-10">5-10</option>
                                                <option value="11-20">11-20</option>
                                                <option value="21-50">21-50</option>
                                                <option value="21-50">50-150</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Tipo de Evento -->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="evento" required>
                                                <option selected disabled>Tipo de Evento:</option>
                                                <option value="Evento privado">Evento privado</option>
                                                <option value="Evento empresarial">Evento empresarial</option>
                                                <option value="Evento cultural">Evento cultural</option>
                                                <option value="Evento para tu marca">Evento para tu marca</option>
                                                <option value="Evento para la comunidad">Evento para la comunidad</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <!--Invitados-->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="publico" required>
                                                <option selected disabled>Es para todo el publico?</option>
                                                <option value="Para la comunidad de PUBLICO">Para la comunidad de PÚBLICO!</option>
                                                <option value="Abierto al publico en general">Abierto al publico en general</option>
                                                <option value="Habra una lista de invitados">Habra una lista de invitados</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--Message-->
                                <div class="form-row mb-4">
                                    <div class="col-12 md-form">
                                        <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" name="mensaje" rows="3"></textarea>
                                        <label for="materialContactFormMessage">Mensaje</label>
                                    </div>

                                    <!-- Copy -->
                                    <div class="col-12 form-check">
                                        <input type="checkbox" class="form-check-input" id="materialContactFormCopy" name="aviso" value="Acepto el Aviso de Privacidad" required>
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

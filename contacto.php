<!DOCTYPE html>
<html lang="es">

<head>
   
     <?php require('require/head.php'); ?>
    <link rel="stylesheet" href="css/muzquiz.css">
    
</head>

<body>
 <?php require('require/float-social.php'); ?>
 <?php require('require/nav.php'); ?>
   
    <!-- Main navigation -->

    <div class="separador15VH"></div>

    <div class="container-fluid">
        <div class="row mx-0 my-4">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 offset-md-1">
                        <!--                        <h2 class="titulos sans-bold mb-4">¿Porqué hacer tu evento en Público?</h2>-->
                        <p class="subtitulo lineHeight">
                            Déjanos tus datos y en breve nos comunicaremos contigo o llámanos y agenda una visita <span class="font-weight-bold"> 55 1454 2531</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section id="reservaciones" class="my-5">
        <div class="container">
            <h2 class="titulos sans-bold pl-3 mb-4"><span class="font-weight-bold">El espacio perfecto para tus ideas:</span></h2>
            <div class="row justify-content-center">

                <div class="col-12">
                    <!-- Material form contact -->
                    <div class="card noShadow">
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">
                            <!-- Form -->
                            <form action="contacto.php" method="post">
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
                                        <input type="email" id="email" name="email" class="form-control" readonly>
                                        <label for="email">E-mail</label>
                                    </div>
                                    <!-- Name -->
                                    <div class="col-12 col-md-6 md-form">
                                        <input type="tel" id="telefono" name="telefono" class="form-control" readonly>
                                        <label for="telefono">Teléfono</label>
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <!-- E-mail -->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="invitados" required>
                                                <option selected disabled>¿Para cuantas personas?</option>
                                                <option value="1">1</option>
                                                <option value="2-5">2-5</option>
                                                <option value="5-10">5-10</option>
                                                <option value="11-20">11-20</option>
                                                <option value="Mas de 20">Más de 20</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Name -->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="sucursal" required>
                                                <option selected disabled>¿Qué sucursal te interesa?</option>
                                                <option value="Muzquiz">Muzquiz</option>
                                                <option value="Seneca">Seneca</option>
                                                <option value="Molier">Molier</option>
                                                <option value="Puebla">Puebla</option>
                                                <option value="Prado Norte 225 - proximamente otoño 19">Lomas - próximamente verano’19</option>
                                                <option value="Hamburgo - proximamente otoño 19">Juárez - próximamente verano’19</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <!-- E-mail -->
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="intereses" required>
                                                <option selected disabled>En que estas interesado?</option>
                                                <option value="Oficinas Privadas">Oficinas Privadas</option>
                                                <option value="Cowork">Cowork</option>
                                                <option value="Estudio de Fotografía">Estudio de Fotografía</option>
                                                <option value="Evento">Evento</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select name="esatdo" required>
                                                <option selected disabled>De donde nos visitas?</option>
                                                <option value="Press">Press</option>
                                                <option value="Web Search">Web Search</option>
                                                <option value="Redes">Redes</option>
                                                <option value="Referido">Referido</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-row mb-4">
                                    <!--Invitados-->
                                   
                                    <!-- Tipo de Evento 
                                    <div class="col-12 col-md-6">
                                        <div class="caja-select">
                                            <select>
                                                <option selected disabled>Tipo de Evento:</option>
                                                <option value="Junta de Negocios">Junta de Negocios</option>
                                                <option value="Reunion de equipo">Reunion de equipo</option>
                                            </select>
                                        </div>
                                    </div>  -->
                                </div>

                                <!--Message-->
                                <div class="form-row mb-4">
                                    <div class="col-12 md-form">
                                        <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="materialContactFormMessage">Mensaje</label>
                                    </div>

                                    <!-- Copy -->
                                    <div class="col-12 form-check">
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

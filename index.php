<!DOCTYPE html>
<html lang="es">

<head>
    <?php require('require/head.php'); ?>

    <style>
        body{overflow: hidden;}
    </style>
</head>

<body>

    <div class='preloader-container'>
        <div class='preloader'>
            <div class="logo">
                <img src="img/preload.gif" id="logoPre" alt="">
            </div>
            <div class='preloader-dots'>
                <div class='dot'></div>
                <div class='dot'></div>
                <div class='dot'></div>
                <div class='dot'></div>
                <div class='dot'></div>
            </div>
        </div>
    </div>

    <?php require('require/float-social.php'); ?>

    <header>
        <img src="img/badge.png" class="bottom2" alt="">
        
        <?php require('require/nav.php'); ?>

        <!-- Full Page Intro -->
        <div id="slideHome" class="view slide">
            <!-- Mask & flexbox options-->
            <div class="mask d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="row justify-content-between">
                        <!--Grid column-->
                        <!--                        <div class="col-12 mt-5 py-5"></div>-->
                        <div class="col-md-6 white-text text-center text-md-left mt-3 mb-5 pl-4 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="display-4 font-weight-bold mt-lg-5">PÚBLICO Coworking</h1>
                            <!--<hr class="hr-light">-->
                            <h3 class="mb-4">Renta de oficinas privadas, espacios de coworking y salas de juntas en la CDMX.</h3>
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

    <div class="container-fluid">
        <div class="row mx-0 my-4">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="row m-botton">
                    <div class="col-12 col-md-12 pl-0 offset-md-1">
                        <h2 class="titulos sans-bold mt-5 mb-4">Nuestras ubicaciones</h2>
                        <p class="subtitulo mb-3">Cambia tu perspectiva de trabajo y hazlo desde
                            <span class="font-weight-bold">cuatro ubicaciones estratégicas</span> en la <span class="font-weight-bold">ciudad de Mexico: Polanco, La Condesa y San Miguel Chapultepec.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="ubicaciones">
        <div class="container-fluid">
            <div class="row justify-content-around pb-5">

                <div class="col-12">
                    <div class="row mt-negativo">
                       
                        <div class="col-12 col-md-6 my-4">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <!-- Card -->
                                    <div class="card wow fadeInUp">
                                        <a href="muzquiz.php">
                                            <!-- Card image -->
                                            <div class="overlay">
                                                <img class="card-img-top" src="img/fotos/home/publico_coworking_card_muzquiz.jpg" alt="cowork">
                                                <a href="#">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </a>
                                        <!-- Card content -->
                                        <a class="colorBtnCard" href="muzquiz.php">
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h4 class="card-title">Muzquiz 15</h4>
                                                <!-- Text -->
                                                <p class="card-text">Renta de oficinas amuebladas y escritorios privados con acceso a áreas comunes para equipos de diversos tamaños.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-4">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <!-- Card -->
                                    <div class="card wow fadeInUp">
                                        <!-- Card image -->
                                        <a href="puebla.php">
                                            <div class="overlay">
                                                <img class="card-img-top" src="img/fotos/home/publico_coworking_card_puebla.jpg" alt="cowork">
                                                <a href="#">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </a>
                                        <!-- Card content -->
                                        <a href="puebla.php" class="colorBtnCard">
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h4 class="card-title">Puebla 403</h4>
                                                <!-- Text -->
                                                <p class="card-text">Cerca de La Roma, Ave. Chapultepec, Reforma y el Bosque de Chapultepec.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Card -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 my-4">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <!-- Card -->
                                    <div class="card wow fadeInUp">
                                        <!-- Card image -->
                                        <a href="moliere.php">
                                            <div class="overlay">
                                                <img class="card-img-top" src="img/fotos/home/publico_coworking_card_moliere.jpg" >
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </a>

                                        <!-- Card content -->

                                        <a href="moliere.php" class="colorBtnCard">
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h4 class="card-title">Moliere 50</h4>
                                                <!-- Text -->
                                                <p class="card-text">Oficinas privadas rodeadas de cultura, moda y nuestra propuesta gastronómica PÚBLICO Comedor.</p>
                                            </div>
                                        </a>

                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-4">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <!-- Card -->
                                    <div class="card wow fadeInUp">
                                        <!-- Card image -->
                                        <a href="seneca.php">
                                            <div class="overlay">
                                                <img class="card-img-top" src="img/fotos/home/publico_coworking_card_seneca.jpg" alt="Card image cap">
                                                <a href="#">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </a>

                                        <!-- Card content -->
                                        <a href="seneca.php" class="colorBtnCard">
                                            <div class="card-body">
                                                <!-- Title -->
                                                <h4 class="card-title">Séneca 61</h4>
                                                <!-- Text -->
                                                <p class="card-text">Renta de oficinas equipadas en Polanco, a unos pasos de la Avenida Presidente Masaryk.</p>
                                            </div>
                                        </a>

                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 mt-5">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="subtitulo">Próxima apertura:</h4>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-5 my-4">

                    <!-- Grid row -->
                    <div class="row wow fadeInUp">
                        <!-- Grid column -->
                        <div class="col-12 col-md-6">
                            <!-- Featured image -->
                            <div class="overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/fotos/home/publico_coworking_card_hamburgo.jpg" alt="Juarez">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 col-md-6">
                            <!-- Post title -->
                            <h3 class="sans-bold mb-3"> Público Juárez</h3>
                            <!-- Excerpt -->
                            <p class="card-text">Verano 2019</p>
                            <!-- Read more button -->
                            <a class="btn white-text mdb-color darken-4 btn-md" href="hamburgo.php">Conoce más</a>
                        </div>
                        <!-- Grid column -->
                    </div>

                </div>

                <div class="col-6 col-md-5 my-4">
                    <!-- Grid row -->
                    <div class="row wow fadeInUp">
                        <!-- Grid column -->
                        <div class="col-12 col-md-6">
                            <!-- Featured image -->
                            <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                <img class="img-fluid" src="img/fotos/home/publico_coworking_card_lomas.jpg" alt="Lomas">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-12 col-md-6">
                            <!-- Post title -->
                            <h3 class="sans-bold mb-3">PÚBLICO Lomas</h3>
                            <!-- Excerpt -->
                            <p class="card-text">Verano 2019</p>
                            <!-- Read more button -->
                            <a class="btn white-text mdb-color darken-4 btn-md" href="prado_norte.php">Conoce más</a>
                        </div>
                        <!-- Grid column -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <?php require('require/servicios.php'); ?>

    <?php require('require/testimoniales.php'); ?>

    <?php require('require/colaboradores.php'); ?>

    <section id="comedor" class="pb-5 overflow">
        <div class="container-fluid">

            <div class="row mx-0">
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="row mt-5">
                        <div class="col-12 col-md-12 offset-md-1">
                            <h2 class="titulos realce-green sans-bold">PÚBLICO comedor / PÚBLICO itacate:</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-10 pt-0 pt-md-5">
                    <!-- Grid row colaborador-->
                    <div class="row justify-content-center">
                        <!-- Grid column -->
                        <div class="col-lg-5 mb-5">
                            <div id="slideLeft" class="wow fadeInLeft">
                                <!-- Post title -->
                                <!--<h3 class="font-weight-bold mb-3"><strong>Chef Pablo salas</strong></h3>-->
                                <!-- Card -->
                                <div class="card noShadow">
                                    <div class="card-body p-0">
                                        <p class="card-text text-justify">Hacemos comida casera con mucho cariño e ingredientes de primera. A través de la visión y sazón del chef Pablo Salas ofrecemos platillos llenos de tradición casera y de fonda a un precio accesible, con un servicio ágil y en un entorno de diseño moderno, cómodo. Desde el 2016 nos guía la continua selección de ingredientes frescos y honestos, recetas nobles, los altos estándares y el incesante gusto de mejorar y renovar nuestra oferta.</p>
                                    </div>
                                </div>
                                <!-- Read more button -->
                                <a href="comedores.php" class="btn btn-outline-green btn-block waves-effect d-none d-lg-block mt-5"><strong>Conocenos más</strong></a>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-5">
                            <!-- Featured image -->
                            <div id="slideRight" class="wow fadeInRight">
                                <div class="overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/comedor.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <a href="comedores.php" class="btn btn-outline-green btn-block waves-effect d-lg-none mt-4">Conocenos más</a>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </div>
        </div>
    </section>

    <section id="eventos" class="my-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body z-depth-1 ">
                            <h2 class="titulos my-4 text-center">Realiza tu evento en PÚBLICO</h2>
                            <p class="subtitulo text-center">Contamos con <span class="font-weight-bold">espacios únicos</span> con todas las comodidades para hospedar eventos de todo tipo: conversatorios, lanzamientos de productos, conferencias, etc. No tienes que ser miembro de PÚBLICO para ser parte de la comunidad creativa que lleva a cabo eventos en nuestros espacios..</p>
                            <!-- Avatar -->
                            <div class="avatar white my-4">
                                <img src="img/fotos/home/publico_coworking_eventos.jpg" class="img-fluid d-block mx-auto">
                            </div>
                            <!-- Read more button -->
                            <a class="btn btn-outline-black btn-block waves-effect" href="eventos.php"><strong>Conoce más</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="pb-5">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="row mt-5">
                        <div class="col-12 col-md-10 offset-md-1">
                            <h2 class="titulos sans-bold">Nuestro Blog:</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <!--                <div class="col-10 pt-5 text-center owl-colaboradores owl-carousel owl-theme">-->
                <div class="col-10 owl-colaboradores owl-carousel owl-theme owl-theme pt-5">
                    <div>
                        <!-- Grid row colaborador-->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <!-- Featured image -->
                                <div class="overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/fotos/blog/PUBLICO_COWORKING_BLOG_ONDA.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <div class="card noShadow">
                                    <!-- Post title -->
                                    <div class="card-body p-0">
                                        <h3 class="font-weight-bold mb-3"><strong>“PÚBLICO joins Onda”</strong></h3>
                                        <!-- Excerpt -->
                                        <p class="card-text text-justify">An exclusive platform for worldwide experiences Onda is a membership platform that connects people with selected clubs all around the world; coworking spaces, health clubs, retreats and private properties. Members of this platform can visit these curated group of spaces while they travel, creating deeper social connections. We are excited to partnered up withONDA and become their first and only coworking space in Mexico. Visit ONDA’s website here.</p>

                                        <!-- Read more button -->
                                        <a href="https://www.publi.co/blog/publico-joins-onda" class="btn btn-outline-black btn-block waves-effect"><strong>Leer más</strong></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <div>
                        <!-- Grid row colaborador-->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <!-- Featured image -->
                                <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/fotos/home/blog/industrial.png" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <div class="card noShadow">
                                    <!-- Post title -->
                                    <div class="card-body p-0">
                                        <h3 class="font-weight-bold mb-3"><strong>“INDUSTRIAL by Público, una oda al diseño y al trabajo colaborativo”</strong></h3>
                                        <!-- Excerpt -->
                                        <p class="card-text text-justify">El diseño industrial ha evolucionado para ofrecer distintos productos enfocados en estética, funcionalidad y simbolismo, elementos intrínsecos en el ADN de INDUSTRIAL, una de las divisiones de negocio de PÚBLICO, empresa mexicana que desde 2013 desarrolla proyectos inmobiliarios con base en el estilo de vida de las personas. Liderados por Allan Legaspi, esta empresa tiene como pilares de su filosofía, la creación, colaboración y producción de proyectos creativos que generen experiencias integrales.</p>

                                        <!-- Read more button -->
                                        <a href="https://www.publi.co/blog/industrial-by-publico-una-oda-al-diseno-y-al-trabajo-colaborativo/" class="btn btn-outline-black btn-block waves-effect"><strong>Leer más</strong></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <div>
                        <!-- Grid row colaborador-->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <!-- Featured image -->
                                <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/fotos/blog/PUBLICO_COWORKING_BLOG_HISTORIA.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <div class="card noShadow">
                                    <!-- Post title -->
                                    <div class="card-body p-0">
                                        <h3 class="font-weight-bold mb-3"><strong>“La historia detrás de la creación de Público”</strong></h3>
                                        <!-- Excerpt -->
                                        <p class="card-text text-justify">Público ofrece espacios que se adaptan al estilo de vida y las necesidades de las personas que los habitan. Es por esto, que nuestros espacios se adaptan el estilo de vida y las necesidades de los emprendedores que los habitan. Formar parte de Público es compartir una visión del mundo para generar cambios positivos en comunidad. Conoce a nuestros fundadores: Andrés, Emilio y Alfonso quienes relatan la esencia y la historia de cómo Público pasó de ser una idea a una realidad para todos los emprendedores de la #CDMX.</p>
                                        <!-- Read more button -->
                                        <a href="https://www.publi.co/blog/la-historia-detras-de-la-creacion-de-publico/" class="btn btn-outline-black btn-block waves-effect"><strong>Leer más</strong></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                    <div>
                        <!-- Grid row colaborador-->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <!-- Featured image -->
                                <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/fotos/blog/PUBLICO_COWORKING_BLOG_GIRLPOWER.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <div class="card noShadow">
                                    <!-- Post title -->
                                    <div class="card-body p-0">
                                        <h3 class="font-weight-bold mb-3"><strong>“ESPACIOS COLABORATIVOS: LAS OFICINAS PERFECTAS PARA SACAR TU GIRL POWER”</strong></h3>
                                        <!-- Excerpt -->
                                        <p class="card-text text-justify">A las mujeres les gusta mantenerse al pendiente de las tendencias, por lo que en esta ocasión, PÚBLICO les comparte las últimas trends en cuestión laboral: los espacios colaborativos. Estos lugares, además de estar ubicados en edificios de arquitectura contemporánea, tener mobiliario de diseñador y ofrecer café todo el día, también se ha convertido en el sitio perfecto para desarrollar y potenciar ideas de negocio. A continuación te compartimos 5 razones por las cuales deberías considerar unirte a un espacio colaborativo que te ofrezca la atmósfera laboral y creativa que necesitas para alcanzar tus objetivos.</p>

                                        <!-- Read more button -->
                                        <a href="https://www.publi.co/blog/espacios-colaborativos-las-oficinas-perfectas-para-sacar-tu-girl-power/" class="btn btn-outline-black btn-block waves-effect"><strong>Leer más</strong></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                    </div>
                    <div>
                        <!-- Grid row colaborador-->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <!-- Featured image -->
                                <div class=" overlay rounded z-depth-1 mb-lg-0 mb-4">
                                    <img class="img-fluid" src="img/fotos/blog/PUBLICO_COWORKING_BLOG_TBP.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-5">
                                <div class="card noShadow">
                                    <!-- Post title -->
                                    <div class="card-body p-0">
                                        <h3 class="font-weight-bold mb-3"><strong>“UNA MIRADA A THE BRANDING PEOPLE”</strong></h3>
                                        <!-- Excerpt -->
                                        <p class="card-text text-justify">The Branding People es un estudio de diseño basado en la CDMX que se especializa en la construcción de marca y el desarrollo de elementos de comunicación visual que conecten con el usuario de cada una de las marcas a las que les han dado identidad. Funcionalidad, estética y elocuencia distingue el trabajo y filosofía de The Branding People. Estos tres pilares se reflejan en el nuevo branding de este equipo creativo.</p>

                                        <!-- Read more button -->
                                        <a href="https://www.publi.co/blog/una-mirada-a-the-branding-people/" class="btn btn-outline-black btn-block waves-effect"><strong>Leer más</strong></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </div>

            </div>
        </div>
    </section>
    
    <section id="instagram">

        <div class="container">
            <div class="row justify-content-center mx-0 my-5">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="img/iconos/redes/negro/ig_n.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 mb-4">
                    <img src="img/insta/insta.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="img/insta/insta2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="img/insta/insta.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="img/insta/insta2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4 d-none d-md-block">
                    <img src="img/insta/insta3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4 d-none d-md-block">
                    <img src="img/insta/insta4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4 d-none d-md-block">
                    <img src="img/insta/insta3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-6 col-md-3 mb-4 d-none d-md-block">
                    <img src="img/insta/insta4.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="lideres" class="pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center mx-0">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="titulos text-center mb-5">Más de 500 creativos forman parte de nuestra comunidad.</h2>
                            <h5 class="sans-bold text-center my-3">Nuestra comunidad y aliados.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-10 pt-5 text-center owl-aliados owl-carousel owl-theme">
                    <div>
                        <img src="img/aliados/masschallenge.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/tedx.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/airbnb.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/4designweekmexico.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/5mercedes.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/6macario.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/abiertoMexicano.jpg" class="w-responsive img-fluid" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/academia-metropolitana.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/actium.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/antonio-saucedo.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/arvizu-asociados.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/bartholomeow.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/bengala.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/betahaus.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/betrep.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/bw.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/cheirblair.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/chilakatazo.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/chilango.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/CM.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/coolhunterMX.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/dondeIR.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/effect.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/ekta.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/euforia.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/evoka.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/expansive.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/fondea.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/gatopardo.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/impact.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/ISD.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/limon.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/local.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/lumbre.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/maison.jpg" alt="">
                    </div>

                    <div>
                        <img src="img/aliados/mercedes.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/new.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/origami.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/pasteTV.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/penninsula.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/peraj-mexico.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/polen.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/premios-metropolitanos.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/propeler.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/s2g.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/spacetime.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/squadrom.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/tack.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/TBP.jpg" alt="">
                    </div>

                    <div>
                        <img src="img/aliados/timeout.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/travesias.jpg" alt="">
                    </div>
                    <div>
                        <img src="img/aliados/warp.jpg" alt="">
                    </div>
                </div>

            </div>
           
        </div>
    </section>
    
    <?php require('require/info-contacto.php'); ?>
    
    <?php require('require/footer.php'); ?>
    
    <?php require('require/scripts.php'); ?>
    
    <script>
        $(window).on('load', function() {
            $('#logoPre').animate({
                top: 0,
                opacity: 1
            }, 1500);
            setTimeout('delay()', 3000);
        });

        function delay() {
            $('.preloader-container').fadeOut("slow");
            $('body').css({
                'overflow': 'visible'
            });
        }

    </script>

</body>

</html>

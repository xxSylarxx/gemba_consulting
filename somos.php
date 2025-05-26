<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gemba Consulting Group</title>
</head>


<body>

    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <style>
        .btn-about {
            font-family: 'Montserrat', sans-serif;
            color: var(--color4);
            font-size: 1.5rem;
            font-weight: 600;
            display: inline-block;
            margin-top: -5rem !important;
            text-decoration: none;
        }

        .btn-about i {
            transition: ease-in-out .8s;
        }

        .btn-about:hover i {
            transform: translateX(12px);
        }

        /* seccion bienvenidos */
        #bienvenidos {
            padding-top: 5rem;
            background-color: white;

            /* left: 50%;
            transform: translate(-50%, -50%); */
        }

        #bienvenidos h2 {
            color: var(--color3);
            text-align: center;
            font-weight: bold;
        }

        #bienvenidos p {
            text-align: justify;
            font-size: 1.2rem;
            font-family: "Red Hat Display", sans-serif;
        }

        #mision-vision h3 {
            color: var(--color4) !important;
        }

        #mision-vision i {
            font-size: 2rem;
            color: var(--color1);
        }

        #consultores2 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }



        /*   #consultores2 img {
            width: 100%;
            height: 450px; 
            object-fit: cover;
            object-position: top;
        } */

        #consultores2 i {
            font-size: 1.4rem;
            color: var(--color4);
        }

        #consultores2 a {

            text-decoration: none;
        }

        #consultores2 .card {
            border: none;
        }

        #consultores2 .card span {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 600;
        }

        #consultores2 .card {
            transition: ease-in-out .8s;
        }

        #consultores2 .card:hover {
            transform: scale(1.1);
        }
        #consultores2-pt2 h2 {
            font-size: 1.7rem;
        }

        #consultores2-pt2 h3,
        #consultores2-pt2 h5 {
            text-align: center;
        }

        /* #consultores2-pt2>div {
            overflow-x: auto;
        } */

        #consultores2-pt2 table img {
            max-width: 100%;
            height: auto;
        }


        #consultores3 img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            object-position: top;
        }

        #consultores3 .card {
            height: 600px;
        }

        #consultores {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #consultores p {
            text-align: left;
        }

        #consultores h2 {
            text-align: center;
            color: var(--color1);
            padding-bottom: 6rem;
        }


        #consultores p,
        #consultores h3 {
            padding-top: 1rem;
        }

        #consultores h3,
        #consultores h4 {
            font-weight: bold;
            text-align: center;
        }

        #consultores img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            object-position: top;
        }

        #alianzas {
            padding-bottom: 5rem;
        }

        #alianzas h2 {
            text-align: center;
            color: var(--color1);
            padding-bottom: 5rem;
        }

        #alianzas img {
            width: 100%;
            transition: ease-in-out .8s;
        }

        #alianzas img:hover {
            transform: scale(1.1);
        }

        #lema img {
            width: 100%;
        }

        /*  #lema {
            background-image: url('./public/img/web/pi-somos.png');
             background-attachment: fixed;
            background-size: 100%;
            padding-bottom: 10rem;
            padding-top: 10rem;
            background-position: center 25%;
            position: relative;
        }

        #lema::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            
            z-index: 1;
        }

        #lema h1 {
            position: relative;
            z-index: 2;
            font-size: 2.8rem;
            text-align: center;
            color: var(--color9);
        } */


        #testimonios {
            background: url(./public/img/web/back_testimonios.jpg);
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-attachment: fixed;
        }

        #testimonios h2 {
            text-align: center;
            color: var(--color5);
            padding-bottom: 5rem;
        }

        #testimonios .testimonio .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #testimonios .testimonio .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #testimonios .testimonio .owl-theme .owl-dots .owl-dot.active span,
        #testimonios .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color2);
        }

        #testimonios .testimonio .owl-nav button {
            background: var(--color4) !important;
            /* Color del fondo del botón */
            border: none !important;
            /* Quita el borde */
            color: white !important;
            /* Color del texto */
            /*  padding: 10px !important; */
            /* Espacio interno del botón */
            border-radius: 50% !important;
            /* Hace el botón circular */
            position: absolute !important;
            /* Posiciona el botón de manera absoluta */
            top: 50% !important;
            /* Centra verticalmente el botón */
            transform: translateY(-50%) !important;
            /* Ajusta la posición vertical */
            width: 45px !important;
            height: 45px !important;
        }

        #testimonios .testimonio .owl-nav span {
            font-size: 1.8rem;
        }

        #testimonios .testimonio .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #testimonios .testimonio .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #testimonios .testimonio .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        #testimonios .content {
            background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 50px;
            position: relative;
            z-index: 1;
            position: relative;
        }

        #testimonios .content::after {
            border-left: 30px solid transparent;
            border-right: medium none;
            border-top: 20px solid rgba(0, 0, 0, 0.5);
            bottom: -20px;
            content: "";
            left: 4px;
            position: absolute;
        }

        #testimonios p {
            color: white;
        }

        #testimonios .bottom {
            margin: 30px;

        }

        #testimonios .bottom img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            object-fit: cover;
            object-position: center;
        }

        #testimonios .info h4 {
            color: white;
            font-weight: 100;
        }

        #testimonios .info span {
            color: white;
            font-weight: 100;
            font-size: 1.2rem;
        }

        #valores {
            padding-top: 5rem;
            padding-left: 4rem;
            padding-right: 4rem;
        }

        #valores .content-valores {
            box-shadow: none;
            border: 1px solid #e7e8e8;
            border-bottom: 4px solid var(--color5);
            color: white;
            text-align: center;
            padding: 2rem;
            transition: ease-in-out .6s;
            position: relative;
            z-index: 99;
        }


        .hover {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .hover-one,
        .hover-two,
        .hover-three,
        .hover-four {
            position: absolute;
            left: 0;
            width: 100%;
            height: 25%;
            background: var(--color1);
            /* Reemplaza con tu color deseado */
            opacity: 0;
            z-index: -1;
            transition: all 0.35s ease;
            transform: scaleY(0);
        }

        .hover-one {
            top: 0;
            transition-delay: 0.25s;
        }

        .hover-two {
            top: 25%;
            transition-delay: 0.105s;
        }

        .hover-three {
            top: 49%;
            transition-delay: 0.105s;
        }

        .hover-four {
            top: 74%;
            transition-delay: 0s;
        }

        #valores .content-valores:hover {
            background-color: var(--color1);

        }

        #valores .content-valores:hover h4 {
            color: white;

        }

        #valores .content-valores:hover p {
            color: white;
        }

        #valores .content-valores:hover .hover-one {
            opacity: 1;
            transform: scaleY(1);

        }

        #valores .content-valores:hover .hover-two {
            opacity: 1;
            transform: scaleY(1);

        }

        #valores .content-valores:hover .hover-three {
            opacity: 1;
            transform: scaleY(1);

        }

        #valores .content-valores:hover .hover-four {
            opacity: 1;
            transform: scaleY(1);

        }


        #valores h4 {
            color: var(--color1);
            padding-top: 4rem;
        }

        #valores img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        #valores p {
            color: var(--color10);
            text-align: start;

        }

        /* Estilos base de col-lg en Bootstrap 5 */
        .col-gemba {
            flex: 1 0 0%;
            /* Crece de manera uniforme y ocupa el espacio disponible */
            max-width: 100%;
            /* Evita que las columnas se expandan más allá del contenedor */
        }


        @media screen and (max-width: 600px) {
            #valores {
                padding-left: .2rem;
                padding-right: .2rem;
            }

            #lema {
              
                padding-bottom: 0rem;
                background-size: 300%;
            }

            #alianzas img {
                width: 60%;
                transition: ease-in-out .8s;
            }

        }

        /* estilos responsivos para table */
        @media (max-width: 768px) {
            #consultores2-pt2 table {
                width: 100%;
                /* Asegura que la tabla ocupe todo el ancho disponible */
            }

            #consultores2-pt2 td {
                display: block;
                width: 100% !important;
                text-align: center;
                padding: 10px;
            }

            #consultores2-pt2 h2,
            #consultores2-pt2 p {
                text-align: center;
            }
        }

        @media screen and (min-width:900px)and (max-width:1350px) {
             /* Estilos base de col-lg en Bootstrap 5 */
             .col-gemba {
                flex: 1 0 0%;
                /* Crece de manera uniforme y ocupa el espacio disponible */
                max-width: 40%;
                /* Evita que las columnas se expandan más allá del contenedor */
            }
            #consultores2-pt2 h2{
                font-size: 1.7rem!important;
            }

        }
    </style>

    <?php include_once './partials/header.php'; ?>

    <section id="lema">
        <img src="./public/img/web/pi-somos.png" alt="">
    </section>
    <!---Bienvenidos -->
    <section id="bienvenidos">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <p class="text-center">Impulsamos la excelencia operativa y la mejora continua a través de soluciones personalizadas y un enfoque práctico.
                    </p>
                    <p class="text-center">Colaboramos estrechamente con nuestros socios globales de negocios para fortalecer personas, procesos y estrategias, generando resultados sostenibles.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <section id="mision-vision" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <!--  <div class="col-lg my-auto px-5 pt-5"> -->
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-1">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="col-lg-11">
                            <h3>Nuestra Misión</h3>
                            <p>Mejorar las organizaciones de nuestros clientes, proporcionando un enfoque de formación de personas en todos los niveles para desarrollar una cultura de mejora continua sostenible y brindar un valor agregado para lograr la excelencia operativa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-1">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="col-lg-11">
                            <h3>Nuestra Visión</h3>
                            <p>Ser reconocidos como socio estratégico líder para la mejora continua de las empresas en LATAM y contribuir a desarrollar su potencial, impulsando una cultura sostenible que les permita alcanzar su máximo rendimiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="valores">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color1);text-align:center;">Nuestros Valores</h2>
                </div>
            </div>
        </div>
        <br>
        <br>


        <div class="container-fluid">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg px-3 py-5">
                    <div class="content-valores h-100 ">
                        <img src="./public/img/icons/confianza.png" alt="">
                        <h4>Generar Confianza</h4>
                        <p>Buscamos crear relaciones basadas en la humildad, integridad, intención, capacidad y resultados.</p>
                        <div class="hover">
                            <span class="hover-one"></span>
                            <span class="hover-two"></span>
                            <span class="hover-three"></span>
                            <span class="hover-four"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg px-3 py-5">
                    <div class="content-valores h-100">
                        <img src="./public/img/icons/conocimiento.png" alt="">
                        <h4>Búsqueda del conocimiento</h4>
                        <p>Contamos con un profundo conocimiento y sabiduría basados en práctica y reflexión.</p>
                        <div class="hover">
                            <span class="hover-one"></span>
                            <span class="hover-two"></span>
                            <span class="hover-three"></span>
                            <span class="hover-four"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg px-3 py-5">
                    <div class="content-valores h-100">
                        <img src="./public/img/icons/enfoque.png" alt="">
                        <h4>Enfoque en nuestra gente</h4>
                        <p>Priorizamos respetar y cuidar a todas las personas comprometidas con el equipo.</p>
                        <div class="hover">
                            <span class="hover-one"></span>
                            <span class="hover-two"></span>
                            <span class="hover-three"></span>
                            <span class="hover-four"></span>
                        </div>

                    </div>
                </div>
                <div class="col-lg px-3 py-5">
                    <div class="content-valores h-100">
                        <img src="./public/img/icons/interes.png" alt="">
                        <h4>Interés por los Clientes</h4>
                        <p>Nos involucramos estrechamente con las necesidades del cliente para entregar soluciones de clase mundial.</p>
                        <div class="hover">
                            <span class="hover-one"></span>
                            <span class="hover-two"></span>
                            <span class="hover-three"></span>
                            <span class="hover-four"></span>
                        </div>

                    </div>
                </div>
                <div class="col-lg px-3 py-5">
                    <div class="content-valores h-100">
                        <img src="./public/img/icons/mejora.png" alt="">
                        <h4>Vivir la mejora continua</h4>
                        <p>Empleamos una mentalidad de mejora continua 24/7 en todo lo que hacemos. </p>
                        <div class="hover">
                            <span class="hover-one"></span>
                            <span class="hover-two"></span>
                            <span class="hover-three"></span>
                            <span class="hover-four"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="consultores2">
        <br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <h2 style="color:var(--color1);text-align:center;">Nuestro Equipo de Trabajo</h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <br>
            <br>
            <div class="row d-flex justify-content-center" id="consultores2-pt2">
                <!--  <div class="col-lg-4 px-5" style="padding-top: 5rem;">
                    <a href="./view1.php?id=1">
                        <div class="card h-100">
                            <img src="./public/img/web/equipo/jaime.png" alt="">
                            <div class="card-body">
                                <h3>Jaime Villafuerte</h3>
                            </div>
                            <div class="text-center">
                                <a href="./view1.php?id=1" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 px-5" style="padding-top: 5rem;">
                    <a href="./view1.php?id=2">
                        <div class="card h-100">
                            <img src="./public/img/web/equipo/angel.png" alt="">
                            <div class="card-body">
                                <h3>Angel Jurado</h3>
                            </div>
                            <div class="text-center">
                                <a href="./view1.php?id=2" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 px-5" style="padding-top: 5rem;">
                    <a href="./view1.php?id=3">
                        <div class="card h-100">
                            <img src="./public/img/web/equipo/cristina.png" alt="">
                            <div class="card-body">
                                <h3>Cristina Oyama</h3>
                            </div>
                            <div class="text-center">
                                <a href="./view1.php?id=3" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 px-5" style="padding-top: 5rem;">
                    <a href="./view1.php?id=4">
                        <div class="card h-100">
                            <img src="./public/img/web/equipo/natalie.jpg" alt="">
                            <div class="card-body">
                                <h3>Natalie Vargas</h3>
                            </div>
                            <div class="text-center">
                                <a href="./view1.php?id=4" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 px-5" style="padding-top: 5rem;">
                    <a href="./view1.php?id=5">
                        <div class="card h-100">
                            <img src="./public/img/web/equipo/yeza.png" alt="">
                            <div class="card-body">
                                <h3>Yeza Galeski</h3>
                            </div>
                            <div class="text-center">
                                <a href="./view1.php?id=5" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div> -->
                <div>
                    <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                        <tbody>
                            <tr>
                                <td style="width: 49.9734%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="./public/img/web/equipo/jaime.png" alt="" width="350" height="350" /></td>
                                <td style="width: 49.9734%; border-style: hidden;">
                                    <h2>JAIME VILLAFUERTE</h2>
                                    <div>&nbsp;</div>
                                    <div style="text-align: justify;">Soy Certified Lean Practitioner y Six Sigma Master Black Belt con m&aacute;s de 20 a&ntilde;os de experiencia aplicando mejora continua en empresas Fortune 500 a nivel global. He desarrollado estrategias, liderado transformaciones organizacionales y fomentado el desarrollo de talento, adem&aacute;s de ser autor de libros clave sobre Lean Six Sigma. Como ponente internacional y ex Examinador Nacional de Calidad Baldrige, me especializo en estrategia, liderazgo del cambio y mejora de procesos.</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                        <tbody>
                            <tr>
                                <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="./public/img/web/equipo/cristina.jpg" alt="" width="350" height="350" /></td>
                                <td style="width: 49.9947%; border-style: hidden;">
                                    <h2>CRISTINA OYAMA</h2>
                                    <div style="text-align: justify;"><br />Soy comunicadora audiovisual multimedia del instituto Toulouse Lautrec, con experiencia en producci&oacute;n audiovisual (cortometrajes, miniseries y televisi&oacute;n) y marketing digital. Creo firmemente que mediante el arte y la buena comunicaci&oacute;n, podemos lograr un cambio en el mundo. Fan de las pel&iacute;culas de ciencia ficci&oacute;n y terror, las animaciones de Studio Ghibli, Steven King, los animales, el punk y BTS</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1 style="text-align: center; color: var(--color1);">&nbsp;</h1>
                    <div>
                        <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                            <tbody>
                                <tr>
                                    <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="./public/img/web/equipo/natalie.jpg" alt="" width="350" height="350" /></td>
                                    <td style="width: 49.9947%;; border-style: hidden;">
                                        <h2>Natalie Vargas</h2>
                                        <div style="text-align: justify;"><br />Soy comunicadora audiovisual de la Pontificia Universidad Cat&oacute;lica del Per&uacute;, especializada en marketing digital y con conocimientos en dise&ntilde;o y edici&oacute;n. He trabajado en diversas ONG enfocadas en la ni&ntilde;ez y la educaci&oacute;n, impulsada por mi prop&oacute;sito de apoyar a quienes m&aacute;s lo necesitan. En mi tiempo libre disfruto nadar, viajar, leer, escuchar m&uacute;sica y compartir con mi familia.</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>
                            <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                                <tbody>
                                    <tr>
                                        <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="./public/img/web/equipo/yeza.png" alt="" width="350" height="350" /></td>
                                        <td style="width: 49.9947%; border-style: hidden;">
                                            <h2>Yeza Galeski</h2>
                                            <div style="text-align: justify;"><br />Mi nombre es Yeza Galeski, soy de Mato Grosso, un estado brasile&ntilde;o. Mi experiencia est&aacute; enfocada a las &aacute;reas de ventas. Trabaj&eacute; un tiempo en venta de productos y me mud&eacute; al &aacute;rea de competencia donde pas&eacute; y comenc&eacute; a trabajar en una instituci&oacute;n financiera (bancos). Ahora he cambiado de campo y actualmente estoy aprendiendo sobre marketing y publicidad en Gemba. Me gradu&eacute; en contabilidad en la instituci&oacute;n Uninter de Curitiba. Sobre m&iacute;, me gusta mucho leer y realizar actividades como senderismo. &iexcl;Me gusta aprender sobre nuevas culturas y viajar!</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './partials/footer.php'; ?>

</body>
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let owlTestimonios = $('#owl-testimonios');
    owlTestimonios.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');
        const duration = 2000; // Duración total de la animación en milisegundos
        const startTime = performance.now();

        function animateCounter(counter, startTime, duration) {
            const target = counter.getAttribute('data-target');
            const hasColon = target.includes(':');
            const targetParts = target.split(':');
            const initialParts = counter.innerText.replace('+', '').split(':');

            function step(timestamp) {
                const progress = Math.min((timestamp - startTime) / duration, 1);
                let updatedParts = targetParts.map((part, index) => {
                    const startValue = +initialParts[index];
                    const endValue = +part;
                    return Math.floor(progress * (endValue - startValue) + startValue);
                });
                counter.innerText = hasColon ? updatedParts.join(':') : `+${updatedParts.join(':')}`;
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    counter.innerText = hasColon ? target : `+${target}`;
                }
            }

            window.requestAnimationFrame(step);
        }

        counters.forEach(counter => {
            animateCounter(counter, startTime, duration);
        });
    });
</script>


<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>

</html>
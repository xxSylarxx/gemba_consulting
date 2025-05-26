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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>


    <style>
        .card-body {
            padding: 2rem 2rem !important;
        }

        .btn-about {
            font-family: 'Montserrat', sans-serif;
            color: var(--color4);
            font-size: 1rem;
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

        #contenido {
            padding-top: 5rem;
            padding-bottom: 3.5rem;
        }

        #contenido .card {
            border: none;
            background-color: var(--color11);
        }

        #cuerpo img {
            width: 100%;
            object-fit: cover;
            height: 550px;
            object-position: center 55%;
        }

        #cuerpo-consultor img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            object-position: top;
        }

        #cuerpo-consultor i {
            font-size: 2rem;
            color: var(--color1)
        }

        #cuerpo-consultor .sub {
            background: var(--color4);
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #lema {
            background: url('./public/img/galeria/capacitacion2.jpg');
            /* background-attachment: fixed; */
            background-size: 100%;
            background-position: center 15%;
            padding-top: 10rem;
            padding-bottom: 10rem;
            color: white;
            background-repeat: no-repeat;
            position: relative;
        }

        #lema::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Black filter with 50% opacity */
            z-index: 1;
        }

        #lema>* {
            position: relative;
            z-index: 2;
        }

        #sidebar h5 {
            text-align: center;
        }

        #sidebar h6 {
            text-align: center;

            font-weight: 800;
        }

        /*  Estilos del boton  */

        .btn-outline {
            border: 2px solid #080b1a;
            border-radius: 100px;
            color: #151515;
            display: inline-block;
            font-size: 18px;
            font-weight: 600;
            line-height: 1;
            padding: 18px 55px
        }

        .btn-outline:hover {
            background-color: #080b1a;
            color: #FFFFFF
        }

        .sticky-col {
            position: sticky;
            top: 120px;
            align-self: flex-start;
        }
        @media screen and (max-width: 768px) {
           #lema{
                padding-top: 5rem;
                padding-bottom: 5rem;
           }
        }
    </style>


    <?php include_once './partials/header.php'; ?>


    <section class="container-fluid" id="lema">

        <div class="row justify-content-center">

            <div class="col-lg-9 text-center">

                <h1 class="mb-4" style="letter-spacing: 1px;">
                    <p style="text-align: center;" class="pt-3">
                        Capacitaciones </p>
                </h1>
                <!-- <a href="contactos.php">
    <button class="btn btn-info" style="font-size: 17px; padding: 13px 21px; text-shadow: 0 0 1px black; letter-spacing: 0.5px;text-decoration:none;">ESCRÍBENOS

        &nbsp;<i class="fas fa-arrow-alt-circle-right"></i></button>
</a> -->
            </div>
        </div>
    </section>
    <!--   <section id="cuerpo">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 p-0">
                    <//?php include_once './portada-servicios/portada-servicios' . $_GET['id'] . '.php' ?>
                </div>
            </div>
        </div>
    </section> -->
    <section id="contenido">
        <div class="container-fluid d-flex justify-content-center" style="padding-left: 7%;padding-right: 7%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div><img src="./public/img/galeria/p-gestion-diaria.jpg" width="100%" /></div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <h2 style="text-align: center;">CAPACITACI&Oacute;N</h2>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div style="text-align: justify;">&nbsp;</div>
                    <div style="text-align: justify;">En un entorno empresarial donde la eficiencia, la calidad y la innovaci&oacute;n son esenciales para mantener la competitividad, la implementaci&oacute;n de Lean Six Sigma se ha convertido en una estrategia clave para alcanzar la excelencia operativa. Nuestro programa de capacitaci&oacute;n in-house est&aacute; dise&ntilde;ado para ayudar a las organizaciones a adoptar esta metodolog&iacute;a de manera pr&aacute;ctica y efectiva, transformando equipos y procesos desde el n&uacute;cleo mismo de la operaci&oacute;n.</div>
                    <br>
                    <div style="text-align: justify;">
                        <h5 style="text-align: center;"><strong>&iquest;Qu&eacute; ofrecemos?</strong></h5>
                        <br>
                        <div><strong>1.- Capacitaci&oacute;n Personalizada y Relevante</strong></div>
                        <ul>
                            <li>&nbsp; Dise&ntilde;amos programas adaptados a las necesidades espec&iacute;ficas de cada organizaci&oacute;n, alineando la capacitaci&oacute;n con los objetivos estrat&eacute;gicos de la empresa y los desaf&iacute;os &uacute;nicos de su industria.</li>
                        </ul>
                        <div><strong>2.-Metodolog&iacute;as Probadas</strong></div>
                        <ul>
                            <li>Ense&ntilde;amos herramientas y t&eacute;cnicas de Lean Six Sigma que han demostrado su eficacia en la resoluci&oacute;n de problemas complejos, la optimizaci&oacute;n de procesos y la mejora continua en empresas l&iacute;deres a nivel global.</li>
                        </ul>
                        <div><strong>3.-Formaci&oacute;n Pr&aacute;ctica y Aplicada</strong></div>
                        <ul>
                            <li>La capacitaci&oacute;n combina conceptos te&oacute;ricos con ejercicios pr&aacute;cticos, estudios de caso y proyectos reales, asegurando que los participantes puedan aplicar de inmediato los conocimientos adquiridos en sus operaciones diarias.</li>
                        </ul>
                        <div><strong>4.-Certificaciones Reconocidas</strong></div>
                        <ul>
                            <li>Ofrecemos preparaci&oacute;n y certificaci&oacute;n para niveles Yellow Belt, Green Belt y Black Belt, siguiendo est&aacute;ndares internacionales como los establecidos por la ASQ (American Society for Quality).</li>
                            <br>
                        </ul>
                        <h5 style="text-align: center;"><strong>Beneficios de la Capacitaci&oacute;n In-House</strong></h5>
                        <br>
                        <div style="text-align: left;"><strong>1.-Conexi&oacute;n Directa con los Retos de la Empresa</strong></div>
                        <ul>
                            <li style="text-align: left;">Los ejemplos y ejercicios est&aacute;n directamente relacionados con los procesos de la organizaci&oacute;n, maximizando la relevancia y el impacto de la formaci&oacute;n.</li>
                        </ul>
                        <div><strong>2.-Mayor Participaci&oacute;n y Colaboraci&oacute;n del Equipo</strong></div>
                        <ul>
                            <li>La formaci&oacute;n in-house fomenta un ambiente de aprendizaje compartido, donde los equipos trabajan juntos para identificar oportunidades de mejora y proponer soluciones pr&aacute;cticas.</li>
                        </ul>
                        <div><strong>4.-Reducci&oacute;n de Costos y Mayor Flexibilidad</strong></div>
                        <ul>
                            <li>Capacitar a m&uacute;ltiples empleados simult&aacute;neamente en las instalaciones de la empresa reduce costos log&iacute;sticos y permite programar las sesiones en horarios que no afecten la operaci&oacute;n.</li>
                        </ul>
                        <div><strong>5.-Resultados Inmediatos</strong></div>
                        <ul>
                            <li>Al trabajar sobre proyectos reales durante la capacitaci&oacute;n, la empresa comienza a ver beneficios tangibles desde las primeras etapas del programa.</li>
                        </ul>
                        <br>
                        <h5 style="text-align: center;"><strong>&iquest;C&oacute;mo Funciona Nuestra Capacitaci&oacute;n In-House?</strong></h5>
                        <br>
                        <div><br /><strong>1.-Diagn&oacute;stico Inicial</strong></div>
                        <ul>
                            <li>&nbsp;Realizamos un an&aacute;lisis previo para entender los procesos, desaf&iacute;os y oportunidades espec&iacute;ficos de la organizaci&oacute;n.</li>
                        </ul>
                        <div><strong>2.-Dise&ntilde;o del Programa</strong></div>
                        <ul>
                            <li>Elaboramos un plan de capacitaci&oacute;n a medida, combinando los niveles de certificaci&oacute;n necesarios con proyectos estrat&eacute;gicos de la empresa.</li>
                        </ul>
                        <div><strong>3.-Ejecuci&oacute;n del Programa</strong></div>
                        <ul>
                            <li>Implementamos sesiones din&aacute;micas que incluyen formaci&oacute;n te&oacute;rica, ejercicios pr&aacute;cticos y acompa&ntilde;amiento en proyectos.</li>
                        </ul>
                        <div><strong>4.-Seguimiento y Sostenibilidad</strong></div>
                        <ul>
                            <li>Ofrecemos soporte posterior a la capacitaci&oacute;n para asegurar la implementaci&oacute;n efectiva de los proyectos y la sostenibilidad de las mejoras logradas.</li>
                        </ul>
                        <div>&nbsp;</div>
                        <h5 style="text-align: center;"><strong>&iquest;Qu&eacute; Lograr&aacute; Su Empresa?</strong></h5>
                        <div><br />●&nbsp; &nbsp;<strong>Reducci&oacute;n de Costos:&nbsp; </strong>Identificaci&oacute;n y eliminaci&oacute;n de desperdicios en los procesos, mejorando la eficiencia operativa.</div>
                        <div>&nbsp;</div>
                        <div>●&nbsp;<strong> &nbsp;Incremento en la Calidad:</strong> Implementaci&oacute;n de controles y mejoras que garantizan resultados consistentes y alineados con las expectativas del cliente.</div>
                        <div>&nbsp;</div>
                        <div>●&nbsp; &nbsp;<strong>Mayor Competitividad: </strong>Equipos capacitados que pueden liderar proyectos de mejora continua y responder r&aacute;pidamente a los cambios del mercado.</div>
                        <div>&nbsp;</div>
                        <div>● <strong>Fortalecimiento del Talento Interno: </strong>Desarrollo de habilidades anal&iacute;ticas, de liderazgo y resoluci&oacute;n de problemas en todos los niveles de la organizaci&oacute;n.</div>
                        <h5 style="text-align: center;">&nbsp;<br /><strong>&iquest;Por Qu&eacute; Elegirnos?</strong></h5>
                        <div><br />●&nbsp; <strong>Experiencia Comprobada: </strong>Nuestro equipo de instructores cuenta con certificaciones internacionales y experiencia pr&aacute;ctica en la implementaci&oacute;n de Lean Six Sigma en diversos sectores.</div>
                        <div>● <strong>Enfoque Personalizado:</strong> No creemos en soluciones gen&eacute;ricas; cada programa est&aacute; dise&ntilde;ado para responder a las necesidades espec&iacute;ficas de su empresa.</div>
                        <div>●&nbsp; <strong>Compromiso con el &Eacute;xito:</strong> Nuestro objetivo es transformar su organizaci&oacute;n desde dentro, empoderando a sus equipos para alcanzar niveles superiores de desempe&ntilde;o.</div>
                        <div>&nbsp;</div>
                        <h5 style="text-align: center;"><strong>Comience Hoy la Transformaci&oacute;n</strong></h5>
                        <div style="text-align: justify;"><br />La excelencia operativa no es un destino, es un viaje continuo. Perm&iacute;tanos acompa&ntilde;arlo en este proceso y capacitar a sus equipos para enfrentar los desaf&iacute;os de hoy y liderar el camino hacia un futuro m&aacute;s eficiente, rentable y competitivo.</div>
                        <div style="text-align: justify;">&nbsp;</div>
                        <h5 style="text-align: center;"><strong>&iexcl;Cont&aacute;ctenos ahora para dise&ntilde;ar un programa de capacitaci&oacute;n Lean Six Sigma in-house que se ajuste a las necesidades de su organizaci&oacute;n!</strong></h5>
                    </div>
                    <br>
                    <!-- <div class="row d-flex justify-content-center pt-5">
                        <div class="col-lg-4 d-flex justify-content-center">
                            <button class="btn-outline" onclick="window.location.href='./capacitacion.php'">Regresar</button>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-4 my-2 sticky-col">
                    <div class="card mx-5" id="sidebar">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">CASOS DE ÉXITO</h5>
                            <br>
                            <div class="mb-4">
                                <img src="./public/img/galeria/caso1.jpg" alt="Success Case 1" class="img-fluid">
                                <h6 class="mt-2">CASO DE ÉXITO 1</h6>
                            </div>
                            <div class="mb-4">
                                <img src="./public/img/galeria/caso2.jpg" alt="Success Case 1" class="img-fluid">
                                <h6 class="mt-2">CASO DE ÉXITO 2</h6>
                            </div>
                            <div class="mb-4 text-center">
                                <a href="#" class="btn-about">Más Casos de Éxitos&nbsp;<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once './contacto-seccion.php'; ?>
    <?php include_once './partials/footer.php'; ?>

</body>
<script>
    AOS.init();
</script>


</html>
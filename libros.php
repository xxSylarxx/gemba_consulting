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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./public/css/desplazamiento.css">

    <!--Fin del estilo direccion 3D-->
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
        #cuerpo {
            background-image: url('./public/img/web/p-libros.jpg');
            /*  background-attachment: fixed; */
            background-size: 100%;
            padding-bottom: 10rem;
            padding-top: 10rem;
            background-position: center 30%;
            position: relative;
        }

        #cuerpo::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Brillo oscuro */
            z-index: 1;
        }

        #cuerpo h1 {
            position: relative;
            z-index: 2;
            font-size: 2.8rem;
            text-align: center;
            color: var(--color9);
        }


        /* #cuerpo img {
            width: 100%;
            object-fit: cover;
            height: 380px;
            object-position: center 60%;
        } */

        #titulointerno {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios-interno {
            padding-top: 0rem;
            padding-bottom: 5rem;
        }

        #servicios-interno .sub {
            background: var(--color4);
            color: var(--color5);
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #servicios-interno .sub:hover {
            color: var(--color5);
            transform: scale(1.06);
        }

        #servicios-interno p {
            margin-top: 1rem;
            /* font-size: 16px; */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
        }
        #servicios-interno h2{
            font-size: 1.7rem;
        }

        #div-servicios {
            padding: 2rem;
            background-color: var(--color9);
            transition: ease-in-out .8s;
        }

        #div-servicios img {
            object-fit: cover;
            height: auto;
            width: 100%;
        }

        #div-servicios:hover {
            transform: scale(1.1);
        }

        h4 {
            text-align: center;
        }

        .filtro-blog {
            border-bottom: 1px solid #dee2e6
        }

        #servicios-interno .active {
            font-weight: bold;
            /* Ejemplo: poner en negrita el botón activo */
            border-bottom: 2px solid var(--color4);
            /* Ejemplo: poner una línea roja abajo del botón activo */
        }

        .blog-items a {
            color: var(--color10);
        }

        .btn-about {
            font-family: 'Montserrat', sans-serif;
            color: var(--color4);
            font-size: 1.1rem;
            font-weight: 450;
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

        #servicios-interno table img {
            max-width: 100%;
            height: auto;
        }
         /* estilos responsivos para table */
         @media (max-width: 768px) {
            #servicios-interno table {
                width: 100%;
                /* Asegura que la tabla ocupe todo el ancho disponible */
            }

            #servicios-interno td {
                display: block;
                width: 100% !important;
                text-align: center;
                padding: 10px;
            }

            #servicios-interno h2,
            #servicios-interno p {
                text-align: center;
            }
        }
    </style>

    <?php include_once './partials/header.php'; ?>
    <!--  <section id="cuerpo">
        <div class="container-fluid m-0 p-0">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <img src="./public/img/web/gestion_activos.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <section id="cuerpo">
        <div class="container-fluid m-0 p-0">
            <div class="row d-flex justify-content-center m-0 p-0">
                <div class="col-lg">
                    <h1>LIBROS</h1>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <section id="servicios-interno">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                            <tbody>
                                <tr>
                                    <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="public/img/galeria/libro1.jpg" alt="" width="282" height="450" /></td>
                                    <td style="width: 49.9947%; border-style: hidden;">
                                        <h2>CREATING A KAIZEN CULTURE</h2>
                                        <div style="text-align: justify;"><br />Transformar una cultura tiene mucho m&aacute;s que ver con el crecimiento emocional que con la madurez t&eacute;cnica. Creando una cultura Kaizen, coescrito por l&iacute;deres del Instituto Kaizen, explica c&oacute;mo permitir una organizaci&oacute;n adaptable, excelente y sostenible aprovechando los valores kaizen fundamentales y los comportamientos que generan.</div>
                                        <div style="text-align: justify;">&nbsp;</div>
                                        <div style="text-align: justify;"><a title="Ver M&aacute;s &gt;&gt;" href="https://www.amazon.com/dp/0071826858?ref=cm_sw_r_ffobk_cp_ud_dp_R7YCF9NSN55DZ30DWMXK&amp;ref_=cm_sw_r_ffobk_cp_ud_dp_R7YCF9NSN55DZ30DWMXK&amp;social_share=cm_sw_r_ffobk_cp_ud_dp_R7YCF9NSN55DZ30DWMXK&amp;peakEvent=5&amp;dealEvent=0&amp;skipTwisterOG=1&amp;bestFormat=true" target="_blank" rel="noopener"><img src="./public/img/icons/btn-vermas.png" width="30%" alt=""></a></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h1 style="text-align: center; color: var(--color1);">&nbsp;</h1>
                        <div>
                            <table style="border-collapse: collapse; width: 100.032%; border-style: hidden;" border="1">
                                <tbody>
                                    <tr>
                                        <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="public/img/galeria/libro2.jpg" alt="" width="282" height="450" /></td>
                                        <td style="width: 49.9947%; ; border-style: hidden;">
                                            <h2>THE LEAN SIX SIGMA DEPLOYMENT</h2>
                                            <div style="text-align: justify;"><br />Esta segunda edici&oacute;n, versi&oacute;n 5, publicada en 2020, explica m&aacute;s de 30 herramientas clave de LSS categorizadas por principio lean en el formato probado GOAL/QPC de &iquest;Qu&eacute; es? &iquest;Por qu&eacute; usarlo? &iquest;C&oacute;mo lo hago? con ejemplos trabajados a lo largo del libro.&nbsp;</div>
                                            <div style="text-align: justify;">&nbsp;</div>
                                            <div style="text-align: justify;"><a title="Ver M&aacute;s &gt;&gt;" href="https://www.amazon.com/dp/1576811506?ref=cm_sw_r_ffobk_cp_ud_dp_RTP645T5FZYXR2QBDFK8&amp;ref_=cm_sw_r_ffobk_cp_ud_dp_RTP645T5FZYXR2QBDFK8&amp;social_share=cm_sw_r_ffobk_cp_ud_dp_RTP645T5FZYXR2QBDFK8&amp;peakEvent=5&amp;dealEvent=0&amp;skipTwisterOG=1&amp;bestFormat=true" target="_blank" rel="noopener"><img src="./public/img/icons/btn-vermas.png" width="30%" alt=""></a></div>
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
                                            <td style="width: 49.9947%;"><img style="display: block; margin-left: auto; margin-right: auto;" src="public/img/galeria/libro3.webp" alt="" width="282" height="450" /></td>
                                            <td style="width: 49.9947%; border-style: hidden;">
                                                <h2>LA IMPLEMENTACI&Oacute;N DE LEAN SIX SIGMA</h2>
                                                <div style="text-align: justify;">&nbsp;</div>
                                                <div style="text-align: justify;">Aprenda a implementar Lean Seis Sigma (LSS) a n&iacute;vel principiante atrav&eacute;s de uma abordagem ilustrativa simples de aprendizagem visual. Alinhado ao conjunto de conhecimento para certifica&ccedil;&atilde;o em Lean da ASQ, SME, AME e Shingo Prize. Uma refer&ecirc;ncia n&atilde;o estat&iacute;stica para green &amp; black belts.</div>
                                                <div style="text-align: justify;">&nbsp;</div>
                                                <div style="text-align: justify;"><a title="Ver M&aacute;s &gt;&gt;" href="https://www.amazon.com/dp/1576811700?ref=cm_sw_r_ffobk_cp_ud_dp_72TZMNRPGYFCQ249GDFG&amp;ref_=cm_sw_r_ffobk_cp_ud_dp_72TZMNRPGYFCQ249GDFG&amp;social_share=cm_sw_r_ffobk_cp_ud_dp_72TZMNRPGYFCQ249GDFG&amp;peakEvent=5&amp;dealEvent=0&amp;skipTwisterOG=1&amp;bestFormat=true" target="_blank" rel="noopener"><img src="./public/img/icons/btn-vermas.png" width="30%" alt=""></a></div>
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

            <!--     <div class="blog-items row d-flex justify-content-center">
                <div class="col-lg-4 pt-5 px-3">
                    <a href="https://a.co/d/alT8rZJ" target="_blank">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/libro1.jpg" class="img-fluid" alt="">



                            <div class="text-center pt-4">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3">
                    <a href="https://a.co/d/ck8oKJI" target="_blank">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/libro2.jpg" class="img-fluid" alt="">


                            <div class="text-center pt-4">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3">
                    <a href="https://a.co/d/d2hwl60" target="_blank">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/libro3.webp" class="img-fluid" alt="">



                            <div class="text-center pt-4">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </section>

    <!--   <//?php include_once './contacto-seccion.php'; ?> -->

    <?php include_once './partials/footer.php'; ?>

</body>
<script>
    AOS.init();
</script>



</html>
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
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Peralta Business Company</title>
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
            background-image: url('./public/img/web/p-contabilidad.jpg');
            background-attachment: fixed;
            background-size: 100%;
            padding-bottom: 7rem;
            padding-top: 7rem;
           
        }

        #cuerpo h1 {
            font-size: 2.8rem;
            text-align: center;
            color: var(--color5);
        }

        /*   #cuerpo {
            padding-bottom: 5rem;
        }

        #cuerpo img {
            width: 100%;
            object-fit: cover;
            height: 380px;
            object-position: center 50%;
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

        #div-servicios {
            padding: 2rem;
            background-color: var(--color7);
            transition: ease-in-out .8s;
        }

        #div-servicios:hover {
            transform: scale(1.1);
        }
        @media screen and (max-width:600px) {
            #cuerpo{
                background-size: 250%;
                padding-bottom: 6rem;
            }
            
        }

    </style>

    <?php include_once './partials/header.php'; ?>
    <!--   <section id="cuerpo">
        <div class="container-fluid m-0 p-0">
            <div class="row d-flex justify-content-center p-0 m-0">
                <div class="col-lg p-0 m-0">
                    <img src="./public/img/web/contab-finanzas.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <section id="cuerpo">
        <div class="container-fluid m-0 p-0">
            <div class="row d-flex justify-content-center m-0 p-0">
                <div class="col-lg">
                    <h1>Outsourcing Contable</h1>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <section id="servicios-interno">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 pt-5 px-3" data-aos="fade-up">
                    <div id="div-servicios">
                        <img src="./public/img/web/gestion-contable.jpg" class="img-fluid" alt="">
                        <p class="pt-3">En PBCo, ofrecemos un servicio integral de outsourcing contable que permite a las empresas externalizar sus funciones contables y financieras con la confianza de que sus procesos serán gestionados de manera eficiente y conforme a las normativas vigentes. </p>
                        <div class="row">
                            <div class="col text-center">
                                <div class="mt-3">
                                    <a href="view.php?id=18" class="btn sub">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-aos="fade-up">
                    <div id="div-servicios">
                        <img src="./public/img/web/asesoria-contable.jpg" class="img-fluid" alt="">
                        <p class="pt-3">En PBCo, ofrecemos un servicio integral de asesoría financiera e implementación de estructuras de costos para ayudar a las empresas a gestionar sus finanzas </p>
                        <div class="row">
                            <div class="col text-center">
                                <div class="mt-3">
                                    <a href="view.php?id=19" class="btn sub">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-aos="fade-up">
                    <div id="div-servicios">
                        <img src="./public/img/web/auditoria-contable.jpg" class="img-fluid" alt="">
                        <p class="pt-3">En PBCo, brindamos un servicio integral de auditoría financiera que garantiza la precisión, integridad y conformidad de los estados financieros</p>
                        <div class="row">
                            <div class="col text-center">
                                <div class="mt-3">
                                    <a href="view.php?id=20" class="btn sub">Ver Más</a>
                                </div>
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
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
    <link rel="stylesheet" href="./portadas-consultoria/pconsultoria<?php echo $_GET['id']; ?>.css">
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
            padding-bottom: 5rem;
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
            /* 
            background-attachment: fixed; */
            background-size: 100%;
            padding-top: 10rem;
            padding-bottom: 25rem;
            color: white;
            background-repeat: no-repeat;
            position: relative;
        }

        /* #lema::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        #lema>* {
            position: relative;
            z-index: 2;
        } */

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
            #lema {
                padding-top: 5rem;
                padding-bottom: 3rem;
            }

            #contenido {

                padding-top: 0rem;
            }
        }
    </style>


    <?php include_once './partials/header.php'; ?>


    <section class="container-fluid" id="lema">

    </section>
    <section id="contenido">
        <div class="container-fluid d-flex justify-content-center" style="padding-left: 7%;padding-right: 7%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 pt-4">
                    <?php include_once './consultorias/consultoria' . $_GET['id'] . '.php';
                    ?>
                    <br>
                    <div class="row d-flex justify-content-center pt-5">
                        <div class="col-lg-4 d-flex justify-content-center">
                            <button class="btn-outline" onclick="window.location.href='./consultoria.php'">Regresar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 sticky-col pt-4">
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
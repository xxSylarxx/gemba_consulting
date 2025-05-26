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
            background-image: url('./public/img/galeria/p-servicios1.jpg');
            /* background-attachment: fixed; */
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

        /* #cuerpo {
            background-image: url('./public/img/web/p-prevencion.jpg');
            background-attachment: fixed;
            background-size: 100%;
            padding-bottom: 7rem;
            padding-top: 7rem;
            background-position: center 50%;

        }

        #cuerpo h1 {
            font-size: 2.8rem;
            text-align: center;
            color: var(--color5);
        }
 */

        #titulointerno {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios-interno {
            padding-top: 0rem;
            padding-bottom: 5rem;
        }

        #servicios-interno a {
            color: var(--color10);
        }

        /* Estilo inicial del contenedor relativo */
        .contenedor-servicios1 {
            position: relative;
            overflow: hidden;
            /* Para evitar que el contenido animado salga del contenedor */
        }

        .contenedor-servicios1 p {
            text-align: center;
        }

        /* Estilo inicial del back-servicios1 */
        .back-servicios1 {
            position: absolute;
            top: 0;
            left: -100%;
            /* Inicialmente fuera del contenedor */
            width: 100%;
            height: 100%;
            background: rgba(28, 83, 147, .9);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: left 0.5s ease-in-out;
            padding: 3rem;
            /* Animación suave */
        }

        /* Estilo al hacer hover sobre contenedor-servicios1 */
        .contenedor-servicios1:hover .back-servicios1 {
            left: 0;
            /* Mueve el div a su posición original */
        }

        .img-contenedor-servicios1 img {
            object-fit: cover;
            height: 350px;
        }


        #div-servicios {
            padding: 2rem;
            background-color: var(--color7);
            transition: ease-in-out .8s;
        }

        #div-servicios:hover {
            transform: scale(1.1);
        }

        .titulo-servicios1 {
            background-color: var(--color9);
        }

        @media screen and (max-width:600px) {

            #cuerpo {
                background-size: 300%;
                padding-bottom: 6rem;

            }
        }
    </style>

    <?php include_once './partials/header.php'; ?>

    <section id="cuerpo">
        <div class="container-fluid m-0 p-0">
            <div class="row d-flex justify-content-center m-0 p-0">
                <div class="col-lg">
                    <h1>Servicios</h1>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <section id="servicios-interno">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 pt-5">
                    <a href="./view6.php?id=1">
                        <div class="contenedor-servicios1 mx-3" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/galeria/servicios1.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Servicios</h4>
                            </div>
                            <div class="back-servicios1 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Servicios</h4>
                                    <p>La industria de servicios en el Perú abarca sectores clave como el comercio, turismo, telecomunicaciones, banca y educación, entre otros.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './partials/footer.php'; ?>

</body>
<script>
    AOS.init();
</script>


</html>
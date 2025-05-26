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
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./public/css/desplazamiento.css">

    <!--Fin del estilo direccion 3D-->
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Peralta Business Company</title>
</head>

<body>

    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <style>
        /* #cuerpo h2 {
            text-align: center;
            font-size: 4rem;
        } */
        #contenido {
            font-size: 1.3rem;
        }

        #cuerpo {
            padding-bottom: 5rem;
        }

        #cuerpo img {
            width: 100%;
            object-fit: cover;
            height: 550px;
            object-position: center 55%;
        }

        #titulointerno {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #servicios-interno {
            padding-top: 0rem;
            padding-bottom: 5rem;
        }

        #boton-reverse .sub2 {
            background: var(--color2);
            color: var(--color5);
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #boton-reverse .sub2:hover {
            transform: scale(1.06);
        }


        #div-servicios {
            padding: 2rem;
            background-color: var(--color7);
        }

        @media screen and (max-width:600px) {
            #cuerpo img {

                height: auto;

            }

        }
    </style>

    <?php include_once './partials/header.php'; ?>

    <section id="cuerpo">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 p-0">
                    <?php include_once './portada-servicios/portada-servicios' . $_GET['id'] . '.php' ?>
                </div>
            </div>
        </div>
    </section>
    <section id="contenido">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php include_once './servicios/servicio' . $_GET['id'] . '.php' ?>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div id="boton-reverse" class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="mt-3">
                        <a href="javascript:void(0);" class="btn sub2" onclick="history.back();">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include_once './contacto-seccion.php'; ?>
    <?php include_once './partials/footer.php'; ?>

</body>
<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>

</html>
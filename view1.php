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

        .btn-outline {
            border: 2px solid #080b1a;
            border-radius: 100px;
            color: #151515;
            display: inline-block;
            font-size: 18px;
            font-weight: 600;
            line-height: 1;
            padding: 18px 55px;
        }
        .btn-outline:hover {
            background-color: #080b1a;
            color: #FFFFFF
        }
    </style>


    <?php include_once './partials/header.php'; ?>
    <div class="container py-5" id="cuerpo-consultor">
        <br>
        <?php include_once 'equipos/equipo' . $_GET['id'] . '.php' ?>
        <br>
        <br>
        <br>
        <div class="row d-flex jusitfy-content-center">
            <div class="col text-center">
                <div class="col-lg-12 d-flex justify-content-center">
                    <center><button class="btn-outline" onclick="window.location.href='./somos.php#consultores2'">Regresar</button></center>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './partials/footer.php'; ?>

</body>
<script>
    AOS.init();
</script>


</html>
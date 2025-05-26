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
	
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <!-- Replace the variables below. -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>


    <style>
        #inicio video {
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }

        /* seccion slider */
        .img-carousel img {
            height: calc(80vh - 0px);
            object-fit: cover;
            object-position: center;
        }

        .div-banner {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        }

        .div-banner span {
            font-size: 4rem;
            font-weight: bold;
            color: var(--color5);
            display: flex;
            justify-content: center;
        }

        /* seccion bienvenidos */
        #bienvenidos {
            padding-top: 5rem;
            background-color: white;
            /* left: 50%;
            transform: translate(-50%, -50%); */
        }

        #bienvenidos h1 {
            color: var(--color4);
            text-align: start;
            font-weight: bold;

        }

        #bienvenidos p {
            text-align: justify;
            font-size: 1.1rem;
            font-family: "Montserrat", sans-serif;
        }

        /* seccion de resultados */
        #resultados {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 100%, #ffff 10%, #ffff 50%), url('./public/img/web/bg-contador.jpg') !important;
            background-attachment: fixed;
            background-size: cover;
            background-size: 100% !important;
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #resultados h2 {
            color: var(--color9);
            text-align: center;
            font-weight: bold;
            padding-bottom: 6rem;
        }

        #resultados p {
            margin: 1.5rem;
            font-size: .95rem !important;
            color: white;
            text-align: start;
            text-transform: lowercase;
            margin: 2rem;
        }

        #resultados .counter {

            color: white;
            font-weight: bold;
            font-size: 3.9rem;
            padding: 0;
            margin: 0;
            line-height: 1;
            height: 40px;
            text-align: center;
            text-align: center;
            align-items: center;

        }



        /* seccion servicios */

        #servicios {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 65%, #ffff 10%, #ffff 50%), url('./public/img/web/service-bg.webp') !important;
            background-size: 160% !important;
            background-repeat: no-repeat;

        }

        #servicios a {
            color: var(--color10);
        }

        #servicios h2 {
            padding-top: 5rem;
            text-align: center;
        }

        #servicios h2 {
            font-weight: 500;
            color: var(--color9);
        }

        #servicios h5 {

            text-align: center;
            color: var(--color9);
        }

        #servicios p {
            text-align: center;
            color: var(--color9);
        }

        #industrias {
            padding-bottom: 6rem;
            background: linear-gradient(to bottom, rgba(28, 83, 147, .9) 65%, #ffff 10%, #ffff 50%), url('https://template.hasthemes.com/businex/businex/assets/img/service/service-bg.jpg') !important;
            background-size: 160% !important;
            background-repeat: no-repeat;
            /* background: url(https://template.hasthemes.com/businex/businex/assets/img/service/service-bg.jpg);
            background-size: 100%;
            background-repeat: no-repeat; */
            /*  height: 500px; */
        }

        #industrias a {
            color: var(--color10);
        }

        #industrias h2 {
            padding-top: 5rem;
            text-align: center;
        }

        #industrias h2 {
            font-weight: 500;
            color: var(--color9);
        }

        #industrias h5 {

            text-align: center;
            color: var(--color9);
        }

        #industrias p {
            text-align: center;
            color: var(--color9);
        }

        /* Estilo inicial del contenedor relativo */
        .contenedor-servicios1 {
            position: relative;
            overflow: hidden;
            background-color: white;
            /* Para evitar que el contenido animado salga del contenedor */
        }

        .contenedor-servicios1 p {
            text-align: center;
        }

        /* Estilo inicial del back-servicios1 */
        .back-servicios2 {
            position: absolute;
            top: 0;
            left: -100%;
            /* Inicialmente fuera del contenedor */
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: left 0.5s ease-in-out;
            padding: 3rem;
            /* Animación suave */
        }

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

        .contenedor-servicios1:hover .back-servicios2 {
            left: 0;
            /* Mueve el div a su posición original */
        }

        .img-contenedor-servicios1 img {
            object-fit: cover;
            height: 450px;
        }



        /* seccion propuesta */
        #propuesta h2 {
            color: var(--color3);
            text-align: center;
        }

        #propuesta p {
            text-align: center;
            font-size: 1.2rem;
        }

        #propuesta img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        #propuesta .text-nivel {
            background-color: white;
            position: absolute;
            bottom: 0;
            left: 2%;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-top: 1.1rem;
            padding-bottom: .7rem;

        }

        #propuesta .text-nivel a {
            color: black;
        }

        #propuesta .text-nivel i {
            color: var(--color6);
            transition: ease-in-out .4s;
        }

        #propuesta .text-nivel:hover i {
            transform: translateX(10px);
        }

        /* Seccion admision */
        #admision {

            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        #admision h2 {
            text-align: center;
            color: var(--color3);
        }

        #admision p {
            text-align: center;
            padding-top: 1rem;
        }

        #admision img {
            object-fit: cover;
            object-position: left;
        }

        /* Seccion de Reconocimientos */
        #reconocimiento {
            /* background-color: var(--color8); */
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #reconocimiento h2 {
            text-align: center;
            color: var(--color9);
            font-weight: 800;
        }

        #reconocimiento .reconocimientos .card {
            border: 0;
            box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 8%);
        }

        #reconocimiento .reconocimientos .card img {
            transition: all .3s ease-in-out;
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 250px;
        }

        #reconocimiento .reconocimientos .card .news {
            position: absolute;
            top: -16px;
            left: 15%;
            right: 15%;
            text-align: center;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            /* font-size: 14px; */
            font-size: 18px;
            font-weight: bold;
            transform: translateY(-5%);
        }

        #reconocimiento .reconocimientos .card .card-body .card-title {
            color: var(--color2);
            font-weight: bold;
            cursor: pointer;
        }

        #reconocimiento .reconocimientos.card .card-body .card-title:hover {
            color: var(--color1);
        }

        #reconocimiento .reconocimientos.card .card-body .card-text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }

        #reconocimiento .reconocimientos.card .card-footer {
            background: var(--color2);
            color: white;
        }

        #reconocimiento .reconocimientos.btn {
            background: var(--color1);
            color: white;
            padding: 10px 20px;
            /* transition: all .3s ease-in; */
            /* animation: shake 2s infinite; */
        }

        #reconocimiento .reconocimientos.btn:hover {
            animation: shake 2s infinite;
            background: var(--color2);
            /* transform: scale(1.08); */
            /* box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15); */
        }

        #reconocimiento .reconocimientos .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #reconocimiento .reconocimientos .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #reconocimiento .reconocimientos .owl-theme .owl-dots .owl-dot.active span,
        #reconocimiento .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color1);
        }

        #reconocimiento .reconocimientos .owl-nav button {
            background: var(--color4) !important;
            /* Color del fondo del botón */
            border: none !important;
            /* Quita el borde */
            color: white !important;
            /* Color del texto */
            /*  padding: 50px !important; */
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

        #reconocimiento .reconocimientos .owl-nav span {
            font-size: 1.8rem !important;
        }

        #reconocimiento .reconocimientos .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #reconocimiento .reconocimientos .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #reconocimiento .reconocimientos .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        /* seccion Asesoria */

        #asesoria {
            background-color: var(--color7);
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #asesoria h2 {
            text-align: center;
            color: var(--color3);
        }

        /*   #asesoria .asesorias .card {
            border: 0;
            box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 8%);
        }

        #asesoria .asesorias .card img {
            transition: all .3s ease-in-out;
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 250px;
        }

        #asesoria .asesorias .card .news {
            position: absolute;
            top: -16px;
            left: 15%;
            right: 15%;
            text-align: center;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px; 
            font-size: 18px;
            font-weight: bold;
            transform: translateY(-5%);
        }

        #asesoria .asesorias .card .card-body .card-title {
            color: var(--color2);
            font-weight: bold;
            cursor: pointer;
        }

        #asesoria .asesorias .card .card-body .card-title:hover {
            color: var(--color1);
        }
 */
        /*   #asesoria .asesorias .card .card-body .card-text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        } */

        /*      #asesoria .asesorias .card .card-footer {
            background: var(--color2);
            color: white;
        } */

        #asesoria .asesorias .btn {
            background: var(--color1);
            color: white;
            padding: 10px 20px;
            /* transition: all .3s ease-in; */
            /* animation: shake 2s infinite; */
        }

        #asesoria .asesorias .btn:hover {
            animation: shake 2s infinite;
            background: var(--color2);
            /* transform: scale(1.08); */
            /* box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15); */
        }

        #asesoria .asesorias .owl-theme .owl-dots .owl-dot span {
            width: 30px;
        }

        #asesoria .asesorias .owl-theme .owl-dots .owl-dot.active span {
            /* background-color: red; */
            width: 50px;
        }

        #asesoria .asesorias .owl-theme .owl-dots .owl-dot.active span,
        #asesoria .owl-theme .owl-dots .owl-dot:hover span {
            background-color: var(--color1);
        }

        #asesoria .asesorias .owl-nav button {
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

        #asesoria .asesorias .owl-nav span {
            font-size: 1.8rem;
        }

        #asesoria .asesorias .owl-nav .owl-prev {
            left: -25px !important;
            /* Ajusta la posición horizontal del botón izquierdo */
        }

        #asesoria .asesorias .owl-nav .owl-next {
            right: -25px !important;
            /* Ajusta la posición horizontal del botón derecho */
        }

        #asesoria .asesorias .owl-nav button:hover {
            background: #445d9c !important;
            /* Color de fondo del botón al pasar el mouse */
        }

        #asesoria h2,
        h3 {
            text-align: center;
        }

        #asesoria h2 {
            color: var(--color3);
            font-weight: 800;
        }

        #asesoria .contenedor-img {
            position: relative;
        }

        #asesoria #boton-marco {
            width: max-content;
            position: absolute;
            left: 50%;
            bottom: 15%;
            transform: translate(-50%, 50%);

        }


        #asesoria .boton {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.5rem;
            margin: 4px 2px;
            cursor: pointer;
            transition: transform .8s ease-in-out;
        }

        #asesoria .boton:hover {
            transform: scale(1.1);
            color: white;
            background-color: var(--color2);
        }

        /* Seccion Alianzas */

        #alianzas h2 {
            text-align: center;
            color: var(--color3);
            font-weight: bold;
        }

        #alianzas img {
            transition: transform .8s ease-in-out;
        }

        #alianzas img:hover {
            transform: scale(1.1);
        }

        /* Seccion Eventos */
        #eventos h2 {
            font-weight: bold;
            text-align: center;
            color: var(--color3);
        }

        #eventos .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color1);
            color: white;
            font-size: 14px;
            font-weight: bold;


            transform: translateY(-5%);

        }

        #eventos div.card {
            transition: .3s;


        }

        #eventos div.card:hover {
            transform: scale(1.06);
        }

        #eventos .card .detalle {

            text-overflow: ellipsis;

            display: -webkit-box;

            -webkit-line-clamp: 2;

            -webkit-box-orient: vertical;

            overflow: hidden;

            text-align: justify;

            font-size: 17px;

            color: #747474;

            line-height: 1.6;

        }

        #eventos img {
            object-fit: cover;
        }

        #redes {
            position: fixed;
            width: 45px;
            min-width: 45px;
            max-width: 45px;
            top: 50%;
            right: 0;
            transform: translateY(-75%);
            z-index: 99;
        }

        #redes a {
            font-size: 21px;
            color: white;
        }


        #valores .flip {
            height: 172px;
            padding: 0.6em;
        }

        #valores .card {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);
        }

        #valores .front,
        #valores .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {
            color: #fff;
            border: 2px solid #ececec;
        }

        #valores .back {
            color: white;
            transform: rotateY(180deg);
            border: 2px solid #ececec;
            padding: 0.5em;
        }

        #niveles img {

            width: 100%;
            height: 350px;
            object-fit: cover;
            object-position: center;

        }

        #niveles #col-niveles1 {

            padding: 2rem;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
            margin-top: -70px;
            background-color: rgba(247, 180, 75, 0.86);
            color: var(--color5);
            font-size: 1rem;
            text-align: center;
            font-weight: bold;
        }

        #niveles #col-niveles2 {

            padding: 2rem;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
            margin-top: -70px;
            background-color: rgba(112, 61, 18, .86);
            color: var(--color5);
            font-size: 1rem;
            text-align: center;
            font-weight: bold;
        }

        #niveles #col-niveles3 {

            padding: 2rem;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
            margin-top: -70px;
            background-color: rgba(164, 79, 48, .86);
            color: var(--color5);
            font-size: 1rem;
            text-align: center;
            font-weight: bold;
        }

        #niveles #col-niveles4 {

            padding: 2rem;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
            margin-top: -70px;
            background-color: rgba(247, 180, 75, 0.86);
            color: var(--color5);
            font-size: 1rem;
            text-align: center;
            font-weight: bold;
        }

        .button1 {
            background-color: transparent;
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button2 {
            background-color: transparent;
            border: 1px solid #ffff;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button3 {
            background-color: transparent;
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button4 {
            background-color: var(--color2);
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button5 {
            background-color: var(--color3);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button1:hover {
            transform: scale(1.06);
            background-color: var(--color1);
        }

        .button2:hover {
            background-color: var(--color3);
            transform: scale(1.06);
        }

        .button3:hover {
            background-color: var(--color3);
            transform: scale(1.06);
        }

        .button4:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        .button5:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        span.circulo {
            border-radius: 50%;
            display: inline-block;
            font-size: 15px;
            min-width: 40px;
            height: 40px;
            margin-right: 8px;
            padding: 9px;
            text-align: center;
            width: 40px;
            font-weight: bold;
            background-color: var(--color2);
        }


        .map-responsive iframe {
            left: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        #b-imagen {
            padding-left: 15rem;
            margin-top: 0rem !important;
        }

        .btn-about {
            font-family: 'Montserrat', sans-serif;
            color: var(--color1);
            font-size: 1.3rem;
            font-weight: 600;
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
        }

        .btn-about i {
            transition: ease-in-out .8s;
        }

        .btn-about:hover i {
            transform: translateX(15px);
        }

        #testimonios {
            padding-top: 6rem;
        }

        #testimonios .tituloh2 {

            text-align: center !important;
        }

        #testimonios .parrafo-testi {
            text-align: center !important;
        }

        #contacto {
            padding-bottom: 7rem;
        }

        #contacto h3 {
            text-align: center;
            color: white;
            padding-bottom: 2rem;
        }

        /*  Estilos de formulario */
        #input-formulario {
            display: block;
            width: 100%;
            padding: 1rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border-right: 1px solid #969696;
            border-bottom: 1px solid #969696;
            border-top: 1px solid #969696;
            border-left: 1px solid #969696;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        #input-formulario:focus {
            color: #212529;
            background-color: #fff;
            border-color: var(--color1);
            outline: 0;

            box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
        }

        #terminos {
            font-size: 1rem;
            color: #969696;
        }

        .select-form {

            display: block;
            width: 100%;
            padding: 1rem 2.25rem 1rem .75rem;
            -moz-padding-start: calc(.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;
            background-color: #fff;
            background-image: url('./public/img/icons/abajo-icon.png');
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border-right: 1px solid #969696;
            border-bottom: 1px solid #969696;
            border-top: 1px solid #969696;
            border-left: 1px solid #969696;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .select-form:focus {

            color: #212529;
            background-color: #fff;
            border-color: var(--color1);
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(36, 40, 127, 0);
        }

        .select-form option {
            color: black;
        }

        /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #terminos {
            font-size: 1rem;
            color: #969696;
            text-decoration: none;
        }

        /* Estilo Boton de contacto */
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

        #bienenidos2 {
            padding-top: 8rem;
            padding-bottom: 7rem;
        }

        @media screen and (max-width: 600px) {
            #reconocimiento .reconocimientos .owl-nav button {
                display: none;
            }

            #servicios {
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 100%, #ffff 10%, #ffff 50%), url('./public/img/web/service-bg.webp') !important;

            }

            #industrias {

                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 100%, #ffff 10%, #ffff 50%), url('./public/img/web/service-bg.webp') !important;


            }

            #contacto {
                padding-bottom: 0rem;
            }
        }

        @media screen and (max-width: 1200px) {
            div.content-banner video {
                width: 100%;
                height: 100%;
            }

            #inicio video {
                height: auto;
            }

        }

        @media only screen and (max-width:1400px) {

            #fijo {
                top: 4% !important;
            }

            #niveles #col-niveles3 h3 {
                font-size: 1.5rem;
            }

            #niveles #col-niveles1 p {
                font-size: .9rem;
            }

            #niveles #col-niveles2 p {
                font-size: .9rem;
            }

            #niveles #col-niveles3 p {
                font-size: .9rem;
            }

            #b-imagen {
                padding-left: 0rem;
                text-align: center;
                margin-top: 0rem !important;
            }

            #bienenidos2 {
                padding-top: 3rem;
                padding-bottom: 1rem;
            }

        }

        @media only screen and (min-width:990px) and (max-width: 1400px) {
            #resultados p {
                margin: 1rem;
                font-size: .6rem !important;
                text-align: center;
            }

            #resultados .counter {
                font-size: 2.8rem;
            }

            .img-contenedor-servicios1 img {
                object-fit: cover;
                height: 300px;
            }
        }

        @media only screen and (min-width:1401px) and (max-width: 1690px) {
            #resultados p {
                margin: 1rem;
                font-size: .6rem !important;
                text-align: center;
            }

            #resultados .counter {
                font-size: 2.6rem;
            }
        }

        div.content-banner video {
            width: 100%;
            height: auto;
        }
    </style>

    <?php include_once './partials/header.php'; ?>

    <!-- Slider -->
    <section id="inicio">
        <div class="container-fluid content-banner px-0">
            <video src="./public/video/video_inicio.mp4" controls="" muted="" width="100%" loop="" autoplay></video>
        </div>
    </section>

    <section id="bienenidos2">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg">
                    <h1 class="text-center" style="color:var(--color1);">No hacemos consultorías, transformamos personas.</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="lema1" class="py-5">
        <img src="./public/img/web/img-inicio.png" width="100%" alt="">
    </section>
    <section id="bienvenidos">
        <div class="container-fluid" style="padding-left: 12%;padding-right:12%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 my-auto">
                    <!-- <h2 style="color:var(--color4);">¡Empecemos tu camino a la excelencia!</h2>
                    <br> -->
                    <p>Desde hace 12 años, en Gemba Consulting Group estamos comprometidos en empoderar a nuestros clientes para ser su mejor versión.</p>
                    <p>A través de servicios integrales enfocados en la mejora continua y la excelencia operativa, trabajamos junto a las organizaciones para brindar soluciones personalizadas de manera práctica y colaborativa, combinando las herramientas de mejora continua, Kaizen y Lean.
                    </p>
                    <br>
                    <a href="./somos.php" class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></a>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-lg-6 d-flex justify-content-center  ">
                    <div class="">
                        <img src="./public/img/web/b-bienvenidos.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="servicios" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2>Nuestros Servicios</h2>
                    <br>
                    <p>Estamos enfocados en la creación de valor sostenible mediante la transformación de personas, creación de una cultura organizacional ágil e innovadora aplicando los principios de mejora continua.</p>
                    <p>Enseñamos el uso de metodologías probadas mediante el enfoque de aprender haciendo para alcanzar soluciones prácticas y sostenibles en el tiempo.</p>

                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid" style="padding-left: 4%;padding-right:4%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 pt-5">
                    <a href="./consultoria.php">
                        <div class="contenedor-servicios1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/equipo_en_oficina_7.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Consultoría</h4>
                            </div>
                            <div class="back-servicios1 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Consultoría</h4>
                                    <p>Te asesoramos para convertirte a ti y a tu equipo humano en agentes de mejora continua.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5">
                    <a href="./capacitacion.php">
                        <div class="contenedor-servicios1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/enplanta_19.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Capacitación</h4>
                            </div>
                            <div class="back-servicios1 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Capacitación</h4>
                                    <p>Diseñamos un programa de capacitación Lean Six Sigma in-house que se ajusta a las necesidades de tu organización</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5">
                    <a href="./certificacion.php">
                        <div class="contenedor-servicios1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/certificacion_1.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Certificación</h4>
                            </div>
                            <div class="back-servicios1 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Certificación</h4>
                                    <p>Te equipamos para ser parte de un selecto grupo de expertos en calidad reconocidos a nivel mundial con el Certified Six Sigma Green/Black Belt.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="industrias">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <h2>Industrias en donde estamos presentes</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid" style="padding-left: 4%;padding-right:4%;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 pt-5">
                    <a href="./alimentos.php">
                        <div class="contenedor-servicios1 mx-1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/industria11_leche.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Alimentaria</h4>
                            </div>
                            <div class="back-servicios2 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Alimentaria</h4>
                                    <p>La industria de alimentos en el Perú desempeña un papel fundamental en la economía nacional, gracias a su rica biodiversidad y la creciente demanda en mercados locales como internacionales.
                                        La excelencia operacional ayuda a superar los desafíos actuales, y posiciona a las empresas peruanas como líderes globales en calidad, innovación y sostenibilidad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5">
                    <a href="./servicios.php">
                        <div class="contenedor-servicios1 mx-1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/supermercado2.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Servicios</h4>
                            </div>
                            <div class="back-servicios2 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Servicios</h4>
                                    <p>La industria de servicios en el Perú abarca sectores clave como el comercio, turismo, telecomunicaciones, banca y educación, entre otros.
                                        La excelencia operacional resuelve los problemas actuales de la industria de servicios en el Perú y establece las bases para una operación más ágil, innovadora y orientada al cliente. Estas prácticas permiten a las organizaciones destacar por su calidad, eficiencia y capacidad de adaptación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5">
                    <a href="./mineria.php">
                        <div class="contenedor-servicios1 mx-1" style="position:relative; overflow: hidden;">
                            <div class="img-contenedor-servicios1">
                                <img src="./public/img/web/mineria3.jpg" class="w-100" alt="">
                            </div>
                            <div class="titulo-servicios1">
                                <h4 style="text-align: center;padding:1.2rem;">Minería</h4>
                            </div>
                            <div class="back-servicios2 d-flex justify-content-center">
                                <div class="c-servicio1">
                                    <h4 style="color:white;text-align:center;">Minería</h4>
                                    <p>La industria minera en el Perú es uno de los pilares económicos del país, posicionándolo como líder en la producción de metales preciosos y básicos en el escenario global.
                                        La excelencia operacional no solo responde a los desafíos actuales de la industria minera en el Perú, sino que establece las bases para un futuro más competitivo, sostenible e innovador.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Resultados -->
    <section id="resultados">
        <div class="container-fluid" style="padding-left: 5%; padding-right: 5%;">
            <div class="row d-flex justify-content-around">
                <!-- Contador 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/proyects.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="1100">0</div>
                        <p>Proyectos terminados con éxito</p>
                    </div>
                </div>

                <!-- Contador 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/colaboraciones.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="200">0</div>
                        <p>Colaboraciones satisfechas</p>
                    </div>
                </div>

                <!-- Contador 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/paises.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="22">0</div>
                        <p>Países en donde estamos trabajando</p>
                    </div>
                </div>

                <!-- Contador 4 -->
                <!--  <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center mb-4">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="icon-box" style="border: solid 10px var(--color2); padding: 1rem;">
                            <img src="./public/img/icons/consultoria.png" style="width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="counter" data-target="40">0</div>
                        <p  >Horas de consultoría y capacitación</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <br>


    <section id="contacto">
        <div class="container">
            <h2 style="color:var(--color4);padding-top:5rem;padding-bottom:5rem;text-align:center;">CONTACTO</h2>
            <div class="row d-flex " style="box-shadow: 0 10px 60px 0 rgba(71,74,182,0.12);">
                <div class="col-12 col-lg-8 p-5" style="background-color:white;">
                    <h4>Conversemos</h4>
                    <br>
                    <p>Estamos en constante aprendizaje, experimentando y mejorando. Caminemos juntos hacia la mejora continua.
                    </p>
                    <br>
                    <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">
                        <div class="row d-flex">
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="text" name="nombres" placeholder="Nombres y Apellidos" required="" control-id="ControlID-1">
                            </div>
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="text" name="correo" placeholder="Email" required="" control-id="ControlID-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="number" inputmode="numeric" name="celular" placeholder="Celular" required="" control-id="ControlID-3">
                            </div>
                            <div class="col-md">
                                <select id="nivel" class="mb-3 select-form" aria-label="Default select example" name="motivo" onchange="actualizarGrados()" required="" control-id="ControlID-4">
                                    <option selected="">--- Motivo ---</option>
                                    <option value="solicitud">Solicitud de consultoría</option>
                                    <option value="informe">Informe de certificaciones</option>
                                    <option value="servicio">Cotización de servicio</option>
                                    <option value="postulacion">Deseo postular a Gemba</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <textarea id="input-formulario" placeholder="Escriba su consulta" rows="3" name="consulta" required="" control-id="ControlID-6"></textarea>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-md-start justify-content-around">
                            <div class="col-lg my-auto">
                                <div class="form-check form-check-inline text-white ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" class="form-check-input" id="checkone" value="si" required="" control-id="ControlID-8">
                                    <label class="form-check-label" for="checkone">
                                        <a href="./public/files/politicas_priv.pdf" target="_blank">
                                            <p id="terminos"> "He leído y acepto las políticas de privacidad"</p>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <center>
                            <div class="g-recaptcha" data-sitekey="6LcrsPMqAAAAAGbE2e_DxDPwDt9kbDbQM_Ph7ou2"></div>
                        </center>
                        <br>
                        <div class="row d-flex justify-content-md-center justify-content-center">
                            <div class="col-lg-4 d-flex justify-content-center">
                                <button class="btn-outline" type="submit">Enviar</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center" style="background-color:var(--color10);">
                    <div class="py-5">
                        <a href="https://www.instagram.com/gembaconsultinglatam/" target="_blank">
                            <div class="row justify-content-lg-center justify-content-center">
                                <h3>Información</h3>
                                <br>
                                <div class="col-2 col-lg-2 d-flex justify-content-center my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white" style="height: 45px; width: 45px;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </div>
                                <div class="col-6 col-lg-8 my-auto">
                                    <!-- <p style="color:white;word-wrap: break-word;">Address: </p> -->
                                    <p style="color:white;">Gemba Consulting Latam
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="https://www.linkedin.com/company/gembaconsultinglatam/" target="_blank">
                            <div class="row pt-4 justify-content-lg-center justify-content-center">
                                <div class="col-2 col-lg-2 d-flex justify-content-center my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="white" style="height: 45px; width: 45px;"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                    </svg>
                                </div>
                                <div class="col-6 col-lg-8 my-auto">
                                    <p style="color:white;">Gemba Consulting Group Latam</p>

                                </div>
                            </div>
                        </a>

                        <div class="row pt-4 justify-content-lg-center justify-content-center">
                            <div class="col-2 col-lg-2 d-flex justify-content-center pt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white" style="height: 45px; width: 45px;"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7 .3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2 .4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                </svg>
                            </div>
                            <div class="col-6 col-lg-8">
                                <p style="color:white;word-wrap: break-word;">Email:<br><a style="color:white;" href="mailto:info@gembaconsultinggroup.com" target="_blank">info@gembaconsultinggroup.com</a></p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once './partials/footer.php'; ?>

</body>

<!-- <script>
    const swiper = new Swiper('.testimonial-content--2', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
    });
</script> -->
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script>
   
    let owlReconocimientos = $('#owl-reconocimientos');
    let owlAsesorias = $('#owl-asesorias');
    owlReconocimientos.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        // autoplayHoverPause: true,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    owlAsesorias.owlCarousel({
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
                items: 3
            }
        }
    })
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');
        const resultadosElement = document.getElementById('resultados'); // Elemento que contiene los contadores
        const baseDuration = 2000; // Duración fija en milisegundos para todos los contadores

        // Función de easing
        function easeInOutQuad(t) {
            return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
        }

        // Función para formatear el valor final
        function formatValue(value, prefix = '', suffix = '') {
            return `${prefix}${value}${suffix}`;
        }

        // Función para animar un contador
        function animateCounter(counter, duration, onComplete) {
            const target = counter.getAttribute('data-target');
            if (!target) return; // Validación básica

            const prefix = counter.getAttribute('data-prefix') || '';
            const suffix = counter.getAttribute('data-suffix') || '';
            const hasColon = target.includes(':');
            const targetParts = hasColon ? target.split(':') : [target];
            const initialParts = counter.innerText.replace(/[+%]/g, '').split(':');

            function step(timestamp, startTime) {
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const easedProgress = easeInOutQuad(progress);
                const updatedParts = targetParts.map((part, index) => {
                    const startValue = +initialParts[index] || 0;
                    const endValue = +part.replace('%', '');
                    return Math.floor(easedProgress * (endValue - startValue) + startValue);
                });

                const updatedValue = updatedParts.join(':');
                counter.innerText = formatValue(updatedValue, prefix, suffix);

                if (progress < 1) {
                    window.requestAnimationFrame((newTimestamp) => step(newTimestamp, startTime));
                } else {
                    counter.innerText = formatValue(target, prefix, suffix); // Asegura el valor final exacto
                    if (onComplete) onComplete(); // Ejecuta el callback al finalizar
                }
            }

            window.requestAnimationFrame((timestamp) => step(timestamp, performance.now()));
        }

        // Configuración del IntersectionObserver
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animar todos los contadores cuando la sección es visible
                    counters.forEach((counter, index) => {
                        // Agregar el prefijo "+" a los primeros 3 contadores
                        if (index < 2) {
                            counter.setAttribute('data-prefix', '+');
                        }

                        animateCounter(counter, baseDuration, () => {
                            console.log('Animación completada para:', counter);
                        });
                    });

                    // Dejar de observar el elemento después de la animación
                    observer.unobserve(resultadosElement);
                }
            });
        }, {
            threshold: 0.1 // Umbral de visibilidad (10% del elemento visible)
        });

        // Observar el elemento que contiene los contadores
        if (resultadosElement) {
            observer.observe(resultadosElement);
        }
    });
</script>

<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>	
	<script>
		
    const enviarCorreo = (e) => {
        e.preventDefault();
        
        // Obtener la respuesta del reCAPTCHA
        let respuestaRecaptcha = grecaptcha.getResponse();

        if (respuestaRecaptcha.length == 0) {
            alert("Por favor, verifica el reCAPTCHA antes de enviar.");
            return;
        }

        // Agregar la respuesta de reCAPTCHA al FormData
        let form = new FormData(document.getElementById("formContacto"));
        form.append("g-recaptcha-response", respuestaRecaptcha);

        fetch("./lib/correo_mailer.php", {
            method: "POST",
            body: form
        })
        .then(res => res.text())
        .then(res => {
            alert(res);
            e.target.reset();
            grecaptcha.reset(); // Restablecer reCAPTCHA después de enviar el formulario
        })
        .catch(error => {
            console.error("Error en el envío:", error);
            alert("Hubo un error al enviar el formulario.");
        });
    };

		</script>

</html>
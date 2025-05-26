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
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">


    <title>Gemba Consulting Group</title>
</head>

<body>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <style>
        #cuerpo {
            background-image: url('./public/img/web/p-contacto.jpg');
            /* background-attachment: fixed; */
            background-size: 100%;
            padding-bottom: 10rem;
            padding-top: 10rem;
            background-position: center 10%;
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

        #cuerpo h4 {
            text-align: center;
            color: var(--color5);
            font-weight: 10;
        }

        #cuerpo .sub {
            background: var(--color5);
            color: var(--color1);
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #cuerpo .sub:hover {
            background-color: var(--color1);
            color: var(--color5);
            transform: scale(1.06);
        }


        #contactanos {
            /* margin-top: 5rem; */
            /* margin-bottom: 4rem; */
            padding-top: 80px;
            padding-bottom: 80px;
            /* background: var(--color1); */
            background: #fff;
            /* opacity: .1; */
        }

        #contactanos a {
            text-decoration: none;
        }

        #contactanos .datos {
            padding-left: 50px;
        }

        #contactanos .tab-content ul {
            margin: 0;
            list-style: none;
        }

        #contactanos .tab-content ul li {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        #contactanos .tab-content ul li i {
            display: inline-block;
            font-size: 30px;
            height: 80px;
            width: 80px;
            text-align: center;
            line-height: 80px;
            background: #ffffff;
            border-radius: 63% 37% 30% 70% / 50% 45% 55% 50%;
            color: var(--color2);
            margin-right: 20px;
            box-shadow: 0 5px 30px 0 rgb(214 215 216 / 57%);
        }

        #contactanos .tab-content ul li .info h4 {
            margin-bottom: 0;
            /* color: #fff; */
            font-weight: bold;
            font-size: 18px;
        }

        #contactanos .tab-content ul li .info p {
            /* color: #fff; */
            font-size: 16px;
            margin-bottom: 0;
        }

        #contactanos .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background: transparent;
            /* color: #fff; */
            border-color: transparent;
            border-bottom: 6px solid var(--color2);
        }

        /* #contactanos .nav-tabs .nav-link:focus, 
            #contactanos .nav-tabs .nav-link:hover{
              border-color: transparent;
            } */

        #contactanos .nav-link {
            /* color: #fff; */
            color: #495057;
            font-weight: bold;
        }

        #contactanos iframe {
            display: block;
            height: 100%;
            min-height: 400px;
            position: relative;
            width: 100%;
            z-index: 1;
            padding: 15px;
            background: #ffffff;
            box-shadow: 0 5px 30px 0 rgb(214 215 216 / 57%);
        }

        #contactanos #formContacto .btn {
            background: var(--color4);
            color: var(--color5);
            font-weight: bold;
            border-radius: 8px;
            padding: 1rem 2rem;
            transition: all .3s ease-in-out;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        }

        #content-datos {
            margin-top: 1.2rem;
            padding: 1.4rem;
            text-align: center;
            border-radius: 10px;
            width: 80%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;

        }

        /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        #contacto {
            padding-top: 5rem;
            padding-bottom: 8rem;
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

        @media screen and (max-width:600px) {
            #contact-video .content-video {

                position: static;


            }

            #contactanos .datos {
                padding-left: 0px;
            }

            #cuerpo {
                background-size: 300%;
            }
            #contacto {
                padding-bottom:0rem;
            }
        }
    </style>

    <?php include_once './partials/header.php'; ?>

    <section id="cuerpo">
        <div class="container">
            <div class="row d-flex justify-content-center m-0 p-0">
                <div class="col-lg-12">
                    <!-- <h4>¿Quieres conversar?</h4> -->
                    <h1>Escríbenos, nos encantaría ayudarte
                    </h1>
                    <!-- <br>
                    <div class="row">
                        <div class="col text-center">
                            <div class="mt-3">
                                <a href="#" class="btn sub" target="_blank">Contáctanos</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="container">
            <h2 style="color:var(--color4);padding-top:5rem;padding-bottom:5rem;text-align:center;">¿Listo para dar el siguiente paso? <br>
                Empieza HOY tu transformación</h2>
            <div class="row d-flex " style="box-shadow: 0 10px 60px 0 rgba(71,74,182,0.12);">
                <div class="col-12 col-lg-8 p-5" style="background-color:white;">
                    <h4>Comunícate con nuestros expertos</h4>
                    <br>
                    <br>
                    <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">
                        <div class="row d-flex">
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="text" name="nombres" placeholder="Nombres y Apellidos" required="" control-id="ControlID-1">
                            </div>
                            <div class="col-md mb-3">
                                <input id="input-formulario" type="email" name="correo" placeholder="Email" required="" control-id="ControlID-3">
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
<!-- carrousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function enviarCorreo(e) {
        e.preventDefault();
        const data = new FormData(document.getElementById('formContacto'));
        fetch('./lib/correo_mailer.php', {
            method: 'POST',
            body: data
        }).then(function(res) {
            return res.text();
        }).then(function(res) {
            alert(res);
        }).then(function(res) {
            e.target.reset();
        });
    }
</script>
<script>
    $('.owl-carousel').owlCarousel({
        items: 3,
        merge: true,
        loop: true,
        margin: 10,
        video: true,
        lazyLoad: true,
        center: true,
        responsive: {
            480: {
                items: 2
            },
            600: {
                items: 4
            }
        }
    })
</script>
<script>
    AOS.init();
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
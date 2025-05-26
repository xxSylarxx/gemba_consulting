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
            background-image: url('./public/img/web/p-blog.jpg');
            /*  background-attachment: fixed; */
            background-size: 100%;
            padding-bottom: 6rem;
            padding-top: 6rem;
            background-position: center 30%;
            background-repeat: no-repeat;
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

        #div-servicios {
            padding: 2rem;
            background-color: var(--color9);
            transition: ease-in-out .8s;
        }

        #div-servicios img {
            object-fit: cover;
            height: 350px;
            width: 600px;
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
                    <h1>BLOG</h1>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <section id="servicios-interno">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 filtro-blog d-flex justify-content-center pt-4">
                    <a class="btn mx-4 active" id="todos">Todos</a>
                    <a class="btn mx-4" id="noticias">Noticias</a>
                    <a class="btn mx-4" id="educacion">Educación</a>
                    <a class="btn mx-4" id="eventos">Eventos</a>
                </div>
            </div>
            <div class="blog-items row d-flex justify-content-center">
                <div class="col-lg-4 pt-5 px-3" data-category="noticias">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img//galeria/portada_blog_1.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">CULTURA EMPRESARIAL EN EL PERÚ</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también.</p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="noticias">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 2</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="noticias">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 3</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="educacion">
                    <a href="./view8.php?id=4">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/blog-educacion.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;26-05-2025</p>
                            </div>
                            <h4 class="pt-1">Tradición que transforma</h4>
                            <p class="pt-2">En un mundo competitivo, consumista y apurado como en el que vivimos, Lean nos recuerda que la mejora real ocurre diariamente, con pequeños pasos y a largo plazo.. </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="educacion">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 5</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="educacion">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 6</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="eventos">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 7</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="eventos">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 8</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 pt-5 px-3" data-category="eventos">
                    <a href="./view8.php?id=1">
                        <div id="div-servicios" class="h-100">
                            <img src="./public/img/galeria/p-blog2.jpg" class="img-fluid" alt="">
                            <div class="fecha-pub d-flex pt-3">
                                <p class="my-auto"><i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;25-11-2024</p>
                            </div>
                            <h4 class="pt-1">Blog 9</h4>
                            <p class="pt-2">El flujo de caja es uno de los indicadores financieros más críticos para cualquier empresa. Un flujo de caja sólido no solo garantiza que la empresa pueda cumplir con sus obligaciones financieras a corto plazo, sino que también </p>
                            <div class="text-center">
                                <div class="btn-about">Más Detalles&nbsp;<i class="fas fa-angle-double-right"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--   <//?php include_once './contacto-seccion.php'; ?> -->

    <?php include_once './partials/footer.php'; ?>

</body>
<script>
    AOS.init();
</script>
<script>
    document.getElementById('todos').addEventListener('click', function() {
        filterBlogs('todos');
        setActive(this);
    });
    document.getElementById('noticias').addEventListener('click', function() {
        filterBlogs('noticias');
        setActive(this);
    });
    document.getElementById('educacion').addEventListener('click', function() {
        filterBlogs('educacion');
        setActive(this);
    });
    document.getElementById('eventos').addEventListener('click', function() {
        filterBlogs('eventos');
        setActive(this);
    });

    /*  function filterBlogs(category) {
         const blogs = document.querySelectorAll('[data-category]');
         blogs.forEach(function(blog) {
             if (category === 'todos' || blog.getAttribute('data-category') === category) {
                 blog.style.display = 'block';
             } else {
                 blog.style.display = 'none';
             }
         });
     } */
    function filterBlogs(category) {
        const blogs = document.querySelectorAll('[data-category]');
        blogs.forEach(blog => {
            if (category === 'todos' || blog.dataset.category === category) {
                blog.style.display = 'block';
                blog.animate([{
                        opacity: 0,
                        transform: 'translateY(-20px)'
                    }, // Desde la izquierda
                    {
                        opacity: 1,
                        transform: 'translateY(0)'
                    }
                ], {
                    duration: 1000,
                    easing: 'ease-in-out'
                });
            } else {
                blog.animate([{
                        opacity: 1,
                        transform: 'translateY(0)'
                    },
                    {
                        opacity: 0,
                        transform: 'translateY(-20px)'
                    } // Hacia la izquierda
                ], {
                    duration: 300,
                    easing: 'ease-in-out'
                }).onfinish = () => {
                    blog.style.display = 'none';
                };
            }
        });
    }

    function setActive(element) {
        const buttons = document.querySelectorAll('.filtro-blog .btn');
        buttons.forEach(function(button) {
            button.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>


</html>
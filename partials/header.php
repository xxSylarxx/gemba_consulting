<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'nosotros.php':
        $active2 .= ' activador';
        break;
    case 'gestion-activos.php':
    case 'sistema-gestion.php':
    case 'prevencion-rescate.php':
    case 'estrategia.php':
    case 'finanzas.php':
    case 'operaciones.php':
    case 'personas.php':
        $active3 .= ' activador';
        break;
    /* case 'blog.php':

        $active4 .= ' activador';
        break; */
    case 'blog.php':

        $active5 .= ' activador';
        break;
    case 'contacto.php':

        $active6 .= ' activador';
        break;
}
?>
<style>
    #modalVideoCubicol .modal-body {
        padding: 1rem 2rem;
    }

    #modalVideoCubicol .form-control-lg {
        font-size: 2rem;
        border: none;
        border-radius: 20px;
    }

    #modalVideoCubicol .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #ffffff;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
    }

    #header .barsup {
        font-size: 13px;
        padding: 4px 7%;
        background: #000;
    }

    #header .barsup .contact-item a {
        color: #FCFCFC;
    }

    #header .barsup .contact-item a i {
        font-size: 1.5rem;
    }

    #header .barsup .mininav a {
        color: #f4f4f4;
        display: flex;
    }

    #header .barsup .mininav a i {
        font-size: 1.5rem;
    }

    #header .barsup .mininav .mininav-item {
        margin: 0 10px;
    }

    header .navbar-nav .nav-item .nav-link {

        padding: 0;

    }

    header .navbar-nav .nav-item .activador {
        background-color: var(--color1) !important;
        border-radius: 15px;
        color: white !important;

    }

    header .navbar-nav .nav-item {

        padding: .4rem;
        margin: 0px 10px 0px 10px;

    }

    /* 
    header .navbar-nav .nav-item:hover {
        background-color: var(--color1);
        color: var(--color9) !important;

    } */

    /*     header .navbar-nav .nav-item:hover a {

        color: var(--color1) !important;

    }
 */
    header .redes-header {

        padding-right: 1.1rem;
        margin: 0px 10px 0px 10px;

    }

    #menu-responsive {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    #menu-responsive li {
        border-top: dashed 1px var(--color7);
    }

    /*  #menu-responsive:hover li {
        background-color: red;
    }
 */

    .nav-item .submenu {
        background-color: var(--color4);
    }

    #content-nav {
        padding-left: 5% !important;
        padding-right: 5% !important;
    }

    #conten-nav-a {
        width: 400px;
    }

    .btn-close {
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIgdmlld0JveD0iMCAwIDE2IDE2Ij4KICA8cGF0aCBkPSJNMTIuNzEgMy4yOWExIDEgMCAwIDAtMS40MS0xLjQxbC02LjI5IDYuMjktNi4yOS02LjI5YTEgMSAwIDAgMC0xLjQxIDEuNDFsNi4yOSA2LjI5LTYuMjkgNi4yOWExIDEgMCAwIDAgMS40MSAxLjQxbDYuMjktNi4yOSA2LjI5IDYuMjlhMSAxIDAgMSAwIDEuNDEtMS40MWwtNi4yOS02LjI5IDYuMjktNi4yOWExIDEgMCAwIDAtMS40MS0xLjQxeiIgZmlsbD0iI2ZmZiIvPgo8L3N2Zz4K') no-repeat center center !important;
    }

    .navbar-dark .navbar-toggler {
        background-color: var(--color1);
    }


    /* ============ desktop view ============ */
    @media screen and (max-width: 500px) {
        header #logo-elim {
            transform: scale(1.2);
           
        }
    }

    @media screen and (max-width: 800px) {
        header #logo-elim {
            transform: scale(1.2);
           
        }
    }

    @media all and (max-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        /*  .dropdown-menu>li:hover {
            background-color: #f1f1f1;
        } 
 */
        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */

    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }

        .redes-header .col-lg-2 {
            width: auto;
        }
    }

    /* Arreglo del bug de flecha de servicios (flecha se baja en resoluciones mas pequeñas) */
    /* Asegura que el ícono y el texto estén en línea */
    #navbarDropdown {
        display: flex;
        align-items: center;
        white-space: nowrap;
        /* Evita que el texto y el ícono se vayan a una nueva línea */
    }

    #navbarDropdown i {
        margin-left: 5px;
        /* Espacio entre el texto y el ícono */
    }

    @media screen and (min-width: 992px) and (max-width: 1550px) {
        #conten-nav-a {
            width: 200px;
        }
    }

    /* ============ small devices .end// ============ */
</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-184071885-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-184071885-1');
</script>
<header id="header" style="background-color:var(--color9);" class="fixed-top">
    <div class="barsup">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md d-flex">
                    <!-- <div class="d-flex mininav">
                        <div class="mininav-item my-2"><a href="ca-conferencias.php" <i class="far fa-users"></i> <span class="ms-2">Emprendedores</span> </a></div>
                        <div class="mininav-item my-2"><a href="mg-conferencias.php" <i class="far fa-building"></i> <span class="ms-2">Empresa</span> </a></div>
                    </div> -->
                    <div class="d-flex ms-auto mininav">
                        <a href="https://www.linkedin.com/company/gembaconsultinglatam/" class="me-3" target="_blank"><i class="fab fa-linkedin"></i> </a>
                        <a href="https://www.instagram.com/gembaconsultinglatam/" class="me-3" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="position:relative;">
        <div class="container-fluid" id="content-nav">
            <a id="conten-nav-a" class="navbar-brand animate__animated animate__zoomIn" href="./">
                <!--  class="d-flex flex-row align-items-center" id="escudo" -->
                <!-- Ajusta el ancho y alto según necesites -->

                <img src="./public/img/icons/logo.png" alt="Logo" class="mr-3" id="logo-elim">


            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item my-auto">
                        <a class="nav-link " href="./">Inicio</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link " href="./somos.php">Quiénes Somos</a>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item my-auto" onmouseover="showMenuHover(0)" onmouseout="showMenuHover2(0)">
                        <a class="nav-link  <?= $active3 ?>" id="navbarDropdown">
                            SERVICIOS &nbsp;<i class="fas fa-chevron-down"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./consultoria.php">Consultoría</a></li>
                            <li><a class="dropdown-item py-2" href="./capacitacion.php">Capacitación</a></li>
                            <li><a class="dropdown-item py-2" href="./certificacion.php">Certificación</a></li>
                        </ul>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item my-auto" onmouseover="showMenuHover(1)" onmouseout="showMenuHover2(1)">
                        <a class="nav-link  " id="navbarDropdown">
                            INDUSTRIAS &nbsp;<i class="fas fa-chevron-down"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./alimentos.php">Manufactura de Alimentos</a></li>
                            <li><a class="dropdown-item py-2" href="./mineria.php">Minería</a></li>
                            <li><a class="dropdown-item py-2" href="./servicios.php">Industria de Servicios</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item my-auto">
                        <a class="nav-link <//?= $active4?> " href="./public/files/PBCo-Peru 2024v2.pdf" target="_blank">PBCo</a>
                    </li> -->
                    <li class="nav-item my-auto">
                        <a class="nav-link  " href="./blog.php">Blog</a>
                    </li>
                    <li id="barra-menu-responsive" class="nav-item my-auto" onmouseover="showMenuHover(2)" onmouseout="showMenuHover2(2)">
                        <a class="nav-link  " id="navbarDropdown">
                            MATERIALES &nbsp;<i class="fas fa-chevron-down"></i>
                        </a>
                        <ul id="menu-responsive" class="dropdown-menu animate__animated animate__fadeInUp" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="./libros.php">Libros</a></li>

                        </ul>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link activador " href="./contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item ms-lg-4 d-none d-md-flex my-auto" style="cursor: pointer;">
                        <i class="fas fa-search fa-lg" data-bs-toggle="modal" data-bs-target="#modalVideoCubicol" style="color:var(-color1);"></i>
                    </li>
                    <li>
                        <!--  <li class="redes-header my-auto">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-2 mx-1">
                                    <a href="#">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                                            <path style="fill:#557dbc;" d="M20,10.1c0-5.5-4.5-10-10-10S0,4.5,0,10.1c0,5,3.7,9.1,8.4,9.9v-7H5.9v-2.9h2.5V7.9C8.4,5.4,9.9,4,12.2,4c1.1,0,2.2,0.2,2.2,0.2v2.5h-1.3c-1.2,0-1.6,0.8-1.6,1.6v1.9h2.8L13.9,13h-2.3v7C16.3,19.2,20,15.1,20,10.1z"></path>
                                        </svg>
                                    </a> 
                                    <a href="https://www.youtube.com/@PeraltaBusinessConsulting" target="_blank">
                                        <svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 968.47 680.6" width="25" height="25">
                                            <g id="Capa_1-2" data-name="Capa 1">
                                                <g>
                                                    <rect class="cls-1" style="fill: #fff;" x="356.26" y="172.4" width="400" height="343" />
                                                    <path class="cls-2" style="fill: red;" d="m498.5,680.6c-117.3-5.01-221.89-9.18-326.43-14.21-20.05-.96-40.19-4.1-59.86-8.26-51.96-11-87.08-49.32-96.39-106.24C.39,457.57-2.97,362.47,2.37,267.18c2.54-45.23,6.27-90.59,13-135.35C26.55,57.48,67.98,20.03,142.61,13.29,324.49-3.15,506.69-2.23,688.91,4.75c50.31,1.93,100.72,5.66,150.65,11.99,65.89,8.35,102.39,45.18,113.39,110.54,15.78,93.7,18.24,188.2,13.07,282.83-2.5,45.86-6.57,91.8-13.12,137.25-10.31,71.48-51.49,110.66-123.21,115.38-114.46,7.54-229.09,12.48-331.2,17.87Zm-110.24-487.68v291.27c84.93-48.93,167.23-96.34,252.81-145.64-85.8-49.43-167.91-96.73-252.81-145.63Z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-lg-2 mx-1">
                                    <a href="https://www.instagram.com/pbcoperu/?hl=en" target="_blank">
                                        <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                                            <circle style="fill:#ed1376;" cx="10" cy="10" r="3.3"></circle>
                                            <path style="fill:#ed1376;" d="M14.2,0H5.8C2.6,0,0,2.6,0,5.8v8.3C0,17.4,2.6,20,5.8,20h8.3c3.2,0,5.8-2.6,5.8-5.8V5.8C20,2.6,17.4,0,14.2,0zM10,15c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S12.8,15,10,15z M15.8,5C15.4,5,15,4.6,15,4.2s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S16.3,5,15.8,5z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-lg-2 mx-1">
                                    <a href="https://pe.linkedin.com/company/peralta-business-company" target="_blank">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                                            <path style="fill:#1c86c6;" d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-lg-2 mx-1">
                                    <a href="https://www.tiktok.com/@pbcoperu?lang=en" target="_blank">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                                            <path style="fill:#000000;" d="M18.2 4.5c-2.3-.2-4.1-1.9-4.4-4.2V0h-3.4v13.8c0 1.4-1.2 2.6-2.8 2.6-1.4 0-2.6-1.1-2.6-2.6s1.1-2.6 2.6-2.6h.2l.5.1V7.5h-.7c-3.4 0-6.2 2.8-6.2 6.2S4.2 20 7.7 20s6.2-2.8 6.2-6.2v-7c1.1 1.1 2.4 1.6 3.9 1.6h.8V4.6l-.4-.1z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-lg-2">
                                    <a href="https://wa.me/+51998107051" target="_blank">
                                        <svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                                            <path style="fill:#5bba67;" d="M10,0C4.5,0,0,4.5,0,10c0,1.9,0.5,3.6,1.4,5.1L0.1,20l5-1.3C6.5,19.5,8.2,20,10,20c5.5,0,10-4.5,10-10S15.5,0,10,0zM6.6,5.3c0.2,0,0.3,0,0.5,0c0.2,0,0.4,0,0.6,0.4c0.2,0.5,0.7,1.7,0.8,1.8c0.1,0.1,0.1,0.3,0,0.4C8.3,8.2,8.3,8.3,8.1,8.5C8,8.6,7.9,8.8,7.8,8.9C7.7,9,7.5,9.1,7.7,9.4c0.1,0.2,0.6,1.1,1.4,1.7c0.9,0.8,1.7,1.1,2,1.2c0.2,0.1,0.4,0.1,0.5-0.1c0.1-0.2,0.6-0.7,0.8-1c0.2-0.2,0.3-0.2,0.6-0.1c0.2,0.1,1.4,0.7,1.7,0.8s0.4,0.2,0.5,0.3c0.1,0.1,0.1,0.6-0.1,1.2c-0.2,0.6-1.2,1.1-1.7,1.2c-0.5,0-0.9,0.2-3-0.6c-2.5-1-4.1-3.6-4.2-3.7c-0.1-0.2-1-1.3-1-2.6c0-1.2,0.6-1.8,0.9-2.1C6.1,5.4,6.4,5.3,6.6,5.3z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li> -->

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="modalVideoCubicol" tabindex="-1" aria-labelledby="modalVideoCubicolLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="top: 25%;">
        <button style="left: 100%; position: absolute; top: -40%;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-content" style="border-radius: 40px;">
            <!-- <div class="modal-header">
                <h5 class="modal-title fw-bolder" id="modalVideoCubicolLabel" style="color: var(--color2);">¿Qué es Cubicol para Colegios?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <form action="buscador" method="get">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="fas fa-search fa-2x me-3"></i>
                        <input type="text" class="form-control form-control-lg" name="search" value="" placeholder=" Buscar ...">
                        <!-- <input type="submit" value="Buscar"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var height = document.getElementById('header').clientHeight;
    document.querySelector('body').style.paddingTop = height + "px";

    function showMenuHover(index, add = true) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.add('show');
    }

    function showMenuHover2(index, add = false) {
        const menu = document.querySelectorAll('ul.dropdown-menu')[index];
        menu.classList.remove('show');
    }

    // Añadir un evento de clic a todos los elementos con submenús
    document.querySelectorAll('.submenu-parent > a').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>
<!-- <script>
    function updateLogo() {
        let logo = document.getElementById("logo-elim");

      

        if (window.innerWidth >= 992 && window.innerWidth <= 1399) {
            logo.src = "./public/img/icons/logo_responsive.png"; 
        } else {
            logo.src = "./public/img/icons/logo.png";
        }
    }

 
    window.addEventListener("load", updateLogo);

    window.addEventListener("resize", updateLogo);
</script> -->
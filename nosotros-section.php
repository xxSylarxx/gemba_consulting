<!-- Se usa framework de boostrap para algunas clases -->
<style>
    .content-flecha {
        position: relative;
    }

    .container-flecha {
        padding-left: 8%;
        /*  padding-right: 3%; */
    }

    .content-img-flecha {
        position: absolute;
        bottom: 50%;
        left: 50%;

    }

    .content-img-flecha img {
        border-radius: 50% 50%;
        width: 500px;
        height: 500px;
        object-fit: cover;
    }

    .content-img-flecha2 {
        position: absolute;
        bottom: 2%;
        left: -1.5%;

    }

    .content-img-flecha2 img {
        border-radius: 50% 50%;
        width: 500px;
        height: 500px;
        object-fit: cover;


    }

    .content-noso {
        background-color: var(--color9);
        padding: 2rem;
    }

    .content-noso h3,
    .content-noso p {
        text-align: center;
        color: var(--color5);

    }

    @media screen and (max-width: 600px) {
        #flecha-responsive {
            display: none;
        }

        .content-img-flecha {
            display: none;
        }

        .content-img-flecha2 {
            display: none;
        }
        .container-flecha{
            padding-left: 0rem;
        }
    }
</style>
<section class="content-flecha">
    <div class="row">
        <div class="col-lg">
            <h2 style="color:var(--color1);text-align:center;">NUESTRA METODOLOGÍA</h2>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="container-flecha">
            <div class="row">
                <div class="col-lg-3">
                    <div class="content-noso">
                        <h3>Diagnóstico</h3>
                        <p>Esta fase implica una evaluación
                            integral de la situación actual de la
                            organización, identificando
                            fortalezas, debilidades,
                            oportunidades y amenazas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2" id="flecha-responsive">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.94 307.11" style="margin-left: 2.5rem;">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #101925;
                                    stroke-width: 0px;
                                }
                            </style>
                        </defs>
                        <polygon class="cls-1" points="361.94 201.68 256.51 95.02 256.51 151.1 111.09 151.1 111.09 0 0 0 0 151.1 0 251.03 111.09 251.03 256.51 251.03 256.51 307.11 361.94 201.68" />
                    </svg>
                </div>
                <div class="col-lg-3 pt-5">
                    <div class="content-noso">
                        <h3>Análisis</h3>
                        <p>En esta etapa, se realiza un estudio
                            detallado de la información
                            recopilada durante el diagnóstico,
                            permitiendo definir estrategias y
                            soluciones adecuadas para abordar
                            los problemas identificados.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2" id="flecha-responsive">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.94 307.11" style="margin-left: 2.5rem;">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #101925;
                                    stroke-width: 0px;
                                }
                            </style>
                        </defs>
                        <polygon class="cls-1" points="361.94 201.68 256.51 95.02 256.51 151.1 111.09 151.1 111.09 0 0 0 0 151.1 0 251.03 111.09 251.03 256.51 251.03 256.51 307.11 361.94 201.68" />
                    </svg>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="content-noso">
                        <h3>Implementación</h3>
                        <p>Durante la fase de implementación,
                            se llevan a cabo las acciones y
                            estrategias definidas, asegurando
                            que se realicen de manera efectiva
                            y conforme a los planes
                            establecidos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-2">

                </div>
                <div class="col-lg-2" id="flecha-responsive">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.94 307.11" style="margin-left: 2.5rem;">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #101925;
                                    stroke-width: 0px;
                                }
                            </style>
                        </defs>
                        <polygon class="cls-1" points="361.94 201.68 256.51 95.02 256.51 151.1 111.09 151.1 111.09 0 0 0 0 151.1 0 251.03 111.09 251.03 256.51 251.03 256.51 307.11 361.94 201.68" />
                    </svg>
                </div>
                <div class="col-lg-3 pt-5">
                    <div class="content-noso">
                        <h3>Control</h3>
                        <p>Esta fase se centra en el monitoreo y la
                            evaluación de los resultados
                            obtenidos, garantizando que se
                            cumplan los objetivos del proyecto y
                            facilitando la identificación de
                            oportunidades para la mejora
                            continua.</p>
                    </div>
                </div>
            </div>
            <div class="content-img-flecha">
                <img src="./public/img/web/img-flecha-nosotros2.jpeg" alt="">

            </div>
            <div class="content-img-flecha2">
                <img src="./public/img/web/img-flecha-nosotros.jpg" alt="">
            </div>
        </div>
    </div>
</section>


</html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
        <title>Nosotros</title>
    </head>

    <body>
        <?php
            include 'nav.php';
        ?>
        <div class="card text-bg-dark">
            <img src="./img/nos.jpg" class="card-img" alt="imagen de nosotros">
            <div class="card-img-overlay my-5">
                <h1 class="card-title text-center" style="font-family:Cambria;">QUIENES SOMOS?</h1>
            </div>
        </div>
        <!--Referencias mision visión-->

            <div class="container-fluid bg-secondary bg-opacity-10">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <h3 class="mt-5">MISIÓN</h3>

                                <p class="text-muted fs-5 mt-4">
                                    Creamos, producimos y comercializamos derivados lácteos con la máxima calidad y garantía
                                    alimentaria atender y superar las necesidades y expectativas de nuestros clientes, 
                                    comprometiéndonos con el respeto y cuidado del medioambiente. 
                                </p>
                            </div>

                            <div class="col-6 mt-5 d-none d-lg-block">
                                <img src="./img/vaca.jpg" width="100%">
                            </div>
                        </div>
                        <!--Segunda sesion Imag-->
                        <div class="row">
                            <div class="col-6 d-none d-lg-block">
                                <img src="./img/vaca2.jpg" class="mt-4" width="100%">
                            </div>

                            <div class="col-lg-6 col-12">
                                <h3 class="mt-5">¿ QUE INFORMACION BRINDA?</h3>

                                <p class="text-muted fs-5 mt-5">La implementación de esta plataforma web,se busca publicitar los diferentes productos
                                     de la empresa, así como a la misma desde un enfoque comercial y familiar, intentando construir así la confianza en
                                     los actuales y futuros clientes, permitiendo mayor alcance y amplitud de la empresa.</p>
                            </div>
                        </div>
                         <!--parte 3-->
                        <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h3 class="mt-5">¿A FUTURO QUE SE ESPERA?</h3>

                                    <p class="text-muted fs-5 mt-4">El impacto positivo de la implementación de páginas web, enfocadas al desarrollo,
                                        mejora y crecimiento de diversas empresas a nivel mundial y nacional, 
                                        se espera brindar una herramienta digital que les permita la mejora
                                        de sus actividades económicas y comerciales, integrando de forma remota a nuevos y potenciales clientes.</p>
                                </div>

                                <div class="col-6 d-none d-lg-block">
                                    <img src="./img/vaca3.jpg" class="mt-5" width="100%">
                                </div>
                        </div>
                        
                    </div>
            </div>
    </body>
        <?php
            include 'footer.php';
        ?>
</html>
<!DOCTYPE html>
<html>

<head>
    <title> Menu de mi Pagina</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="widh=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url("./img/.jpg");
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <!-- Slider-->
    
    <div class="container mt-2">
        <div id="slider" class="carousel slide" data-bs-ride="carousel">
            <!--Indicadores del Carousel/Slide/Slide Show-->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="4"></button>
            </div>

            <!--Las imagenes del carrousel/slider-->
            <div class="carousel-inner" style="height:500px;">
                <div class="carousel-item active">
                    <img src="./img/img2.jpg" class="d-block w-100">
                    <!-- d block mostrara las imagenes en bloque.. w-100 ocuapa el 100% del tamaño-->
                </div>


                <div class="carousel-item">
                    <img src="./img/img5.jpg" class="d-block w-100" alt="postre de nueces">
                </div>

                <div class="carousel-item">
                    <img src="./img/img66.jpg" class="d-block w-100" alt="quesos maduros">
                </div>

                <div class="carousel-item">
                    <img src="./img/img5.jpg" class="d-block w-100" alt="cereal de fresa">
                </div>

                <div class="carousel-item">
                    <img src="./img/img3.jpg" class="d-block w-100" alt="postre">
                </div>

            </div>

            <!-- Controles de Izquierda y Derecha-->
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
<!--Estructuracion de productos-->
        <div class="container-fluid mt-5 bg-secondary bg-opacity-10">
            <h2 class="text-center fw-bolder">SECCIÓN DE QUESOS</h2>
        </div>

        <div class="row mt-5">
            <div class="col-sm-3">
                <div class="card text-center ms-4" style="width: 300px">
                    <img class="card-img-top" src="./img/quesin.jpg" alt="">
                    <div class="card-body">
                        <h3 class="text-center fs-1">Quesos</h3>
                        <a href="http://localhost/PaginaY/productos.php" class="btn btn-primary mt-5">Ver Más <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/queso4.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Queso Cheddar Blanco 2lb</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/queso2.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Cheddar de Keens 380g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/queso3.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Queso Camembert 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 bg-secondary bg-opacity-10">
            <h2 class="text-center fw-bolder">SECCIÓN DE YOGURES</h2>
        </div>
        <!--sesion 2--->
        <div class="row mt-5">
            <div class="col-sm-3">
                <div class="card text-center ms-4" style="width: 300px">
                    <img class="card-img-top" src="./img/yogurt.jpg" alt="">
                    <div class="card-body">
                        <h3 class="text-center fs-1">Yogures</h3>
                        <a class="btn btn-primary mt-5">Ver Más <i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/yogurt1.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/yogurt2.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/yogurt3.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 bg-secondary bg-opacity-10">
            <h2 class="text-center fw-bolder">SECCIÓN DE POSTRES</h2>
        </div>
        <!--sesion 3--->
        <div class="row mt-5">
            <div class="col-sm-3">
                <div class="card text-center ms-4" style="width: 300px">
                    <img class="card-img-top" src="./img/postres.jpg" alt="">
                    <div class="card-body">
                        <h3 class="fs-1">Postres</h3>
                        <a href="#" class="btn btn-primary mt-5">Ver Más <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/postre1.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/postre2.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-center" style="width: 300px">
                    <img class="card-img-top" src="./img/postre3.jpg" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Parmesano 500g</h5>
                            <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                            
                            <p>$12.900</p>
                            <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Productos vendidos-->
        <div class="container mt-5 p-4 bg-secondary bg-opacity-10">
            <h2 class="">Productos mejor <span class="text-success">Valorados</span> </h2>
            <div class="row g-0">
                <div class="col-3">
                    <div class="card text-center" style="width: 250px">
                        <img class="card-img-top" src="./img/postre3.jpg" alt="">
                        <div class="card-body">
                        <h5 class="card-title">Parmesano 500g</h5>
                                <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                                
                                <p>$12.900</p>
                                <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card text-center" style="width: 250px">
                        <img class="card-img-top" src="./img/postre6.jpg" alt="">
                        <div class="card-body">
                        <h5 class="card-title">Parmesano 500g</h5>
                                <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                                
                                <p>$12.900</p>
                                <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-center" style="width: 250px">
                        <img class="card-img-top" src="./img/yogurt4.jpg" alt="">
                        <div class="card-body">
                        <h5 class="card-title">Parmesano 500g</h5>
                                <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                                
                                <p>$12.900</p>
                                <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card text-center" style="width: 250px">
                        <img class="card-img-top" src="./img/yogurt5.jpg" alt="">
                        <div class="card-body">
                        <h5 class="card-title">Parmesano 500g</h5>
                                <p class="card-text"><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                                
                                <p>$12.900</p>
                                <a href="#" class="fw-bold btn btn-outline-warning">Añadir al Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

</body>
    <?php
        include 'footer.php';
    ?>

</html>
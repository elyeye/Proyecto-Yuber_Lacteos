<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>nav</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-ligth">
            <div class="container-fluid mt-2">
                    <a href="http://localhost/PaginaY/menu.php" class="nav-link">
                        <img src="http://localhost/PaginaY/img/letra2.jpg" alt="logo de la compañia" width="190px" class="ms-5">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav fw-bolder fs-8" style="font-size: small">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/PaginaY/menu.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PaginaY/nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost/PaginaY/productos.php" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                PRODUCTOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bolder" href="productos.php">Queso</a></li>
                                <li><a class="dropdown-item fw-bolder" href="yogurt.php">Yogurt</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item fw-bolder" href="#">Postres</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="http://localhost/PaginaY/contactanos.php">CONTÁCTANOS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav fw-bolder fs-8" style="font-size: small">
                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/PaginaY/user/login.php"><button
                                    class="btn btn-sm btn-warning"
                                    style="--bs-btn-padding-y: .12rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i
                                        class="bi bi-person-bounding-box h5"></i></button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="btn btn-sm btn-warning  "
                                    style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i
                                        class="bi bi-cart h5"></i></button></a></a>
                        </li>

                    </ul>
                </div>
                <a href="https://www.facebook.com/yuber.ojeda.1"><i class="bi bi-facebook h3 me-3"></i></a>
                <a href="https://www.instagram.com/yuber_ojeda/"><i class="bi bi-instagram h3 me-3"></i></a>
                <a href=""><i class="bi bi-twitter h3 me-2"></i></a>
               
            </div>
        </nav>
    </header>

</body>

</html>
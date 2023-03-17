<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ingreso de Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <style>
        .card-body {
            background-image: url("../img/a.jpg");
        }
    </style>
</head>

<body>
    <?php
        include '../nav.php';
        
        if (isset($_SESSION["Error"])) {
            echo '<div class="alert alert-danger m-0"><i class="bi bi-exclamation-circle-fill"></i>';
            echo $_SESSION["Error"];
            echo '</div>';
            session_unset();
            session_destroy();
        }
    ?>
    
    <div class="container my-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/logito.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="m-4 text-center">INICIAR SESIÓN</h3>
                        <form action="../controller/login-user.php" method="POST" class="was-validated">
                                <div class="form-floating m-4">
                                    <input type="email" class="form-control" id="email" placeholder="ingrese su email"
                                        name="email" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <div class="valid-feedback">El correo electónico es adecuado</div>
                                    <label for="email"><i class="bi bi-envelope"></i>Email</label>

                                </div>
                                <div class="form-floating m-4">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="ingrese su contraseña" name="password" required>
                                    <label for="password"><i class="bi bi-lock"></i>Password</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning fw-bolder">
                                    <i class="bi bi-box-arrow-in-right"></i> Ingresar</button>
                                    <p class="my-2">¿No dispones de una cuenta? <a href="http://localhost/PaginaY/user/registro.php" >Registrarse</a></p>
                                </div>
                                    
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <?php
        include '../footer.php';  
    ?>
</html>
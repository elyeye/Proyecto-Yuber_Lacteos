<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
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
        include '../nav.php'
    ?>
   
    <?php

        if (isset($_SESSION["ErrorDB"])) {
            echo '<div class="alert alert-danger m-0">
                <strong>ERROR:</strong>';
            echo $_SESSION["ErrorDB"];
            echo '</div>';
            session_unset();
            session_destroy();
        }

        if (isset($_SESSION["Status"])) {
            echo '<div class="alert alert-success m-0">
                    <strong>ÉXITO:</strong> Usuario Registrado.
                    </div>';
            session_unset();
            session_destroy();
        }
    ?>
    <div class="container d-flex justify-content-center my-5">
        <div class="card d-flex justify-content-center" style="width: 45rem;">
            <div class="card-body">
                <h1 class="text-center">REGISTRARSE</h1>
                <div class="container">
                    <form action="../config/inicio.php" method="POST" class="was-validated">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="text" class="form-control" id="nombre" placeholder="ingrese su nombre"
                                        name="nombre" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <label for="nombre"><i class="bi bi-person-fill"></i>Nombre</label>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="text" class="form-control" id="apellido"
                                        placeholder="ingrese su apellido" name="apellido" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <label for="apellido"><i class="bi bi-person-fill"></i>Apellido</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="text" class="form-control" id="telefono"
                                        placeholder="ingrese su telefono" name="telefono" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <label for="telefono"><i class="bi bi-person-fill"></i>Teléfono</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="text" class="form-control" id="direccion"
                                        placeholder="ingrese su direccion" name="direccion" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <label for="direccion"><i class="bi bi-person-fill"></i>Dirección</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="email" class="form-control" id="email" placeholder="ingrese su email"
                                        name="email" required>
                                    <div class="invalid-feedback">Por favor llenar este campo</div>
                                    <div class="valid-feedback">El correo electónico es adecuado</div>
                                    <label for="email"><i class="bi bi-envelope"></i>Email</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating m-4">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="ingrese su contraseña" name="password" required>
                                    <label for="password"><i class="bi bi-lock"></i>Password</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="fw-bolder btn btn-warning ms-4 m-4">
                                    <i class="bi bi-hand-index-thumb h5"></i> REGISTRAR</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include '../footer.php'; ?>
</body>

</html>
<?php
    session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Configuración Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <style>
        .card-body{
                background-image: url("./img/a.jpg");
            }
            body{
                background-image: url("./img/.jpg"); 
                background-repeat: ;
            }
    </style>

</head>

<body>
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
                    <strong>ÉXITO:</strong> La operación ha sido realizada.
                    </div>';
            session_unset();
            session_destroy();

        }
        ?>
    <div class="container-fluid bg-primary text-center text-white">
        <h1>REGISTRO </h1>
    </div>

    <div class="container mt-1">
    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">REGISTRARSE</h5>
                        <form action="inicio.php" method="POST" class="was-validated">
                            <div class="form-floating m-4">
                                <input type="text" class="form-control" id="nombre" placeholder="ingrese su nombre"
                                    name="nombre" required>
                                <div class="invalid-feedback">Por favor llenar este campo</div>
                                <label for="nombre"><i class="bi bi-person-fill"></i>Nombre:</label>

                            </div>

                            <div class="form-floating m-4">
                                <input type="email" class="form-control" id="email" placeholder="ingrese su email"
                                    name="email" required>
                                <div class="invalid-feedback">Por favor llenar este campo</div>
                                <div class="valid-feedback">El correo electónico es adecuado</div>
                                <label for="email"><i class="bi bi-envelope"></i>Email:</label>

                            </div>
                            <div class="form-floating m-4">
                                <input type="password" class="form-control" id="password"
                                    placeholder="ingrese su contraseña" name="password" required>
                                <label for="password"><i class="bi bi-lock"></i>Password:</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-dark ms-4 m-4">
                                    <i class="bi bi-hand-index-thumb"></i> Registrar</button>
                            </div>
                                
                        </form>
                    </div>
                </div>
    </div>
    <div class="navbar navbar-expand-sm bg-dark fixed-bottom text-white justify-content-center">
        <hr>
        <i class="bi bi-c-circle"></i>Todos los derechos reservados.
        2018-
        <?php echo date("Y"); ?>
    </div>
</body>

</html>
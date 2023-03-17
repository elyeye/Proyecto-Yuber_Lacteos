<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>admin</title>
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
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">LOGIN ADMINISTRADOR</h5>
                        <form action="controller/login.php " method="POST" class="was-validated">
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
                                    <button type="submit" class="btn btn-outline-dark ms-4 m-4">
                                    <i class="bi bi-box-arrow-in-right"></i> Ingresar</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
            <!--Registro-->
            <div class="col-md-6">
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
        </div>
    </div>





</body>

</html>
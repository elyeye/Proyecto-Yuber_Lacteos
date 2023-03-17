<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Contactanos</title>
</head>

<body>
    <?php
        include 'nav.php';
    ?>
    <div class="card text-bg-dark my-3">
        <img src="./img/coc.jpg" class="card-img-md" alt="vista de Contactanos">
        <div class="card-img-overlay my-5">
            <h1 class="card-title text-center" style="font-family:Cambria;">¡CONTACTA CON NOSOTROS!</h1>
            <h3 class="text-center text-dark">ATENDEREMOS TU MENSAJE LO ANTES POSIBLE</h3>
        </div>
    </div>

    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="./img/logito.jpg" alt="logo de la compañia" style="height: 200px;">
                <div class="row my-2 p-4">
                <i class="bi bi-headset h1"></i>
                <h2 class="fw-bolder text-success">Servicio al Cliente</h2>
                <h3 class="fw-semibolder">3143615073</h3>
                <h4 class=" fs-5">Email Servicio al Cliente</h4>
                <h5 class="text-muted">AtencioCliente@gmail.com</h5>
            </div>
            </div>
            
            <!--Formulario-->
            <div class="col-md-6">
                <h2 >INGRESA</h2>
                <h4 class="text-muted">TUS DATOS</h4>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label"></label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" value=""
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label"></label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required placeholder="Email">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label"></label>
                        <input type="text" class="form-control" id="validationCustom03" required placeholder="Teléfono">
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label"></label>
                        <input type="text" class="form-control" id="validationCustom03" required placeholder="Empresa">
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Mensaje</label>
                    </div>

                    <div class="col-md-12 text-center">
                        <button class="btn btn-warning" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
</body>
    <?php
        include 'footer.php';
    ?>
    
</html>
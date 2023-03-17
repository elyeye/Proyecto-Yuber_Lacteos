<!DOCTYPE html>
<html>
    <head>
    <title>Email</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="widh=device-width, initial-scale=1">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <button type="button" class="mt-5 mx-5 btn btn-success" data-bs-toggle="modal" data-bs-target="#mimodal">L O G I N</button>
        
        <div class="modal fade" id="mimodal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">VILLALUZ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" arial-label="close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="container mt-2">
                                <h1 class="text-center">Iniciar Sesión</h1>
                                <form action="recibir.php" method="post">
                                    <div>
                                        <label class="form-label">Email: </label>
                                        <input type="email" class="form-control" id="email" placeholder=" Ingrese su Email" name="email"></input>
                                    </div>

                                    <div>
                                        <label class="form-label mt-3">Password: </label>
                                        <input type="password" class="form-control" id="password" placeholder=" Ingrese su Contraseña" name="password"></input>
                                    </div>

                                    <div class="mt-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-label" name="recordar">Recordar Inicio de Sesión</input>
                                        </label> 
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Enviar"></input>
                                </form>
                            </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
            
        </div>
    

            
    </body>
</html>
<!DOCTYPE html>
<html>

    <head>
        <title>side</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
    </head>
    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Bienvenid@ <?php echo $_SESSION["Usuario"]?></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="../admin/usuarios.php" class="nav-link link-dark" aria-current="page">
                <i class="bi bi-people me-2"></i>
                Usuarios
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                <i class="bi bi-people me-2"></i>
                Proveedores
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                <i class="bi bi-shop me-2"></i>
                Productos
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                <i class="bi bi-calendar-week-fill me-2"></i>
                Inventario
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                <i class="bi bi-box-arrow-left me-2"></i>
                Cerrar Sesión
                </a>
            </li>
            </ul>
            <hr>
    </div>
</html>
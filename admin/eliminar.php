<?php
include '../controller/conexion.php';
$conexion = new Conexion();
$con = $conexion->conectarDB();
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $resulset = $con->query($sql);
    $con->close();
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin de Usuarios </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <?php
        include '../nav.php';
    ?>
    <div class="row">
        <div class="col">
            <?php
                include '../sidebar2.php';
            ?>
            <div class="col">
            <div class="container my-3">
            <?php
                include '../controller/conexion.php';
                $conexion = new Conexion();
                $con = $conexion->conectarDB();
                $sql = "SELECT * FROM  USUARIOS";
                $resulset = $con->query($sql);   
            ?>
            <div class="text-center">
                <h1>Usuarios Registrados</h1>
            </div>
            <table class="table border" id="destino">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">Nombre</th>
                        <th class="text-center" scope="col">Apellido</th>
                        <th class="text-center" scope="col">Telefono</th>
                        <th class="text-center" scope="col">Direcciòn</th>
                        <th class="text-center" scope="col">E-mail</th>
                    </tr>
                </thead>    
                <tbody>
                    <div class="row">
                            <?php
                                if($resulset->num_rows>0){
                                    while($row= $resulset->fetch_assoc()){   
                            ?>
                            <tr>
                            <td class="text-center"><?php echo $row["id"];?></td>                    
                            <td class="text-center"><?php echo $row["nombre"];?></td>
                            <td class="text-center"><?php echo $row["apellido"];?></td>
                            <td class="text-center"><?php echo $row["telefono"];?></td>
                            <td class="text-center"><?php echo $row["direccion"];?></td>
                            <td class="text-center"><?php echo $row["email"];?></td><td><button class="btn btn-dark" onclick='eliminarProducto(this.value)'> Eliminar</button></td></tr>
                            <?php
                                }
                                }
                            ?>
                    </div>
                </tbody>
            </table>
        </div>
   </div> 
</div>
 
        
</body>

<script>
        function eliminarProducto(id){
                if(confirm("Desea eliminar el registro?")){
                const xhttp = new XMLHttpRequest;
                    xhttp.onload = function(){
                        document.getElementById("destino").innerHTML = this.responseText;
                    alert('Registro eliminado');
                    };
                    xhttp.open("GET", "../admin/eliminar.php?"+id);
                    xhttp.send();
            }
        }
         function regresar(){
          window.history.back();      
            }      

    </script>

</html>
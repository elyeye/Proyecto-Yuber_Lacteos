<?php
    session_start();
    class Login{
        private $email;
        private $password;

        function inicio(){
            $email = $_POST["email"];
            include '../config/seguridad.php';
            $encriptar = new Seguridad();
            $password = $encriptar->encriptarP($_POST["password"]);
            include 'conexion.php';
            $conexion = new Conexion();
            $con = $conexion->conectarDB();
            $sql ="SELECT * FROM USUARIOS WHERE email='".$email."' AND password='".$password ."';";
            $resultset = $con->query($sql);
            if($resultset->num_rows >0){
                while($fila= $resultset->fetch_assoc()){
                    $_SESSION["Usuario"]=$fila["nombre"];
                    header('location: ../user/index-usuario.php');
                }
            }else{
                $_SESSION["Error"]="Por favor verifique sus credenciales de acceso";
                header('location: ../user/registro.php');
            }
            $con->close();
        }
    }
    $init = new Login();
    $init->inicio();
?>
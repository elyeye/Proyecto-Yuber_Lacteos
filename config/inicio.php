<?php
    session_start();
    class Configuracion{
        private $servidor;
        private $user;
        private $password;
        private $status=0;
        function conexion(){
            $servidor="localhost";
            $user="root";
            $password="";
            $con = new mysqli($servidor, $user, $password);

            /*if($con->connect_error){
                $_SESSION["ErrorDB"]="No ha sido posible  la conexion con el sistema";
                header('location: config.php');
           }else{
                $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
                header('location: config.php');
            }*/
            return $con;
        }

        function conectarDB(){
            $servidor="localhost";
            $user="root";
            $password="";
            $database="LACTEOS";
            $con = new mysqli($servidor, $user, $password, $database);
            if($con->connect_error){
                $_SESSION["ErrorDB"]="No ha sido posible establecer conexion con la base de datos";
                header('location: config.php');
            }else{
                $status=1;
            }
            return $con;
        }
        function crearDB(){
            $con=$this->conexion();
            $sql = "CREATE DATABASE LACTEOS;";
            if($con->query($sql) ===TRUE){
                $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
                header('location: config.php');
            }else{
                $_SESSION["ErrorDB"]="Error creando la base de datos";
        
                header('location: config.php');
            }
            $con->close();
        }

        function crearTablas(){
           $con=$this->conectarDB();
            $sql = "CREATE TABLE ADMINISTRADOR(
                id INT(6) AUTO_INCREMENT PRIMARY KEY,
                nombre varchar(50) NOT NULL,
                email varchar (50) NOT NULL,
                password varchar(25) NOT NULL,
                fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
                UPDATE CURRENT_TIMESTAMP
            );";
            if($con->query($sql)===TRUE){
                $status=1;
            }else{
                $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
               
                header('location: config.php');
            }
            $con->close();
        }
        //usuario
        function crearTusuario(){
            $con=$this->conectarDB();
             $sql = "CREATE TABLE USUARIOS(
                 id INT(6) AUTO_INCREMENT PRIMARY KEY,
                 nombre varchar(50) NOT NULL,
                 apellido varchar(50) NOT NULL,
                 telefono varchar(50) NOT NULL,
                 direccion varchar(50) NOT NULL,
                 email varchar (50) NOT NULL,
                 password varchar(25) NOT NULL,
                 fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
                 UPDATE CURRENT_TIMESTAMP
             );";
             if($con->query($sql)===TRUE){
                 $status=1;
             }else{
                 $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
                
                 header('location: config.php');
             }
             $con->close();
         }

         function crearTproductos(){
            $con=$this->conectarDB();
             $sql = "CREATE TABLE PRODUCTOS(
                 id INT(6) AUTO_INCREMENT PRIMARY KEY,
                 nombre varchar(50) NOT NULL,
                 categoria varchar (50) NOT NULL,
                 precio varchar(25) NOT NULL,
                 descripcion varchar (250) NOT NULL,
                 fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
                 UPDATE CURRENT_TIMESTAMP
             );";
             if($con->query($sql)===TRUE){
                 $status=1;
             }else{
                 $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
                
                 header('location: config.php');
             }
             $con->close();
         }
         function crearTproveedores(){
            $con=$this->conectarDB();
             $sql = "CREATE TABLE PROVEEDORES(
                 id INT(6) AUTO_INCREMENT PRIMARY KEY,
                 nombre varchar(50) NOT NULL,
                 correo varchar(50) NOT NULL,
                 telefono varchar(50) NOT NULL,
                 direccion varchar(50) NOT NULL,
                 fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
                 UPDATE CURRENT_TIMESTAMP
             );";
             if($con->query($sql)===TRUE){
                 $status=1;
             }else{
                 $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
                
                 header('location: config.php');
             }
             $con->close();
         }
         function crearTcargo(){
            $con=$this->conectarDB();
             $sql = "CREATE TABLE CARGO(
                 id INT(6) AUTO_INCREMENT PRIMARY KEY,
                 nombre varchar(50) NOT NULL,
                 estado varchar(50) NOT NULL,
                 fecha_reg TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
                 UPDATE CURRENT_TIMESTAMP
             );";
             if($con->query($sql)===TRUE){
                 $status=1;
             }else{
                 $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos";
                
                 header('location: config.php');
             }
             $con->close();
         }


        function crearAdministrador(){
            $con=$this->conectarDB();
            include 'seguridad.php';
            $limpieza = new Seguridad();
            $password = $limpieza->encriptarP($_POST["password"]);
            $sql = "INSERT INTO ADMINISTRADOR (nombre, email,password)
            VALUES('".$_POST["nombre"]."', '".$_POST["email"]."', '".$password."');";

            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha creado el usuario exitosamente";
                header('location: config.php');
                
            }else{
                $_SESSION["ErrorDB"]="Error creando el usuario"
                .$con->error;
                header('location: config.php');  
            }
            $con->close();
        }
        //crear usuarios
        function crearUsuarios(){
            $con=$this->conectarDB();
            include 'seguridad.php';
            $limpieza = new Seguridad();
            $password = $limpieza->encriptarP($_POST["password"]);
            $sql = "INSERT INTO USUARIOS (nombre,apellido,telefono,direccion, email,password)
            VALUES('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["telefono"]."','".$_POST["direccion"]."', '".$_POST["email"]."', '".$password."');";

            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha creado el usuario exitosamente";
                header('location: ../user/registro.php');
                
            }else{
                $_SESSION["ErrorDB"]="Error creando el usuario"
                .$con->error;
                header('location: ../user/registro.php');  
            }
            $con->close();
        }

    }
    $conexion = new Configuracion();
    //Linea para crear la base de datos del proyecto
    //$conexion->conexion();
    //$conexion->crearDB();
    //Crear usuario en base de datos
    $conexion->crearTproductos();
    //$conexion->crearTusuario();
    //$conexion->conectarDB();
    //$conexion->crearUsuarios();

?>
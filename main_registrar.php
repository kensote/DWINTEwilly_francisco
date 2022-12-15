
<?php
include("conexion.php");

$conexion = conectar();

$usuario = $_POST["rut"];
$clave = $_POST["nombre"];
$usuario = $_POST["apellido"];
$clave = $_POST["origen"];
$usuario = $_POST["nivel"];

$insertar = "INSERT INTO productos(nombre, precio, img) VALUES ('$nombre','$precio','$img')";
            $res= mysqli_query($conexion,$insertar);
            if($res){
                echo "<h1>Exitosamaente</h1>";
            }
            else{
                echo "<h1>Error</h1> ";
            }

mysqli_free_result($resultado);
mysqli_close($conexion);
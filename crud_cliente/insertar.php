<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellidop=$_POST['apellido-p'];
$apellidom=$_POST['apellido-m'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$nacimiento=$_POST['nacimiento'];

$sql="INSERT INTO cliente(`nombre`, `apellido_pat`, `apellido_mat`, `direccion`, `correo`, `telefono`, `fech_nac`) VALUES('$nombre','$apellidop','$apellidom','$direccion','$correo','$telefono','$nacimiento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>
<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido-p'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


$sql="INSERT INTO empleado(`nombre`, `apellido_pat`, `direccion`, `correo`, `telefono`) VALUES('$nombre','$apellido','$direccion','$correo','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>
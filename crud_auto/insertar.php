<?php
include("conexion.php");
$con=conectar();

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$placa=$_POST['placa'];
$propietario=$_POST['propietario'];
$año=$_POST['año'];
$color=$_POST['color'];
$costo=$_POST['costo'];

$sql="INSERT INTO autos(`marca`, `modelo`, `placa`, `propietario`, `año`, `color`, `costo`) VALUES('$marca','$modelo','$placa','$propietario','$año','$color','$costo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>
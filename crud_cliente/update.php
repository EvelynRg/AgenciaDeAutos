<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellido-p'];
$apellidom=$_POST['apellido-m'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$nacimiento=$_POST['nacimiento'];

$sql="UPDATE cliente SET nombre='$nombre',apellido_pat='$apellidop',apellido_mat='$apellidom',direccion='$direccion',correo='$correo',telefono='$telefono',fech_nac='$nacimiento' WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];

$sql="UPDATE empleado SET  nombre='$nombre',apellido_pat='$apellido',telefono='$telefono',direccion='$direccion' WHERE idEmpleado='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else {
        echo "hay un error";
    }
?>
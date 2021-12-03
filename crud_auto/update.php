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

$sql="UPDATE autos SET  marca='$marca',modelo='$modelo',placa='$placa',propietario='$propietario',año='$año',color='$color',costo='$costo' WHERE placa='$placa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
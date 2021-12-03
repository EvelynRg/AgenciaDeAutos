<?php
include("conexion.php");
$con=conectar();

$empleado=$_POST['empleado'];
$productos=$_POST['productos'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];
$factura=$_POST['factura'];
$modo=$_POST['modo_pago'];
$cliente=$_POST['idCliente'];

$sql="INSERT INTO ventas(`idEmpleado`, `productos`, `fecha`, `total`, `factura`, `modo_pago`, `idCliente`) VALUES('$empleado','$productos','$fecha','$total','$factura','$modo','$cliente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "Hay un problema";
}
?>
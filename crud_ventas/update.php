<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$empleado=$_POST['empleado'];
$productos=$_POST['productos'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];
$factura=$_POST['factura'];
$modo=$_POST['modo_pago'];
$cliente=$_POST['idCliente'];

$sql="UPDATE ventas SET  idEmpleado='$empleado',productos='$productos',fecha='$fecha',total='$total',factura='$factura',modo_pago='$modo',idCliente='$cliente' WHERE num_venta='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
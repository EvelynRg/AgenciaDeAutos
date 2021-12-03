<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM ventas WHERE num_venta='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" class="form-control mb-3" name="id" placeholder="ID" value="<?php echo $row['num_venta']  ?>">
            <input type="text" class="form-control mb-3" name="empleado" placeholder="ID del empleado" value="<?php echo $row['idEmpleado']  ?>">
            <input type="number" class="form-control mb-3" name="productos" placeholder="Numero de productos" value="<?php echo $row['productos']  ?>">
            <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">
            <input type="text" class="form-control mb-3" name="total" placeholder="Total" value="<?php echo $row['total']  ?>">
            <input type="text" class="form-control mb-3" name="factura" placeholder="Factura" value="<?php echo $row['factura']  ?>">
            <input type="text" class="form-control mb-3" name="modo_pago" placeholder="Modo de pago" value="<?php echo $row['modo_pago']  ?>">
            <input type="text" class="form-control mb-3" name="idCliente" placeholder="ID del cliente" value="<?php echo $row['idCliente']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>
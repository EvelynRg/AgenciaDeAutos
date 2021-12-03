<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE idCliente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                                
                                <input type="hidden" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['idCliente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Marca" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido-p" placeholder="Modelo" value="<?php echo $row['apellido_pat']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido-m" placeholder="Placa" value="<?php echo $row['apellido_mat']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Propietario" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="Año" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Color" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="nacimiento" placeholder="Costo" value="<?php echo $row['fech_nac']  ?>">
                                
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM ventas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA EMPLEADO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                    
                                    <input type="text" class="form-control mb-3" name="empleado" placeholder="ID del empleado">
                                    <input type="number" class="form-control mb-3" name="productos" placeholder="Numero de productos">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="Total">
                                    <input type="text" class="form-control mb-3" name="factura" placeholder="Factura">
                                    <input type="text" class="form-control mb-3" name="modo_pago" placeholder="Modo de pago">
                                    <input type="text" class="form-control mb-3" name="idCliente" placeholder="ID del cliente">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idEmpleado</th>
                                        <th>Productos</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
                                        <th>Factura</th>
                                        <th>Modo de pago</th>
                                        <th>idCliente</th>
                                        <th>Número de venta</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idEmpleado']?></th>
                                                <th><?php  echo $row['productos']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['total']?></th>
                                                <th><?php  echo $row['factura']?></th> 
                                                <th><?php  echo $row['modo_pago']?></th> 
                                                <th><?php  echo $row['idCliente']?></th> 
                                                <th><?php  echo $row['num_venta']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['num_venta'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['num_venta'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
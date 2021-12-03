<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM autos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA AUTO</title>
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

                                    <input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo">
                                    <input type="text" class="form-control mb-3" name="placa" placeholder="Placa">
                                    <input type="text" class="form-control mb-3" name="propietario" placeholder="Propietario">
                                    <input type="text" class="form-control mb-3" name="año" placeholder="Año">
                                    <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                                    <input type="text" class="form-control mb-3" name="costo" placeholder="Costo">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-success table-striped">
                                    <tr>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Placa</th>
                                        <th>Propietario</th>
                                        <th>Año</th>
                                        <th>Color</th>
                                        <th>Costo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['modelo']?></th>
                                                <th><?php  echo $row['placa']?></th>
                                                <th><?php  echo $row['propietario']?></th>
                                                <th><?php  echo $row['año']?></th>
                                                <th><?php  echo $row['color']?></th> 
                                                <th><?php  echo $row['costo']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['placa'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['placa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
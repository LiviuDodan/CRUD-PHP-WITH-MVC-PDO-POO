<!doctype html>
<html lang="en">
    <head>
        <title>Clientes</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../../recursos/icon.png">
        <!-- Bootstrap CSS -->
        <link href="../../recursos/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <header id="logo">
        <img src="../../recursos/logo.png" width="300px">
    </header>
    
    <nav>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active">CLIENTES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../fichasTecnicas/index.php">FICHAS TÉCNICAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../mecanicos/index.php">MECÁNICOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vehiculos/index.php">VEHÍCULOS</a>
            </li>
        </ul>
    </nav>

    <a href="../../controllers/clientes/createController.php" class="btn btn-primary">Nuevo</a><br>
    <table border="3" style="text-align: center;" class="table table-striped">
            <tr style="color:#05b005; background-color:#d1d1d1;">
                <th colspan="4">CLIENTES </th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Ficha Técnica Cliente</th>
                <th>ACCIONES</th>
            </tr>
        <?php 
            foreach ($clientes as $cliente) :
        ?>
            <tr>
                <td><?php echo htmlspecialchars($cliente->nombre);     ?></td>
                <td><?php echo htmlspecialchars($cliente->dni);     ?></td>
                <?php 
                    foreach ($fichasTecnicas as $fichaTecnica) :
                        if ($cliente->fichaTecnicaCliente==$fichaTecnica->idFichaTecnica)
                            echo "<td>$fichaTecnica->marca $fichaTecnica->modelo</td>";
                    endforeach;
                ?>
                <td>
                    <a href="../../controllers/clientes/showController.php?id=<?php echo $cliente->idCliente; ?>"><img style="margin-right:10px;" src="../../recursos/show.png" width="30px" height="30px"></a>
                    <a href="../../controllers/clientes/updateController.php?id=<?php echo $cliente->idCliente; ?>"><img style="margin-right:10px;" src="../../recursos/edit.png" width="30px" height="30px"></a>
                    <a href="../../controllers/clientes/deleteController.php?id=<?php echo $cliente->idCliente; ?>"><img src="../../recursos/delete.png" width="30px" height="30px"></a>
                </td>
            </tr>
        <?php 
            endforeach; 
        ?>
    </table><br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
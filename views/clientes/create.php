<!doctype html>
<html lang="en">
  <head>
    <title>Create</title>
    <link rel="icon" href="../../recursos/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="margin:1em; width:30%;">
    <div class="form-group">
        <form action="" method="post">
            <label for="nombre">Nombre del cliente:</label>
            <input type="text" class="form-control" name="txtNombre" id="nombre" value="<?php echo $nombre; ?>" maxlength="40"><br>

            <label for="dni">DNI:</label>
            <input type="text" class="form-control" name="txtDni" id="dni" value="<?php echo $dni; ?>" maxlength="9"><br>

            <label for="fichaTecnica">Ficha Tecnica del coche</label>
            <select class="form-control" name="fichaTecnica">
            <?php
              if ($fichasTecnicas==null){
                echo '<option value="0">No hay datos en la tabla fichas tecnicas</option>';
              }
              foreach($fichasTecnicas as $fichaTecnica) :
            ?>
            <option value="<?php echo $fichaTecnica->idFichaTecnica?>"><?php echo "$fichaTecnica->marca - $fichaTecnica->modelo";?></option>
            <?php
              endforeach;
            ?> 
            </select><br><br>
            <a href="../../views/clientes/index.php" class="btn btn-primary">Volver</a>
            <input type="submit" name="crear" value="Insertar" class="btn btn-success"><br><br>
            <?php echo $mensaje; ?>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

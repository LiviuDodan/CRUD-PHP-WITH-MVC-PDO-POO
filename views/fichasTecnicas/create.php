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
    <body style="margin:1em;">
    <div class="form-group">
        <form action="" method="post">
            <div style="width:30%;">
                <label for="tipoCoche">Tipo:</label><br>
                <div style="margin-left:1em;">
                    <input type="radio" name="tipo" id="tipoCoche" value="coche" checked>
                    <label for="tipoCoche">Coche</label><br>
                    <input type="radio" name="tipo" id="tipoMoto" value="moto">
                    <label for="tipoMoto">Moto</label><br>
                    <input type="radio" name="tipo" id="tipoFurgoneta" value="furgoneta">
                    <label for="tipoFurgoneta">Furgoneta</label><br>
                </div>
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="txtMarca" id="marca" value="<?php echo $marca; ?>" maxlength="20"><br>

                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="txtModelo" id="modelo" value="<?php echo $modelo; ?>" maxlength="30"><br>

                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" name="txtMatricula" id="matricula" value="<?php echo $matricula; ?>" maxlength="7"><br>

                <label for="anyo">Año:</label>
                <input type="number" class="form-control" name="txtAnyo" id="anyo" value="<?php echo $anyo; ?>" max="9999"><br>
            </div>
            <a href="../../views/fichasTecnicas/index.php" class="btn btn-primary">Volver</a>
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

    
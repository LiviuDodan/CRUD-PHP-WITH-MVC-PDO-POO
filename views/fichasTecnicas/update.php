<!doctype html>
<html lang="en">
    <head>
        <title>Update</title>
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
                <label>Tipo:</label><br>
				<div style="margin-left:1em;">
				<?php
					switch($fichaTecnica->tipo){
						case "coche":
							echo '<input type="radio" name="tipo" id="tipoCoche" value="coche" checked><label for="tipoCoche">Coche</label><br><input type="radio" name="tipo" id="tipoMoto" value="moto"><label for="tipoMoto">Moto</label><br><input type="radio" name="tipo" id="tipoFurgoneta" value="furgoneta"><label for="tipoFurgoneta">Furgoneta</label><br>';
						break;
						case "moto":
							echo '<input type="radio" name="tipo" id="tipoCoche" value="coche"><label for="tipoCoche">Coche</label><br><input type="radio" name="tipo" id="tipoMoto" value="moto" checked><label for="tipoMoto">Moto</label><br><input type="radio" name="tipo" id="tipoFurgoneta" value="furgoneta"><label for="tipoFurgoneta">Furgoneta</label><br>';
						break;
						case "furgoneta":
							echo '<input type="radio" name="tipo" id="tipoCoche" value="coche"><label for="tipoCoche">Coche</label><br><input type="radio" name="tipo" id="tipoMoto" value="moto"><label for="tipoMoto">Moto</label><br><input type="radio" name="tipo" id="tipoFurgoneta" value="furgoneta" checked><label for="tipoFurgoneta">Furgoneta</label><br>';
						break;
					}
				?>
                </div>
				<label for="marca">Marca:</label>
				<input type="text" class="form-control" name="txtMarca" id="marca" value="<?php echo $fichaTecnica->marca;; ?>"><br>

				<label for="modelo">Modelo:</label>
				<input type="text" class="form-control" name="txtModelo" id="modelo" value="<?php echo $fichaTecnica->modelo; ?>"><br>

				<label for="matricula">Matricula:</label>
				<input type="text" class="form-control" name="txtMatricula" id="matricula" value="<?php echo $fichaTecnica->matricula; ?>"><br>

				<label for="anyo">Año:</label>
				<input type="number" class="form-control" name="txtAnyo" id="anyo" value="<?php echo $fichaTecnica->anyo; ?>"><br>
			</div>
			<a href="../../views/fichasTecnicas/index.php" class="btn btn-primary">Volver</a>
			<input type="submit" name="modificar" value="Modificar" class="btn btn-warning">
		</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

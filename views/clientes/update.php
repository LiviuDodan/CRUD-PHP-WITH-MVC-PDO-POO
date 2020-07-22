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
	<body>
	<div class="form-group" style="width:30%; margin:1em;">
		<form action="" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="txtNombre" id="nombre" value="<?php echo $cliente->nombre; ?>" maxlength="40"><br>

		<label for="dni">DNI:</label>
		<input type="text" class="form-control" name="txtDni" id="dni" value="<?php echo $cliente->dni; ?>" maxlength="9"><br>

		<label for=fichaTecnica>Ficha Tecnica del coche</label>
		<select class="form-control" name="fichaTecnica">
		<?php
			foreach($fichasTecnicas as $fichaTecnica) :
		?>
		<option value="<?php echo $fichaTecnica->idFichaTecnica?>" <?php echo ($fichaTecnica->idFichaTecnica == $cliente->fichaTecnicaCliente) ? "selected" : "" ; ?>><?php echo "$fichaTecnica->marca - $fichaTecnica->modelo";?></option>
		<?php
			endforeach;
		?> 
		</select><br>
		<a href="../../views/clientes/index.php" class="btn btn-primary">Volver</a>
		<input type="submit" class="btn btn-warning" name="modificar" value="Modificar">
		</form>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
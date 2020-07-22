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
		<label for="nombreCliente">Nombre del cliente</label>
            <select name="nombreCliente" class="form-control">
            <?php
              foreach($clientes as $cliente) :
            ?>
            <option value="<?php echo $cliente->nombre?>" <?php echo ($cliente->nombre == $mecanico->nombreCliente) ? "selected" : "" ; ?>><?php echo $cliente->nombre;?></option>
            <?php
              endforeach;
            ?> 
            </select><br>

            <label for="nombre">Nombre del mecánico:</label>
            <input type="text" class="form-control" name="txtNombreMecanico" id="nombre" value="<?php echo $mecanico->nombreMecanico; ?>" maxlength="40"><br>

            
		<a href="../../views/mecanicos/index.php" class="btn btn-primary">Volver</a>
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
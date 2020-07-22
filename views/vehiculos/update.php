<!doctype html>
<html lang="en">
	<head>
		<title>Update</title>
		<link rel="icon" href="../../recursos/icon.png">
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script>
			function onSelectOption() {
				document.getElementById("inputFichaTecnica").value=event.target.value;
			}
		</script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	<div class="form-group" style="width:30%; margin:1em;">
        <form action="" method="post">
          <label for="propietario">Nombre del propietario y su ficha técnica:</label>
            <select name="propietario" class="form-control" onchange="onSelectOption()">
            <?php
                foreach($clientes as $cliente) :
                  foreach($fichasTecnicas as $fichaTecnica):
                    if($fichaTecnica->idFichaTecnica==$cliente->fichaTecnicaCliente){
					  echo '<option value="',$cliente->fichaTecnicaCliente.'-'.$cliente->nombre,'" ',($cliente->nombre == $vehiculo->propietario) ? "selected" : "",'>',$cliente->nombre,' - ',$fichaTecnica->marca,' ',$fichaTecnica->modelo,'</option>';
					}
                  endforeach;
                endforeach;
            ?> 
            </select>
            <input id="inputFichaTecnica" hidden type="text" name="fichaTecnicaPropietario" value="<?php echo $vehiculo->fichaTecnica.'-'.$vehiculo->propietario; ?>" readonly="true">

            <label id="diagnosis" style="margin-top:30px;">Diagnosis</label><br>
            <textarea id="diagnosis" class="form-control" name="txtDiagnosis" rows="4" cols="50"><?php echo $vehiculo->diagnosis ?></textarea><br>
            
            <a href="../../views/vehiculos/index.php" style="margin-top:30px; margin-bottom:30px;" class="btn btn-primary">Volver</a>
            <input type="submit" name="modificar" style="margin-top:30px; margin-bottom:30px;" value="Modificar" class="btn btn-warning"><br>
            
        </form>
    </div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
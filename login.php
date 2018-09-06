<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="assets/css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Cable Unet</title>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="validar.php" class="formulario" name="formulario_registro" method="post">
				<div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">Correo:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="assets/js/formulario.js"></script>
</body>
</html>

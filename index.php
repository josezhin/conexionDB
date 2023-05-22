<!DOCTYPE html>
<html>
<head>
	<title>Formulario de inicio de sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 col-sm-8">
			<h2 class="text-center my-4">Inicio de sesión</h2>
			<form method="post">
				<div class="form-group">
					<label for="username">Usuario:</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-group">
					<label for="password">Contraseña:</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="register">Iniciar sesión</button>
			</form>
		</div>
	</div>
</div>
<?php include("registrar.php") ?>
</body>
</html>

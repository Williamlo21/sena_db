<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sena_db</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="container ">
			<div class="row">
				<div class="col-2 col-sm-6">
					<form action="<?= base_url ?>aprendiz/verAprendices" method="post">
						<button type="submit" class="btn btn-primary">Inicio</button>
					</form>
				</div>
				<div class="col-2 col-sm-6">
					<form action="<?= base_url ?>aprendiz/crearAprendiz" method="post">
						<button type="submit" class="btn btn-primary">Crear Aprendiz</button>
					</form>
				</div>
			</div>
		</div>
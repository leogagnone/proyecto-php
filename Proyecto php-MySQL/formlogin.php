<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Registro Usuarios </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>

		<?php
			include 'header.php';
		?>
	<div class="container-fluid bg-light pt-5 ">


		<div class="container mb-5 ">
			<h2 class="text-center">Ingrese al sitio</h2>
		</div>

		<div class='container w-50 m-auto'>

			<div class="form">

            <form action="login.php" class="border-bottom" method='POST'>

    			<div class="form-group">
                    <input type="text" placeholder="usuario" class="form-control" name="usuario" required>
				</div>

				<div class="form-group">
                    <input type="password" placeholder="password" class="form-control" name="clave" required maxlength='15'>
				</div>
                    <button type="submit" class="btn btn-primary w-100">login</button>

			</form>

			<div class="alert alert-info mt-3">
				<p class='lead text-center mb-0'>
					Si queres ser parte, <a href="contacto.php">registrarte </a>
				</p>
			</div>

			</div>

		</div>

	</div>

	<!-- footer  -->

		<?php
			include 'footer.php';
		?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>

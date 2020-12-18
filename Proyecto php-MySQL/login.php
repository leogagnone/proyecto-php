<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Panel Usuarios PHP </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
        <?php
			include 'header.php';
		?>
	<div class="container-fluid bg-light">

        <div class="container pt-5 ">
            <h2 class="">Login</h2>
        </div>

		<div class="container my-5 ">

		<?php

		$usuario=$_REQUEST['usuario'];
		$clave=$_REQUEST['clave'];

		
		include 'conexion.php';

		
		$query3="SELECT id,nombre,email FROM clientes WHERE usuario='$usuario' and clave='$clave'";

		$validarUsuario = mysqli_query($conexion,$query3) or die('error de consulta MySQL');

		$cant = mysqli_num_rows($validarUsuario);
		

		if( $cant == 0){

			echo "<div class='row alert alert-warning'>";
				echo "<div class='col-2'>";
					echo "<span class='h1'>👻</span>";
				echo "</div>";
				echo "<div class='col'>";
				echo "<div class=''>";
					echo "<p class='lead text-body'>El usuario no coincide con nustros registros. <a href='formlogin.php'> volver</a></p>";
					echo "<a class='btn btn-warning' href='contacto.php'>Para acceder, registrate </a>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			//redireccionar

		}else{

            //procesamos la respuesta
            $dataUser = mysqli_fetch_assoc($validarUsuario);
            //echo count($dataUser);

            //dar de alta las sesiones
            session_start();
            $_SESSION['id']=$dataUser['id'];
            $_SESSION['nombre']=$dataUser['nombre'];
            $_SESSION['email']=$dataUser['email'];
            $_SESSION['user']=$usuario;

			echo "<div class='alert alert-success text-center'>";
            echo "<h1 class=''>Hola ".$dataUser['nombre']." 😃 </h1>";
            // echo "<a class='btn btn-info w-25' href='formlogin.php'>ingresar al sitio</a>";
            echo "<p class='lead'>ingresando al sitio...</p>";
			echo "</div>";

            sleep(3);
            header("Location:mostrarUsuarios.php");
		}


		

		?>


		</div>


		<?php
			include 'footer.php';
		?>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <title>PHP - MySQL</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <body>

    <?php
      include 'header.php';
      session_start();


    ?>


    <main class='container'>
    <h1>Mostrar Usuarios</h1>
    <?php


if(isset($_SESSION['nombre'])){

  ?>

  <div class="container ">

      <div class="border-bottom text-right my-3">
        <span class="" href="#" title='<?php echo $_SESSION['nombre'].' ('.$_SESSION['email'].')' ?>'>
          <?php

          echo "Hola, ".$_SESSION['user'];
          ?>

        </span>
        <span class="">
          <a href="salir.php">(salir)</a>
        </span>
      </div>

  </div>


      <?php

     
      include "conexion.php";

      
      $query1="SELECT nombre,apellido,ocupacion FROM usuarios";
      $consulta=mysqli_query($conexion,$query1);

     
      $cantidad = mysqli_num_rows($consulta);
      if($cantidad==0){
        echo "No hay resultados 😫.";
      }else{

        echo "Cantidad de resultados: ".$cantidad;

        echo "<section class='row'>";

        for ($i=0; $i < $cantidad ; $i++) {

          $datos = mysqli_fetch_array($consulta);

          echo "<article class='col'>";
          echo '<div class="card">
            <div class="card-body">
              <h4 class="h5 card-title">'.$datos[0].' '.$datos[1].'</h4>
              <p class="card-text">'.$datos[2].'</p>
            </div>
          </div></article>';
        }
        echo "</section>";
      }


      
      mysqli_close($conexion);
    }else{
      echo "<div class='row alert alert-warning'>";
				echo "<div class='col-2'>";
					echo "<span class='h1'>👻</span>";
				echo "</div>";
				echo "<div class='col'>";
				echo "<div class=''>";
					echo "<p class='lead text-body'>Para ver el contenido, debes ser usuario registrado</p>";
					echo "<a class='btn btn-warning' href='formlogin.php'>Log In</a>";
					echo "<a class='btn btn-warning' href='Contacto.php'>Registrarse</a>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
    }


    ?>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <title> Enviar mail </title>
        <!--Bootstrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
	</head>
	<body>
		<div id="contenedor">
			<div class="mb-5">
				<h1>Envío de mails</h1>
				<h3 class="lead"> Protocolo o método POST</h3>
			</div>
			<div class="form">

			<div class="contenido">

                <h2>Datos enviados</h2>

                <?php
               
                $contarDatos = count($_POST);
                $contarDatos = count($_REQUEST);
                echo $contarDatos;

                
                foreach ($_REQUEST as $datos) {
                        echo $datos;
                }

                
                $nombre = $_REQUEST['nombre'];

                if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = $_REQUEST['email'];
                }
                $localidad = $_REQUEST['localidad'];
                $comentario = $_REQUEST['comentario'];
                $fecha = date("d/m/Y h:m");

                
                if($_REQUEST['nombre'] == "" or $email == undefined or $_REQUEST['localidad']==""){
                    echo "No se puede realizar el envio, porque faltan datos";
                }else{

                
                $destino = 'leogagnone@gmail.com';
                $asunto = "Nuevo comentario desde el sitio";
                $cuerpoMensaje = "<h2>Nuevo Mensaje</h2><hr><p>Nombre: ".$nombre."</p><p>Email: ".$email."</p><p>Localidad".$localidad."</p><p>".$comentario."</p><p>Fecha de envío: ".$fecha."</p>";
               
                $envio = mail($destino,$asunto,$cuerpoMensaje);

                
                if($envio === true) {
                    echo "<h2>Gracias ".$nombre." por contacarnos </h2><p>Le reenviaremos los datos a su email</p>";
                }else{
                    echo "<p>hubo un error en el envio, por favor escribinos a <a href='mailto:".$destino."'>".$destino."</a>";
                }
                
                $mensajeGracias = 'Hola '.$nombre." gracias por usar el formulario del sitio. <br> le adjuntamos una copia de su mensaje: ".$cuerpoMensaje;

                $envio2 = mail($email,'Gracias por escribirnos',$mensajeGracias);

            }

                ?>

            </div>




			</div>

		</div>
		<div class="text-center">
            <?php
			include 'footer.php';
		    ?>
			</div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	</body>
</html>

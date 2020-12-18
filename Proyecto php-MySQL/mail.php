<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body>
    <h1 class="titulo">Contactanos</h1>
    <div class='container w-50 m-auto'>


        <div class="form">

        <form action="enviar.php" method='POST'>

            <div class="form-group">
            <label for="" class="text-white">Nombre *(Campo requerido)</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
            </div>

            <div class="form-group">
              <label for="" class="text-white">Email *(Campo requerido)</label>
              <input type="text"
                class="form-control" name="email" id="email" placeholder="Ingrese su mail" required>
            </div>
            <div class="form-group">
                <label for="" class="text-white">Localidad *(Campo requerido)</label>
                <input type="text"class="form-control" name="localidad" id="localidad" placeholder="Ingrese su localidad" required>
              </div>
               <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-white">Escriba su comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba su comentario" required></textarea>
                </div>
            
            <button type="submit" class="btn btn-info">Enviar</button>
            

        </form>
    </div>
        
</body>
</html>
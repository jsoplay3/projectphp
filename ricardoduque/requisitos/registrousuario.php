<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
   <body>
         <div class="container">
          <?php 
             include("menu.php")
          ?>
          <form action="procesarusuario.php" method="post">
            <label>nombreusuario</label>
            <h2>Registro usuario</h2>
            <label class="form-label">Nombre usuario</label>
            <input type="text" class="form-control" name="nombreUsuarioSolicitado"/>
            <label class="form-label">Mail usuario</label>
            <input type="mail" class="form-control" name="mailUsuarioSolicitado"/>
            <label class="form-label">Nro de Documento </label>
            <input type="number" class="form-control" name="documentoUsuarioSolicitado"/>
            <label class="form-label">Contraseña de usuario</label>
            <input type="password" class="form-control" name="passwordUsuarioSolicitado"/>
            <input class="btn btn-success" type="submit" value="registrar"/>
          </form>
        </div>
   </body>
</html>
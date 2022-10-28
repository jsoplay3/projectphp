<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link href="styles.css" type="text" rel="stylesheet"/>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<script src="validaciones.js">
    </script>
<body>
<div class="container">
    <?php
        include("menu.php");
    ?>
    <h2>Registro de usuarios</h2>
    <form action="procesaUsuario.php" method="post" onsubmit="return validaciones()">

        <label class="form-label">Nombre de usuario</label>
        <input class="form-control" type=text name="nombreUsuarioSolicitado" id="nUsuario" >

        <label class="form-label">Mail del usuario</label>
        <input class="form-control" type=mail name="mailUsuarioSolicitado" id="mUsuario">

        <label class="form-label">Nro de documento del usuario</label>
        <input class="form-control" type=number name="documentoUsuarioSolicitado" id="nroDocUsuario">

        <label class="form-label">Contraseña del usuario</label>
        <input class="form-control" type=password name="passwordUsuarioSolicitado" id="contraUsuario">

        <input type=submit value="Regsitar" class="btn btn-outline-success">
    </form>
    </div>
</body>
</html>
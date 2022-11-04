<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Usuarios</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<script src="validar.js"></script>
<body>
    <div class="container"><?php
        include("menu.php");
    ?>
    <H2>REGISTRO DE USUARIOS</H2>
    <form action="procesaUsuario.php" method="post" onsubmit="return validacion()">
        <label class="form-label">Nombre Del Usuario</label>
        <input type="text" name="nombreUsuarioSolicitado" class="form-control" id="nombreUsuarioSolicitado" required>

        <label class="form-label">Mail Del Usuario</label>
        <input type="text" name="mailUsuarioSolicitado" class="form-control" id="mailUsuarioSolicitado" required>

        <label class="form-label">Nro De Documento Del Usuario</label>
        <input type="text" name="documentoUsuarioSolicitado" class="form-control" id="documentoUsuarioSolicitado" required>

        <label class="form-label">Contraseña Del Usuario</label>
        <input type="password" name="passwordUsuarioSolicitado" class="form-control" id="passwordUsuarioSolicitado" required>
        <input type="submit" value="Registrar" class="btn btn-dark">
    </form>
    </div>
</body>
</html>
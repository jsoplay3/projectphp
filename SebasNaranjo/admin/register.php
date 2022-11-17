<?php
    include("autenticaAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Registro beginner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<script src="validar.js"></script>
<body class="text-bg-light p-3 bg-black">
<div class="container"><?php
        include("menuAdmin.php");
    ?>

<div class="container text-center text-bg-primary bg-black"><br>
    <H2 >REGISTRO DE USUARIOS</H2>
    <form action="processUser.php" method="post" onsubmit="return validacion()">
        <label class="form-label">Nombre Del Usuario</label>
        <input type="text" name="userName" class="form-control text-black" id="userName" required><br>
        <label class="form-label">Mail del usuario</label>
        <input type="email" name="userMail" class="form-control text-black" id="userMail" required><br>
        <label class="form-label">Nro De Documento Del Usuario</label>
        <input type="number" name="userDocument" class="form-control text-black" id="userDocument" required><br>
        <label class="form-label">Contraseña Del Usuario</label>
        <input type="password" name="password" class="form-control text-black" id="password" required><br>
        <input type="submit" value="Registrar" class="btn btn-dark">
    </form><br>
    </div>
</body>
</html>
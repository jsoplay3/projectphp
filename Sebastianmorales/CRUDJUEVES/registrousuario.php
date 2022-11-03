<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<script src="validaciones.js"></script>
<body>
<div class="container">
    
<?php
    include("menu.php");

    ?>
    <center><h1>Registro</h1></center>
    <form action="procesausuario.php" method="post" onsubmit="return Validaciones()">
        <label class="form-label">Nombre de usuario</label>
        <input type="text" name="nombreUsuarioSolicitado" id="username" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <label class="form-label">Mail del usuario</label>
        <input type="mail" name="mailUsuarioSolicitado" id="usermail" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <label class="form-label">Nro de documento del usuario</label>
        <input type="number" name="numeroUsuarioSolicitado" id="usernumber" class="form-control"  placeholder="Por favor ingrese sus datos" required/>
        <label class="form-label">Contraseña del usuario</label>
        <input type="password" name="passUsuarioSolicitado" id="userpass" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <input type="submit" value="Registar" class="btn btn-outline-success" class="button" />    
</form>
   </div> 
</body>
</html>
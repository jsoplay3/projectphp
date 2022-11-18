<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogTech</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
    div{
        margin: 5%;
        padding: 1.5em;
    }

    h2{
        margin-top: 5%;
        display: flex;
        justify-content: center;
    }
</style>
<body>
<h2>BIENVENIDO A LOGTECH</h2>
    <div class="container">
    <h3>Iniciar Sesion</h3>
<form action="procesaLogin.php" method="post">
 
<label class="form-label">Mail</label>
<input type="text" name="userNameSolicitado" class="form-control" require/>
<br>
<label class="form-label">Password</label>
<input type="password" name="passwordSolicitado" class="form-control" require/>
<br>
<input type="submit" value="Ingresar" class="btn btn-dark"/>

</form>
    </div>
</body>
</html>
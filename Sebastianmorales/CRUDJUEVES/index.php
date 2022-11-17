<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <?php
   
   ?>
    <center>
            <h1>Inicio de sesion</h1>
        </center>
        <form action="loginprocesa.php" method="post">
            <div class="container" style="width: 70%;">
                <label for="name">Nombre de usuario</label>
                <p><input type="text" name="NameUser" required class="form-control" style="border-color:black;">
                <p> <label for="pass">Password</label>
                <p><input type="text" name="PassUser" required class="form-control" style="border-color:black;"> 
                    <center>
                        <p><input type="submit" value="Ingresar"  class="form-control" style="border-color:black; width:50%; padding: 10px;">
                    </center>
               
                    <p><a href="registrousuario.php">Registrarse</a> 
            </div>
    </div>
</body>
</html>
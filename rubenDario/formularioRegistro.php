<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="index.js"></script>

</head>

<body>
    <div class="container">
        <?php
        include("menu.php");
        include_once('dataBaseConexion.php')
        ?>
            </div>
            
        
        <div class="form">
        <div class="container"><h2>Registro de usuario</h2></div>
            <form action="insertRegistro.php" method="POST" onsubmit="return validate()" class="form-control">
                <label>Nombre</label>
                <input type="text" name="userName" id="userName" class="form-control mb-3">

                <label>Correo electronico</label>
                <input type="mail" name="userMail" id="userMail" class="form-control mb-3">

                <label>Numero de documento</label>
                <input type="number" name="userId" id="userId" class="form-control">

                <label>Contraseña nueva</label>
                <input type="password" name="userPassword" id="userPassword" class="form-control mb-3">

                <input type="submit" value="Registrar" class="form-control mb-3 btn btn-danger">
            </form>
        </div>


</body>

</html>
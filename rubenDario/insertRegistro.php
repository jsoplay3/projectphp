<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de registro</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <?php
        include("menu.php");
        include_once('dataBaseConexion.php');
        ?>
        <div class="form">
            <h2>Registro de Usuarios</h2>
        </div>
    </div>
    <div class="form">
        <?php
        $userName = $_POST['userName'];
        $userMail = $_POST['userMail'];
        $userId =  $_POST['userId'];
        $userPassword = $_POST['userPassword'];

        if (
            !$userName || !$userMail
            || !$userId || !$userPassword
        ) {
            echo "Ha faltado algun campo";
        } else {
            $sql = "INSERT INTO `users` (`id`, `name`, `email`, `document`, `password`, `login_date`, `update_date`) VALUES (NULL, '$userName', '$userMail', '$userId', '$userPassword', current_timestamp(), NULL)";
            $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
            echo "$userName fue registrado con exito";
        };
        ?>
        <meta http-equiv="refresh" content="1;url=consultarUsuarioGeneral.php"/>
        <div class="form">
            <a type="button" value="" href="index.php">Pagina principal</a>
        </div>
    </div>
</body>

</html>
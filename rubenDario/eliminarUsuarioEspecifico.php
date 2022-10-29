<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de usuario especifico</title>
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
                include_once('dataBaseConexion.php');
                ?>
    </div>

        <div class="form">
            <form action="eliminarUsuarioEspecifico.php" method="POST" onsubmit="return userDrop()" class="form-cotrol mb-3">
                <label class="form-label">Ingrese el nuemero de documento</label>
                <input type="text" name="userDrop" id="userDrop" class="form-control mb-4">
                <input type="submit" value="Eliminar registro" class="form-control btn btn-warning">

            </form>
        </div>

    <div class="container">

        <?php
        $userDrop = "";
        $userDrop = $_POST['userDrop'];
        if (!$userDrop) {
        echo  "Digite el numero de documento que desea eliminar";
        echo "";
        } else {
            $sql = "DELETE FROM users WHERE document = '$userDrop'";
        $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
            echo "El usuario con numero de documento $userDrop, fue eliminado exitosamente";
        }
        ?>

    </div>
    <div class="container">

        <div class="container"><a type="button" href="index.php">Pagina principal</a></div>

    </div>

</body>

</html>
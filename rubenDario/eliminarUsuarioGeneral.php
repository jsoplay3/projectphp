<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta general</title>
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
        // $conectar = conn();
        $sql = "SELECT * FROM `users`";
        $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
        ?>
    </div>
    <div class="container">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Correo electronico </td>
                <td>Numero de documento</td>
                <td>Fecha de registro</td>
                <td>Fecha actualizada</td>
            </tr>
            <?php
            while ($rowTotal = mysqli_fetch_assoc($resul)) {
                echo "<tr> <td>" . $rowTotal['id'] . "</td> <td>" . $rowTotal['name'] . "</td> <td>" . $rowTotal['email'] . "</td> <td>" . $rowTotal['document'] . "</td> <td>" . $rowTotal['login_date'] . "</td> <td>" . $rowTotal['update_date'] . "</td> </tr>";
            }

            $sql2 =  "DELETE FROM users";
        $resul = mysqli_query($conexion, $sql2) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);

            ?>
        </table>
        <div class="container">
            <form action="eliminarUsuarioGeneral.php" method="post" onsubmit="return drop()">
                <button type="submit" class="btn btn-primary form-control">Eliminar todos los registros</button>
        </div>
    </div>
    </div>
    <script src="index.js"></script>
</body>

</html>
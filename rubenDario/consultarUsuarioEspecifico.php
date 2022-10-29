<!DOCTYPE html>
<html lang="es">

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
        <form action="consultarUsuarioEspecifico.php" method="POST" onsubmit="return userQuery()" class="form-cotrol mb-3">
            <label class="form-label">Ingrese el nuemero de documento</label>
            <input type="number" name="documentQuery" id="documentQuery" class="form-control mb-4">
            <input type="submit" value="Consultar" class="form-control btn btn-danger">

        </form>
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
            <div class="container">
                <?php
                $documentQuery = $_POST['documentQuery'];
                $sql = "SELECT * FROM `users` WHERE document ='$documentQuery'";
                $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
                if ($documentQuery == "") {
                } else {
                    while ($rowTotal = mysqli_fetch_assoc($resul)) {
                        echo "<tr> <td>" . $rowTotal['id'] . "</td> <td>" . $rowTotal['name'] . "</td> <td>" . $rowTotal['email'] . "</td> <td>" . $rowTotal['document'] . "</td> <td>" . $rowTotal['login_date'] . "</td> <td>" . $rowTotal['update_date'] . "</td> </tr>";
                    }
                }
                ?>
            </div>
        </table>
    </div>

</body>

</html>
<?php
include('autentica.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <script src="index.js"></script>

    <!-- <link href="style.css" type="text/css" rel="stylesheet" /> -->
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        include("menu.php");
        include_once('dataBaseConexion.php');
        $sql = "SELECT * FROM `users`";
        $resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
        ?>
    </div>

    <div class="container">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Nombre de usuario</td>
                <td>Correo electronico </td>
                <td>Numero de documento</td>
                <td>Fecha de registro</td>
                <td>Fecha de modificacion</td>
                <td>Usario de modificacion</td>
                <td>Estado de la cuenta</td>


            </tr>

            <?php
            while ($rowTotal = mysqli_fetch_assoc($resul)) {
                echo "<tr> <td>" . $rowTotal['id'] . "</td> <td>" . $rowTotal['userName'] . "</td> <td>" . $rowTotal['user_name2'] . "</td> <td>" . $rowTotal['email'] . "</td> <td>" . $rowTotal['document'] . "</td> <td>" . $rowTotal['login_date'] . "</td> <td>" . $rowTotal['update_date'] . "</td>  <td>" . $rowTotal['user_update'] . "</td>  <td>" . $rowTotal['status'] . "</td> </tr>";
            }
            echo "";
            ?>
        </table>
    </div>

    <div class="container">
        <h1>Actualizar usuario</h1>
        <form action="update.php" method="post" class="form-control" onsubmit="return validateUpdate()">
            <label class="form-label">Numero de documento </label>
            <input type="text" name="document" id="documento" class="form-control">

            <label class="form-label">Nombre nuevo</label>
            <input type="text" name="newName" id="newName" class="form-control">

            <label class="form-label">Nombre de Usuario nuevo</label>
            <input type="text" name="newUserName" id="newUserName" class="form-control">

            <label class="form-label">Correo electronico nuevo</label>
            <input type="text" name="newEmail" id="email" class="form-control">

            <label class="form-label">Contraseña nueva</label>
            <input type="password" name="newPassword" id="newPassword" class="form-control">

            <label class="form-label">Nombre de usuario que modifica</label>
            <input type="text" name="updateUser" id="updateUser" class="form-control">

            <label class="form-label">Fecha de modificacion</label>
            <input type="datetime-local" name="updateDate" id="updateDate" class="form-control mb-3">

            <label class="form-label">Estado de la cuenta</label>
            <select  name="status" id="status" class="form-control mb-3">
            <option value="0">Estado de la cuenta</option>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>

            </select>

            <input type="submit" value="Actualizar" class="form-control mb-3 btn btn-warning">



        </form>
    </div>


</body>

</html>
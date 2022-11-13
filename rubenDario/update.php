<?php
include('autentica.php');
?>

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
        <div class="container">
            <h2>Actualizacion de Usuarios</h2>
        </div>
    </div>
<div class="container">
<?php
include_once('dataBaseConexion.php');
$document = $_POST['document'];
$newName = $_POST['newName'];
$newUserName = $_POST['newUserName'];
$newEmail = $_POST['newEmail'];
$newPassword = $_POST['newPassword'];
$updateUser = $_POST['updateUser'];
$updateDate = $_POST['updateDate'];
$status= $_POST['status'];
$passwordEncriptada = sha1(md5($newPassword));

$sql = "UPDATE `users` SET `userName` = '$newName', `user_name2` = '$newUserName', `email` = '$newEmail', `userPassword` = '$passwordEncriptada', `user_update` = '$updateUser', `update_date` = '$updateDate', `status` = '$status'  WHERE `users`.`document` = $document ";
$resul = mysqli_query($conexion, $sql) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
echo "El usuario $newName fue modificado con exito";
?>
</div>
</body>
</html>
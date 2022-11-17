
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
</head>
<body>
<?php

    date_default_timezone_set('America/Bogota');
    $current_date=date('Y-m-d H:i:s');
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $userMail = $_POST['userMail'];
    $userDocument = $_POST['userDocument'];
    $passwordEncriptada = sha1(md5($password));

    if(!$userName || !$userMail || !$userDocument || !$password ){
        echo "Ha faltado algun campo";
        return false;
    };

    $con=mysqli_connect('localhost', 'root','', 'ecosoft');
    $sql="INSERT INTO `registeruser` VALUES ('', '$userName', '$userMail', '$userDocument', '$passwordEncriptada', '$current_date', '$current_date')";
    $resultado=mysqli_query($con, $sql);
    mysqli_close($con);{
        header("Location: register.php");

        }
?>
</body>
</html>
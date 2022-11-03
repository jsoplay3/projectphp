<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisro usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<?php
    include("menu.php");
    include_once("conexion.php");

    $nombreUsuarioSolicitado=$_POST["nombreUsuarioSolicitado"];
    $mailUsuarioSolicitado=$_POST["mailUsuarioSolicitado"];
    $numeroUsuarioSolicitado=$_POST["numeroUsuarioSolicitado"];
    $passUsuarioSolicitado=$_POST["passUsuarioSolicitado"];
    echo"<h1>Se ha registrado con exito</h1>";


    $conectar=conn();
    $sql="INSERT INTO usuarios ( User_Name, User_Mail, User_Document, User_Password ) VALUES ('$nombreUsuarioSolicitado','$mailUsuarioSolicitado',' $numeroUsuarioSolicitado','$passUsuarioSolicitado')";
    $resul = mysqli_query($conectar,$sql) or trigger_error("Error:",mysqli_error($conectar));


?>
<meta http-equiv="refresh" content="3;url=registrousuario.php"/>
   
   </div> 
</body>
</html>
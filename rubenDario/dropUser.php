<?php
        include('autentica.php');
include_once('dataBaseConexion.php');
        $sql2 =  "DELETE FROM users";
        $resul = mysqli_query($conexion, $sql2) or trigger_error("query failed" . mysqli_error($conexion), E_USER_ERROR);
?>
<meta http-equiv="refresh" content="1;url=formularioRegistro.php"/>

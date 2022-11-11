<?php
    $usuario = $_POST['usernameSolicitado'];
    $password = $_POST['passwordSolicitado'];
    $passwordEncriptado = sha1 (md5($password));

    echo $usuario;
    echo $password;
    echo $passwordEncriptado
?>
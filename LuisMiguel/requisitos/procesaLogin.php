<?php
    $usuario = $_POST['userNameSolicitado'];
    $password = $_POST['passwordSolicitado'];
    $passwordEncriptada = sha1(md5($password));

    

    $mysql = new mysqli("localhost", "root", "", "requisitos");
  if ($mysql->connect_error)
    die('Problemas con la conexion a la base de datos');

    $registros = $mysql->query("SELECT  Mail , contraseña from usuarios
     where Mail='$usuario' && contraseña ='$passwordEncriptada'") or
    die($mysql->error);

  if ($reg = $registros->fetch_array())
    {echo "El usuario es valido";
        session_start();
        $_SESSION['usuarioX'] = $usuario;
        $_SESSION['claveX'] = $passwordEncriptada;
    header("Location: registroUsuario.php");}
  else{
    echo 'usuario invalido';
    header("Location: index.php");
  }
  $mysql->close();

?>



<?php
    $usuario = $_POST['userNameSolicitado'];
    $password = $_POST['passwordSolicitado'];
    $passwordEncriptada = sha1(md5($password));

    echo usuario;
    echo $password;
    echo $passwordEncriptada;

    $mysql = new mysqli("localhost", "root", "", "requisitos");
  if ($mysql->connect_error)
    die('Problemas con la conexion a la base de datos');

    $registros = $mysql->query("select mail_usuario, clave_usuario from registro_usuarios
     where mail_usuario='$usuario' && clave_usuario='$passwordEncriptada'") or
    die($mysql->error);

  if ($reg = $registros->fetch_array())
    {echo "El usuario es valido";
        session_start();
        $_SESSION['usuarioX'] = $usuario;
        $_SESSION['claveX'] = $passwordEncriptada;
    header("Location: registroUsuario.php");}
  else{
    echo 'usuario invalido';
    header("Location: formLogin.php");
  }
  $mysql->close();

?>
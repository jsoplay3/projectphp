<?php
    $usuario = $_POST['usernameSolicitado'];
    $password = $_POST['passwordSolicitado'];
    $passwordEncriptado = sha1 (md5($password));

    // echo $usuario;
    // echo $password;
    // echo $passwordEncriptado
    $mysql = new mysqli("localhost", "root", "", "requisitos");
    if ($mysql->connect_error)
      die('Problemas con la conexion a la base de datos');
  
      $registros = $mysql->query("SELECT ru_mail_usuario , ru_contraseña_usuario  from registrousuario
       where ru_mail_usuario='$usuario' && ru_contraseña_usuario ='$passwordEncriptada'") or
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
<?php
    $usuario = $_POST['NameUser'];
    $password = $_POST['PassUser'];
    $passwordEncriptada = sha1(md5($password));

    

    $mysql = new mysqli("localhost", "root", "", "registro");
  if ($mysql->connect_error)
    die('Problemas con la conexion a la base de datos');

    $registros = $mysql->query("SELECT  User_Name , User_Password from usuarios
     where User_Name ='$usuario' && User_Password ='$passwordEncriptada'") or
    die($mysql->error);

  if ($reg = $registros->fetch_array())
    {echo "El usuario es valido";
        session_start();
        $_SESSION['usuarioX'] = $usuario;
        $_SESSION['claveX'] = $passwordEncriptada;
    header("Location: menu.php");}
  else{
    echo 'usuario invalido';
    header("Location: index.php");
  }
  $mysql->close();

?>
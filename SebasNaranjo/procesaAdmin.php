<?php
    $usuario = $_POST['username'];
    $document = $_POST['user_document'];
    $password = $_POST['password'];
    $passwordEncriptada = sha1($password);


  $mysql = new mysqli("localhost", "root", "", "ecosoft");
  if ($mysql->connect_error)
    die('Problemas con la conexion a la base de datos');

    $registros = $mysql->query("select nameAdmin, documentAdmin, password from registeradmin where nameAdmin='$usuario' && documentAdmin='$document' && password='$passwordEncriptada'") or
    die($mysql->error);

  if ($reg = $registros->fetch_array())
    {echo "El usuario es valido";
        session_start();
        $_SESSION['usuarioA'] = $usuario;
        $_SESSION['documentoA'] = $document;
        $_SESSION['claveA'] = $password;
    header("Location: admin/ecosoft.php");}
  else{
    header("Location:index.php");
    echo "<script>alert('usuario incorrecto');
    location.assign('index.php');</script> ";
  }
  $mysql->close();

?>
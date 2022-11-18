<?php
include_once("db.php");
$documentoMod = $_REQUEST['documentoMod'];
$mailNuev = $_POST['correoNuev'];
$claveNuev = $_POST['claveNuev'];
$claveEncriptada = sha1(md5($claveNuev));

if(!$documentoMod || !$mailNuev || !$claveNuev){
    echo "Debe llenar todos los campos";
}else if(!preg_match('/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/',"$mailNuev")){
    echo "El campo de correo debe tener la estructura de correo";
}else{ 

$conectar= conn();
$sql= "UPDATE registro_usuarios SET mail_usuario = '$mailNuev', clave_usuario = '$claveEncriptada' WHERE documento_usuario = '$documentoMod'";
$resul = mysqli_query($conectar,$sql) or trigger_error("Error:", mysqli_error($conectar));

header("Location: consultaUsuarioGeneral.php");
}
?>
<?php
session_start();
if(!$_SESSION['usuarioX'] && !$_SESSION['claveX'])
{
    header("Location: formLogin.php");
}
else {
    
}
?>
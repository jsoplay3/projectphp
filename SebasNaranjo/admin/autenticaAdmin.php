<?php
session_start();
if(!$_SESSION['usuarioA'] && !$_SESSION['claveA'])
{
    header("Location: ../index.php");
}
else {
    
}
?>
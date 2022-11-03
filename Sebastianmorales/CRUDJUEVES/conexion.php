<?php
function conn(){
    $hostname="localhost";
    $usuariodb="root";
    $password="";
    $dbname="registro";

    $conectar = mysqli_connect($hostname,$usuariodb,$password,$dbname);
    return $conectar;

}
?>
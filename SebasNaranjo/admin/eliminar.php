<?php
    $id = $_GET['id'];

    $con=mysqli_connect('localhost', 'root','', 'ecosoft');
    $sql="DELETE FROM `registeruser` WHERE id like $id";
    $resultado=mysqli_query($con, $sql);
    if($resultado){
        echo "<script>alert('los datos se eliminaron correctamente');
        location.assign('consultaGeneral.php');</script> ";
    }else{
        echo "<script>alert('los datos no se eliminaron correctamente');
        location.assign('consultaGeneral.php');</script> ";
    }
?>
<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text" rel="stylesheet"/>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <?php
        include("menu.php");
    ?>
    </div>

    <?php
        include_once("db.php");
        $documentoEsp = $_POST["documentoUsuaEsp"];

    if(!$documentoEspecifico){
        echo "Diligencie el campo";
        return false;
    }else  if(!is_nan($documentoEsp)){
        echo "El campo debe tener numeros";
        return false;
    }else {
        $conectar= conn();
    $sql= "SELECT * FROM registrousuarios WHERE ru_nro_documento_usuario  = '$documentoEspecifico'";
    $resul= mysqli_query($conectar,$sql) or trigger_error("Error:", mysqli_error($conectar));

    echo "<h2>Se encontro el usuario</h2>";
echo "<table border= '1.5' class='table table-bordered'>
 <TR><TD>ID</TD><TD>NOMBRE USUARIO</TD><TD>MAIL USUARIO</TD><TD>DOCUMENTO USUARIO</TD><TD>CLAVE USUARIO</TD><TD>FECHA REGISTRO</TD><TD>FECHA MODIFICACION</TD><TD>USUARIO REGISTRO</TD><TD>USUARIO MODIFICO</TD><TD>ESTADO</TD></TR>";

    while($consu_dato_esp=mysqli_fetch_array($resul)){
        echo "<TR><TD>".$consu_dato_esp['id']."</TD><TD>".$consu_dato_esp['nombre_usuario']."</TD><TD>".$consu_dato_esp['mail_usuario']."</TD><TD>".$consu_dato_esp['documento_usuario']."</TD><TD>".$consu_dato_esp['clave_usuario']."</TD><TD>".$consu_dato_esp['fecha_registro']."</TD><TD>".$consu_dato_esp['fecha_modificacion']."</TD><TD>".$consu_dato_esp['usuario_registro']."</TD><TD>".$consu_dato_esp['usuario_modificacion']."</TD><TD>".$consu_dato_esp['estado']."</TD></TR>";
    }
    }
    
    echo "</table>";
    ?>

</body>
</html>
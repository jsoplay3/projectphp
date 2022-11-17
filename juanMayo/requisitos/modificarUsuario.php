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
    <table border= '1.5' class='table table-bordered'>
 <TR><TD>ID</TD><TD>NOMBRE USUARIO</TD><TD>MAIL USUARIO</TD><TD>DOCUMENTO USUARIO</TD><TD>CLAVE DEL USUARIO</TD><TD>FECHA DE REGISTRO</TD><TD>FECHA DE MODIFICACION</TD><TD>USUARIO REGISTRO</TD><TD>USUARIO MODIFICO</TD><TD>ESTADO</TD></TR>
        <?php
        include_once("db.php");
        
        $documentomodificar = $_POST["documentoModificar"];

    $conectar= conn();
    $sql= "SELECT * FROM registrousuario WHERE ru_nro_documento_usuario = '$documentomodificar'";
    $resul= mysqli_query($conectar,$sql) or trigger_error("Error:", mysqli_error($conectar));
    while($consu_dato_esp=mysqli_fetch_array($resul)){
        echo "<TR><TD>".$consu_dato_esp['id']."</TD><TD>".$consu_dato_esp['ru_nombre_usuario']."</TD><TD>".$consu_dato_esp['ru_mail_usuario']."</TD><TD>".$consu_dato_esp['ru_nro_documento_usuario']."</TD><TD>".$consu_dato_esp['ru_contraseña_usuario']."</TD><TD>".$consu_dato_esp['ru_fechaa_registro']."</TD><TD>".$consu_dato_esp['ru_fecha_modificacion']."</TD><TD>".$consu_dato_esp['ru_usuario_registro']."</TD><TD>".$consu_dato_esp['u_usuario_modificacion']."</TD><TD>".$consu_dato_esp['ru_estado']."</TD></TR>";
    }
    ?>
</table>
</body>
</html>
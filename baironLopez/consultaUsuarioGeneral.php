<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<script src="validacionCons.js"></script>
<body>
<div class="container">
    <?php
    include("menu.php");
    ?>
    
    <form action="consultaUsuarioEspecifico.php" method="post" onsubmit="return validacionUsuCons()">
        <h2>Consulta Especifica</h2>
        <label for="" class="form-label">Numero de documento del usuario a buscar</label>
        <input type="text" name="documentoEspecifico" id="documentoEspecifico" class="form-control">
        <input type="submit" value="Buscar" name="buscar" class="btn btn-dark">
    </form>
    <h2>Consulta General</h2>
    <div class="table-responsive"><table border= '1' class='table table-bordered'>
 <TR><TD>ID</TD><TD>NOMBRE DEL USUARIO</TD><TD>MAIL DEL USUARIO</TD><TD>DOCUMENTO DEL USUARIO</TD>
 <TD>CLAVE DEL USUARIO</TD><TD>FECHA DE REGISTRO</TD><TD>FECHA DE MODIFICACION</TD>
 <TD>USUARIO QUE REGISTRO</TD><TD>USUARIO QUE MODIFICO</TD><TD>ESTADO</TD></TR>
    <?php
        include_once("db.php");
        
    $conectar=conn();
    $sql="SELECT * FROM registro_usuarios WHERE estado = TRUE"; 
    $resultado = mysqli_query($conectar,$sql) or trigger_error("Error:",mysqli_error($conectar));
    while($consu_datos = mysqli_fetch_array($resultado)){
        echo "<TR><TD>".$consu_datos['id']."</TD><TD>".$consu_datos['nombre_usuario']."</TD><TD>".$consu_datos['mail_usuario']."</TD>
        <TD>".$consu_datos['documento_usuario']."</TD><TD>".$consu_datos['clave_usuario']."</TD><TD>".$consu_datos['fecha_registro']."</TD><TD>".$consu_datos['fecha_modificacion']."</TD>
    <TD>".$consu_datos['usuario_registro']."</TD><TD>".$consu_datos['usuario_modificacion']."</TD><TD>".$consu_datos['estado']."</TD></TR>";
    }
    ?>
    </table></div>
    </div>
</body>
</html>
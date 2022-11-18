<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<script src="validacionMod2.js"></script>
<body>
    <div class="container">
        <?php
        include("menu.php");
        ?>
        <?php
        include_once("db.php");
        
        $documentomodificar = $_POST["documentoModificar"];

        if(!$documentomodificar){
            echo "Debe poner el documento del usuario que desea modificar";
        }else{

            echo "<h2>Usuario Encontrado</h2>
            <div class='table-responsive'><table border= '1' class='table table-bordered'>
         <TR><TD>ID</TD><TD>NOMBRE DEL USUARIO</TD><TD>MAIL DEL USUARIO</TD><TD>DOCUMENTO DEL USUARIO</TD>
         <TD>CLAVE DEL USUARIO</TD><TD>FECHA DE REGISTRO</TD><TD>FECHA DE MODIFICACION</TD>
         <TD>USUARIO QUE REGISTRO</TD><TD>USUARIO QUE MODIFICO</TD><TD>ESTADO</TD></TR>";

    $conectar= conn();
    $sql= "SELECT * FROM registro_usuarios WHERE documento_usuario = '$documentomodificar'";
    $resul= mysqli_query($conectar,$sql) or trigger_error("Error:", mysqli_error($conectar));

    while($consu_dato_esp=mysqli_fetch_array($resul)){
        echo "<TR><TD>".$consu_dato_esp['id']."</TD><TD>".$consu_dato_esp['nombre_usuario']."</TD>
        <TD>".$consu_dato_esp['mail_usuario']."</TD><TD>".$consu_dato_esp['documento_usuario']."</TD>
        <TD>".$consu_dato_esp['clave_usuario']."</TD><TD>".$consu_dato_esp['fecha_registro']."</TD>
        <TD>".$consu_dato_esp['fecha_modificacion']."</TD><TD>".$consu_dato_esp['usuario_registro']."</TD>
        <TD>".$consu_dato_esp['usuario_modificacion']."</TD><TD>".$consu_dato_esp['estado']."</TD></TR>";
    }
    ?>

</table></div>
<h1>Modificar</h1>
<form action="modificarUsuarioEspecifico.php" method="post" onsubmit="return validacionUsuMod2()">
        <input type="hidden" name="documentoMod" value="<?php echo $documentomodificar?>">
        <label class="form-label">Correo Electronico</label>
        <input type="text" name="correoNuev" id="correoNuev" class="form-control">
        <label class="form-label">Contraseña</label>
        <input type="text" name="claveNuev" id="claveNuev" class="form-control">
        <input type="submit" name="btnMod" class="btn btn-dark">
    </form>
   <?php
    }
   ?> 
    </div>
</body>
</html>
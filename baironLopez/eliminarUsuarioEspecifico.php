<?php
    include("autentica.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div class="container"><?php
        include("menu.php");
        include_once("db.php");

        $usuarioEliminar = $_POST["usuarioEliminar"];
        $estadoUsuarioEliminado = FALSE;

        if(!$usuarioEliminar){
            echo "Debes llenar el campo";
        }else if (!is_numeric($usuarioEliminar)){
            echo "El campo solo permite valores numericos";
        }else{
            $conectar= conn();
        $sql= "UPDATE registro_usuarios SET estado = '$estadoUsuarioEliminado' WHERE documento_usuario = '$usuarioEliminar'";
        $resul = mysqli_query($conectar,$sql) or trigger_error("Error:", mysqli_error($conectar));

        echo "<meta http-equiv='refresh' content='0;url=eliminarUsuarioGeneral.php'/>";
        }
    ?>
    </div>
</body>
</html>
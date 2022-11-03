<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php
        include("menu.php"); 
        echo "<h2>Registro de Usuarios</h2>";
        
        $nombreUsuarioSolicitado = $_POST['nombreUsuario'];
        $mailUsuarioSolicitado= $_POST['mailUsuario'];
        $documentoUsuarioSolicitado=  $_POST['docUsuario'];
        $passwordUsuarioSolicitado= $_POST['passUsuario'];


        if(!$nombreUsuarioSolicitado || !$mailUsuarioSolicitado
        || !$documentoUsuarioSolicitado || !$passwordUsuarioSolicitado){
            echo "Ha faltado algun campo";
        };

        if(!is_numeric($documentoUsuarioSolicitado)){
            echo "solo se aceptan números en el campo documento";
        }
         
        $clave=md5($passwordUsuarioSolicitado);
        echo 'Clave encriptada: '.$clave;
        
        if(!preg_match('/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/',"$mailUsuarioSolicitado")){
            echo "Estructura de correo no valida";
        } 

        include_once('db.php');
        $conectar=conn();
        $sql="INSERT INTO `usuarios` VALUES ('$nombreUsuarioSolicitado', '$mailUsuarioSolicitado', '$documentoUsuarioSolicitado', '$passwordUsuarioSolicitado')";
        $resul = mysqli_query($conectar,$sql) or trigger_error("Error:",mysqli_error($conectar));
        

        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de usuario</title>
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

    echo '<h2>Usuario registrado :)</h2>';
    
        $nombreUsuarioSolicitado = $_POST['nombreUsuarioSolicitado'];
        $mailUsuarioSolicitado = $_POST['mailUsuarioSolicitado'];
        $documentoUsuarioSolicitado = $_POST['documentoUsuarioSolicitado'];
        $passwordUsuarioSolicitado = md5 ($_POST['passwordUsuarioSolicitado']);
        $estado = TRUE;

    
        if($nombreUsuarioSolicitado == ""|| $mailUsuarioSolicitado == ""|| $documentoUsuarioSolicitado == ""
        || $passwordUsuarioSolicitado == ""){
            echo "Debes diligenciar todos los campos";
        }else if(!is_numeric ($documentoUsuarioSolicitado)){
            echo "Solo debe ingresar numeros en Numero de Documento ";
        }
        if(!preg_match('/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/',"$mailUsuarioSolicitado")){
            echo "El campo Mail del Usuario debe ser diligenciado correctamente";
        }

    ?>
    <?php
        include_once("db.php");

        $conectar=conn();
        $sql="INSERT INTO `registrousuario` (`ru_nombre_usuario`,`ru_mail_usuario`,`ru_nro_documento_usuario`,`ru_contraseña_usuario`,`ru_estado`) VALUES ('$nombreUsuarioSolicitado','$mailUsuarioSolicitado','$documentoUsuarioSolicitado','$passwordUsuarioSolicitado','estado')";
        $resul = mysqli_query($conectar,$sql) or trigger_error("Error:",mysqli_error($conectar));
     ?>

    </div>
    <!-- <meta http-equiv="refresh" content=";url=registrousuario.php"/> -->
</body>
</html>
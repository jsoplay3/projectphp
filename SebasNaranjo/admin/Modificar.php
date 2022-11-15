<?php
    include("autenticaAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Editar usuario</title>
</head>
<body class="fondo bg-black">
<?php
if(isset($_POST['actualizar'])){
    $con=mysqli_connect('localhost', 'root','', 'ecosoft');
    $id=$_POST['id'];
    $name=$_POST["userName"];
    $mail=$_POST["userMail"];
    $document=$_POST["userDocument"];
    date_default_timezone_set('America/Bogota');
    $current_date=date('Y-m-d H:i:s');

    $sql="update registeruser set userName='".$name."', userMail='".$mail."', userDocument='".$document."', modificationDate='".$current_date."'
    where id='".$id."'";

    $resultado=mysqli_query($con,$sql);
    if($resultado){
        echo "<script>alert('los datos se actualizaron correctamente');
        location.assign('consultaGeneral.php');</script> ";
    }else{
        echo "<script>alert('los datos no se actualizaron correctamente');
        location.assign('consultaGeneral.php');</script> ";
    }
mysqli_close($con);

}else{
    $con=mysqli_connect('localhost', 'root','', 'ecosoft');
    $id=$_GET['id'];
    $sql="select * from registeruser where id='".$id."'";
    $resultado=mysqli_query($con,$sql);

    $fila=mysqli_fetch_assoc($resultado);
    $name=$fila["userName"];
    $mail=$fila["userMail"];
    $document=$fila["userDocument"];

    mysqli_close($con);
?>
<div class="container"><?php
        include("menuAdmin.php");
    ?>
<div class="container text-center p-3 mb-2 bg-black text-white">
    <H2>EDICION DE USUARIOS</H2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" onsubmit="return validacion()">
    <label class="form-label">Nombre Del Usuario</label>
        <input type="text" name="userName" value="<?php echo $name;?>" class="form-control text-black" id="userName" required><br>
        <label class="form-label">Mail del usuario</label>
        <input type="email" name="userMail" value="<?php echo $mail;?>" class="form-control text-black" id="userMail" required><br>
        <label class="form-label">Nro De Documento Del Usuario</label>
        <input type="number" name="userDocument" value="<?php echo $document;?>" class="form-control text-black" id="userDocument" required><br>
        <input type="submit" value="Actualizar" name="actualizar" class="btn btn-dark">
        <input type="hidden" name="id" value="<?php echo $id;?>" class="form-control text-black" id="id">
    </form><br>
    <a href="adminUsuarios.php" ><button class="btn btn-outline-danger">cancelar</button></a>
    </div>

<?php
}
?>
</body>
</html>
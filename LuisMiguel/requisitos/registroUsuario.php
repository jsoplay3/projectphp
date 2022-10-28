<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="styles.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</head>
<script src=val.js></script>
<body>
     
    <div class="container">
        <?php
        include("menu.php");
        ?>
      <form action="procesaUsuario.php" method="post" onsubmit="return val()">

         <labe >Nombre de usuario</labe>
         <input type="text" class="form-control m-1" name="nombreUsuario"  id="nameUser"  >

            <labe >Mail de usuario</labe>
         <input type="email" class="form-control  m-1 "  name="mailUsuario" id="mailUser" >

         <labe >Nro de Documento del usuario</labe>
         <input type="text" class="form-control m-1 "  name="docUsuario" id="docUser" >

         <labe >Contraseña del usuario</labe>
         <input type="password" class="form-control m-1 "  name="passUsuario"id="passUser"  >

         <input  type="submit" value="Registrar"  class="btn btn-outline-success m-3">

     </form>

    </div>
</body>
</html>
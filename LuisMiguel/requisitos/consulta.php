<?php
    include("tentica.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de usuario especifico</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>



<body>


    <?php

        include("menu.php");

    ?>

    <h1>Buscador Registro</h1>

    <form action="consultaUsuarioEspecifico.php" method="post">


        <input type="text" name="buscar" class="form-control m-0.8">
       
         <input type="submit" class="btn btn-primary m-2" value="Buscar">
        
        

    </form>

    
    <div class="container ">
        <table class="table m-2">

            
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo electronico </th>
                <th>Numero de documento</th>
                <th>Fecha de registro</th>
                <th>Fecha actualizada</th>
                <th>Editar</th>
                <th>Eliminar</th>
        
            </thead>

            <tbody>

                <?php
                
                    include("consulta.php");

                ?>

                <?php while($rowTotal = mysqli_fetch_assoc($resul)){ ?>

                    <td><?php  echo $rowTotal['us_Id'];?></td>
                    <td><?php  echo $rowTotal['Nombre'];?></td>
                    <td><?php  echo $rowTotal['Mail'];?></td>
                    <td><?php  echo $rowTotal['NroDocumento'];?></td>
                    <td><?php  echo $rowTotal['us_fechaRegistro'];?></td>
                    <td><?php  echo $rowTotal['us_fechaModificacion'];?></td>
                     <td><a class="btn btn-warning">Editar</a></td>
                    <td><a class="btn btn-danger" >Eliminar</a></td>

                <?php }?>



            </tbody>
            
                
            
        </table>
    </div>


</body>

</html>
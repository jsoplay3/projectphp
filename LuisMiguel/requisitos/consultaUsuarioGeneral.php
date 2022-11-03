<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">

    <?php

        include("menu.php");
        $con=mysqli_connect('localhost', 'root','', 'requisitos');
     $sql = "SELECT * FROM `usuarios`";
     
     $resul = mysqli_query($con, $sql) or trigger_error("query failed" . mysqli_error($con), E_USER_ERROR);
     
    ?>

    <table class="table m-center">

        <tr>

            <td>Nombre</td>
            <td>Correo electronico </td>
            <td>Numero de documento</td>
        
        </tr>

        <?php
            while ($rowTotal = mysqli_fetch_assoc($resul)) {
            echo "<tr></td> <td>" . $rowTotal['Nombre'] . "</td> <td>" . $rowTotal['Mail'] . "</td> <td>" . $rowTotal['NroDocumento'] . "</td> <td></tr>";}
            echo "";
        ?>

    </table>


</div>
</body>
</html>
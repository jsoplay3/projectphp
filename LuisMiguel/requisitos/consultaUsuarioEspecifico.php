<?php
    include("tentica.php");
?>

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
    <div class="container ">

            <table class="table m-2">

                
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Correo electronico </td>
                    <td>Numero de documento</td>
                    <td>Fecha de registro</td>
                    <td>Fecha actualizada</td>
                </tr>
                
                <?php

                    include("menu.php");
                    include('db.php');
                    
                    $consultaUser = $_POST['consultado'] ;

                        if(!$consultaUser){
                            header("Location: consultaform.php");
                            
                        }else{

                            $con=conn();
                            $sql = "SELECT * FROM `usuarios` WHERE `NroDocumento` ='$consultaUser'";
                            $resul = mysqli_query($con,$sql) or trigger_error("Error:",mysqli_error($con));
                        
                            while ($rowTotal = mysqli_fetch_assoc($resul)) {
                                echo "<tr> <td>" . $rowTotal['us_Id'] . "</td> <td>" . $rowTotal['Nombre'] . "</td> <td>" . $rowTotal['Mail'] . "</td> <td>" . $rowTotal['NroDocumento'] . "</td> <td>" . $rowTotal['us_fechaRegistro'] . "</td> <td>" . $rowTotal['us_fechaModificacion'] . "</td> </tr>";
                            }
                        
                        
                            

                        }
                    
                        
                        
                        
                    
                ?>
                
            </table>

    </div>


</html>
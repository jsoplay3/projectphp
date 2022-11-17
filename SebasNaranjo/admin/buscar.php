<?php
    include("autenticaAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrador Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<?php
        include("menuAdmin.php");
    ?>
    <div>
    <form class="d-flex" action="buscar.php" method="post" role="search">
        <input class="form-control me-2" name="buscar" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>

    <div>
    <table class="table table-striped">
            <tr>
            <td scope="col" class="table-dark">ID</td>
                <td scope="col" class="table-dark">Nombre usuario</td>
                <td scope="col" class="table-dark">Mail</td>
                <td scope="col" class="table-dark">Nro documento</td>
                <td scope="col" class="table-dark">Fecha Registro</td>
                <td scope="col" class="table-dark">Fecha Modificacion</td>
                <td scope="col" class="table-dark">Opciones</td>
            </tr>
            <?php
            $buscar=$_POST['buscar'];
            $con=mysqli_connect('localhost', 'root','', 'ecosoft');
            $sql="SELECT id, userName, userMail, userDocument, registerDate, modificationDate FROM registerUser WHERE userDocument like '$buscar' '%' order by userDocument desc";
            $resultado=mysqli_query($con, $sql);
            while ($mostrar= mysqli_fetch_row($resultado)){
            ?>
            <tr>
            <td>
                    <?php
                    echo $mostrar['0'] 
                    ?>
                </td>
                <td>
                    <?php
                    echo $mostrar['1'] 
                    ?>
                </td>
                <td>
                    <?php
                    echo $mostrar['2'] 
                    ?>
                </td>
                <td>
                    <?php
                    echo $mostrar['3'] 
                    ?>
                </td>
                <td>
                    <?php
                    echo $mostrar['4'] 
                    ?>
                </td>
                <td>
                    <?php
                    echo $mostrar['5'] 
                    ?>
                </td>
                <td>
                    <a href="Modificar.php?
                    id=<?php echo $mostrar['0'] ?>"><button class="btn btn-outline-secondary">editar</button></a>
                    <a href="eliminar.php?
                    id=<?php echo $mostrar['0'] ?>"><button class="btn btn-outline-danger">eliminar</button></a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
</body>
</html>
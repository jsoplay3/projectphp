<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="index.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        include("menu.php");
        ?>
    </div>
    <div class="container">
        <form action="procesaLogin.php" method="post" class="form-control" onsubmit="return validateLogin()">

            <label class="form-label">Nombre usuario</label>
            <input type="text" id="userName" name="userName" class="form-control" />
            <br>
            <label class="form-label">PassWord</label>
            <input type="password" id="userPassword" name="userPassword" class="form-control" />
            <br>
            <input type="submit" value="Ingresar" />

        </form>

    </div>
</body>

</html>
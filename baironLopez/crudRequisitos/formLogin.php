<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesaLogin.php" method="post">

        <label>Nombre usuario</label>
        <input type="text" name="userNameSolicitado" require/>
        <br>
        <label>PassWord</label>
        <input type="password" name="passwordSolicitado" require/>
        <br>
        <input type="submit" value="Ingresar"/>

    </form>
</body>
</html>
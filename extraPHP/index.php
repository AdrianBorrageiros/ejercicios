<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">+
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>extraPHP</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['user_id']){
            echo "<a href='/logout.php'>DESCONECTARSE</a><br>";
            echo "<a href='/changePWD.php'>CAMBIAR CONTRASEÑA</a>";
        } else{
            echo "<a href='/login.html'>CONECTARSE</a><br>";
        }
    ?>
    <h1>Search</h1>
    <form id="formulario" action="search.php" method="post">
        <input id="search" name="search" type="text" placeholder="Texto de búsqueda"><br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
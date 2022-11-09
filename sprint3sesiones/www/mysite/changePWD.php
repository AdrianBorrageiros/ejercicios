<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $db = mysqli_connect('172.16.0.2', 'root', '1234', 'mysitedb') or die('Fail');
            session_start();
            $query = "SELECT contrasena FROM tUsuarios WHERE id = '".$_SESSION['user_id']."'";
            $result = mysqli_query($db, $query) or die('Query error');

            if (mysqli_num_rows($result) > 0) {
                echo '<h1>CAMBIO DE CONTRASEÑA</h1>';
                echo '<form id="formulario" action="change.php" method="post">';
                echo '<input id="claveAntes" name="bf_password" type="password" placeholder="Contraseña antigua"><br>';
                echo '<input id="claveAhora" name="af_password" type="password" placeholder="Contraseña nueva"><br>';
                echo '<input type="submit" value="Cambiar contraseña">';
                echo '</form>';
            }else {
                header("Location: /main.php");
            }
        ?>
    </body>
</html>
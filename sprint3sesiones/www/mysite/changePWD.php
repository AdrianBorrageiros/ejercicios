<<<<<<< HEAD
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
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
                echo '<p>No has iniciado sesión</p>';
                echo '<a href="/login.html">INICIAR SESIÓN</a>';
            }
        ?>
    </body>
=======
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
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
                echo '<p>No has iniciado sesión</p>';
                echo '<a href="/login.html">INICIAR SESIÓN</a>';
            }
        ?>
    </body>
>>>>>>> ed26d9b8fbbff5521bc2ae5d58cfa0c9da1c7ccd
</html>
<!-- DATA BASE -->
<?php
    $db = mysqli_connect('172.16.0.2', 'root', '1234', 'mysitedb') or die('Fail');
?>

<!-- HTML -->
<html>
    <style>
        img {
            height: 150px;
            width: 120px;
        }
    </style>
    <head><meta charset="utf-8"></head>
    <body>
        <?php
            // COMPROBAR SI ESTÁ LA SESIÓN INICIADA
            session_start();
            if ($_SESSION['user_id']){
                echo "<a href='/logout.php'>DESCONECTARSE</a><br>";
                echo "<a href='/changePWD.php'>CAMBIAR CONTRASEÑA</a>";
            } else{
                echo "<a href='/login.html'>CONECTARSE</a><br>";
            }
            // Lanzar query con GET ID
            $query = 'SELECT * FROM tPeliculas where id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die('Query error');
            $row = mysqli_fetch_array($result);
            // Recorrer el resultado
            echo "<center>";
            echo '<img src='.$row['url_imagen'].'>';
            echo '<h1>'.$row['nombre'].'</h1>';
            echo '<p>Director: '.$row['director'].'</p>';
            echo 'Puntuación: <h2>'.$row['puntuacion'].'</h2>';
            echo '<br>'
        ?>
        <h3>Comentarios:</h3>
        <?php 
            // QUERY PARA COMENTARIO
            $query2 = 'SELECT tUsuarios.nombre, tComentarios.comentario, tComentarios.fecha_comentario from tComentarios INNER JOIN tUsuarios ON tComentarios.usuario_id=tUsuarios.id WHERE pelicula_id='.$_GET['id'];
            $row2 = mysqli_query($db, $query2) or die('Query error');

            while ($row = mysqli_fetch_array($row2)) {
                echo '<p>●'.$row['nombre'].':&nbsp;&nbsp;&nbsp;'.$row['comentario'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['fecha_comentario'].'</p>'; // escribimos el comentario y la fecha del mismo con espaciados de por medio
            }
            mysqli_close($db);
        ?>
        <!-- FORMULARIO COMENTARIO -->
        <h3>Deja un nuevo comentario:</h3>
        <form action="/comment.php" method="post">
            <textarea rows="4" cols="50" name="new_comment"></textarea><br>
            <input type="hidden" name="pelicula_id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" value="Comentar">
        </form>
        </center>
    </body>
</html>
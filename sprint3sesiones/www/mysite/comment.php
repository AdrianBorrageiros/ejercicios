<?php
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <body>
        <center>
        <?php
            session_start();
            $user_id_a_insertar = 'NULL';
            if (!empty($_SESSION['user_id'])) {
                $user_id_a_insertar = $_SESSION['user_id'];
            };
            $query = "INSERT INTO tComentarios VALUES (0,'".$_POST['new_comment']."','".$user_id_a_insertar."','".$_POST['pelicula_id']."','".date("Y.m.d")."')";
            mysqli_query($db, $query) or die('Error');
            echo "<p>Nuevo comentario ";
            echo mysqli_insert_id($db);
            echo " añadido</p>";
            echo "<a href='/detail.php?id=".$_POST['pelicula_id']."'>Volver</a>";
            mysqli_close($db);
        ?>
        </center>
    </body>
</html>
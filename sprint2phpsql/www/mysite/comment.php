<?php
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <body>
        <center>
        <?php
            $query = "INSERT INTO tComentarios VALUES (0,'".$_POST['new_comment']."',NULL,'".$_POST['pelicula_id']."','".date("d.m.y")."')";
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
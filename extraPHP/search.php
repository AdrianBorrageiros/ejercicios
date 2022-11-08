<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>
<body>
    <a href="index.php">VOLVER</a>
    <table>
        <tr>
            <td><b><h2>ID</h2></b></td>
            <td></td>
            <td><b><h2>Nombre</h2></b></td>
            <td><b><h2>Director</h2></b></td>
            <td><b><h2>Puntuación</h2></b></td>
        </tr>
        <?php
            $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
            $search_posted = $_POST["search"];
            // tPeliculas = id, nombre, url_image, director, puntuacion
            $query = "SELECT * FROM tPeliculas WHERE nombre LIKE '%".$search_posted."%' OR director LIKE '%".$search_posted."%' ";
            $result = mysqli_query($db, $query) or die('Query error');
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr>';
                    echo '<td><h1>'.$row['id'].'</h1></td>';
                    echo '<td><img src='.$row['url_imagen'].'></td>';
                    echo '<td><h2><a href="detail.php?id='.$row['id'].'">'.$row['nombre'].'</a></h2></td>';
                    echo '<td>'.$row['director'].'</td>';
                    echo '<td><h2>'.$row['puntuacion'].'</h2></td>';
                    echo '</tr>';
                }
                mysqli_close($db);
                } else {
                    echo "<a href='index.php'>VOLVER</a>";
                    echo '<p>Nada encontrado</p>';
            }
        ?>
    </table>
</body>
</html>
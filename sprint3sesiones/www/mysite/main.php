<!-- DATA BASE -->
<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

<!-- HTML -->
<html>
    <style>
        a{
            text-decoration: none;
        }
        img {
            height: 110px;
            width: 80px;
        }
        td {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
        }
        table{
            width: 100%;
            border: 1px solid black;
        }
    </style>
    <head><meta charset="utf-8"></head>
    <body>

        <!-- <h1>Conexion establecida</h1> -->
        <table>
            <tr>
                <td><b><h2>ID</h2></b></td>
                <td></td>
                <td><b><h2>Nombre</h2></b></td>
                <td><b><h2>Director</h2></b></td>
                <td><b><h2>Puntuación</h2></b></td>
            </tr>
            <?php
                // Lanzar una query
                $query = 'SELECT * FROM tPeliculas';
                $result = mysqli_query($db, $query) or die('Query error');
                // Recorrer el resultado
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
            ?>
        </table>
    </body>
</html>
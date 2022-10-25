<<<<<<< HEAD
<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
    session_start();
    $query = "SELECT contrasena FROM tUsuarios WHERE id = '".$_SESSION['user_id']."'";
    $result = mysqli_query($db, $query) or die('Query error');
    
    $password_before = $_POST['bf_password'];
    $password_after = $_POST['af_password'];

    $only_row = mysqli_fetch_array($result);
    if ($only_row[0] == $password_before) {
        $query = "UPDATE tUsuarios SET contrasena='".$password_after."' WHERE id='".$_SESSION['user_id']."'";
        $result = mysqli_query($db, $query) or die('Query error');
        header('Location: main.php');
    }else {
        echo 'Contraseña antigua incorrecta';
    }
=======
<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
    session_start();
    $query = "SELECT contrasena FROM tUsuarios WHERE id = '".$_SESSION['user_id']."'";
    $result = mysqli_query($db, $query) or die('Query error');
    
    $password_before = $_POST['bf_password'];
    $password_after = $_POST['af_password'];

    $only_row = mysqli_fetch_array($result);
    if ($only_row[0] == $password_before) {
        $query = "UPDATE tUsuarios SET contrasena='".$password_after."' WHERE id='".$_SESSION['user_id']."'";
        $result = mysqli_query($db, $query) or die('Query error');
        header('Location: main.php');
    }else {
        echo 'Contraseña antigua incorrecta';
    }
>>>>>>> ed26d9b8fbbff5521bc2ae5d58cfa0c9da1c7ccd
?>
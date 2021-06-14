<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'BD_TODOLIST') or die (mysqli_error($mysqli));

$id = 0;
$update = false;
$nombre = '';
$ciudad = '';

if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];

    $mysqli->query("INSERT INTO LISTA (NOMBRE, CIUDAD) VALUES ('$nombre','$ciudad')") or die($mysqli->error);

    $_SESSION['message'] = "El resistro se ha guardado!";
    $_SESSION['mgs_type'] = "Exitoso";

    header("ciudad: index.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM LISTA WHERE ID=$id") or die ($mysqli->error());

    $_SESSION['message'] = "El resistro se ha eliminado!";
    $_SESSION['mgs_type'] = "Peligro";

    header("ciudad: index.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM LISTA WHERE ID=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $nombre = $row['nombre'];
        $ciudad = $row['ciudad'];
    }
}

if (isset($_POST['actualizar'])){
    $id = $_POST['ID'];
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];

    $mysqli->query("UPDATE LISTA SET NOMBRE = '$nombre', CIUDAD='$ciudad' WHERE ID='$id'") or die(mysqli->error());

    $_SESSION['message'] = "El resgistro se ha actualizado!";
    $_SESSION['msg_type'] = "Advertencia";

    header('ciudad: index.php');
}

?>
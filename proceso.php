<?php

$mysqli = new mysqli('localhost', 'root', '', 'BD_TODOLIST') or die (mysqli_error($mysqli));

if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];

    $mysqli -> query("INSERT INTO LISTA (NOMBRE, CIUDAD) VALUES ('$nombre','$ciudad')") or die($mysqli->error);
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM LISTA WHERE ID=$id") or die ($mysqli->error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384"></script>
</head>
<body>
    <?php require_once 'proceso.php'; ?>
    <div class="container">
    <?php
    $mysqli = new mysqli('localhost','root','','BD_TODOLIST') or die(mysqli_error($mysqli)); 
    $result = $mysqli -> query("SELECT * FROM LISTA") or die($mysqli->error);
    //pre_r($result);
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th colspan="2">Acción</th>
                </tr>
            </thead>
            <?php
            while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td> <?php echo $row['nombre']; ?> </td>
                <td> <?php echo $row['ciudad']; ?> </td>
                <td>
                    <a href="index.php?edit=<?php echo $row['ID']; ?>" class="btn btn-info">Editar</a>
                    <a href="proceso.php?delete=<?php echo $row['ID']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <?php
    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>

    <div class="row justify-content-center">
    <form action="proceso.php" method="POST">
        <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre">
        </div>
        <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ciudad" class="form-control" placeholder="Ingrese una cuidad">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="crear">Crear</button>
        </div>
    </form>
    </div>
    </div>
    
</body>
</html>
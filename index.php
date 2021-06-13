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
    <div class="row justify-content-center">
    <form action="proceso.php" method="POST">
        <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="Ingrese un nombre">
        </div>
        <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ciudad" class="form-control" value="Ingrese una cuidad">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary" name="crear">Crear</button>
        </div>
    </form>
    </div>
    
</body>
</html>
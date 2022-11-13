<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<?php 

echo "<center>";
echo "<h1>Walter Garcia Gomez, Carnet: 5190-19-7664</h1>";
echo "</center>";
echo "<p>";
echo "<strong>Archivo:</strong>" . $_SERVER['PHP_SELF'] . "<br>";
echo "<strong>Servidor:</strong>" . $_SERVER['SERVER_NAME'] . "<br>";
echo "<strong>Cliente IP:</strong>" . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "<strong>Cliente Nombre:</strong>" . $_SERVER['REMOTE_HOST'] . "<br>";
echo "<strong>User Agent:</strong>". $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "</p>";

    ?>
<?php
$id   = $_GET['id'];
echo "<h1># Usuario:     $id</h1>";

?>

<form action="/php-db/actualizar_db.php" method="POST">
        <input name="id" value="<?php echo $id ?>" readonly="true"   type="text" placeholder="id"> <br>
        <input name="nombre" type="text" placeholder="nombre"><br>
        <input name="edad" type="number" placeholder="edad"><br>

        <button name="actualizar" type="submit">Enviar Datos</button>
    </form>

</body>
</html>
<html>

<head>
    <link rel="stylesheet" href="index.css">
    <title>Ejemplo de PHP</title>
   
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
include "libreria_db.php";
$stmt = $pdo->query("SELECT nombre, edad, id FROM persona");
?>
    <TABLE class="Datos_Lista">
    <a class="Ingresar" href="ingresar_db.php" >Ingresar</a>
        <TR>

            <TD><B>Nombre</B></TD>
            <TD><B>Edad</B></TD>
            <td><B>Accion</B>
            </td>
        </TR>
        <?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    printf(
        "<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td><a
href=\"borrar_db.php?id=%d\">Borrar</a> <a href=\" editar_db.php?id=%d\">Editar</a></td></tr>",

        $row["nombre"],
        $row["edad"],
        $row["id"],
        $row["id"]
    );
}
?>
    </table>
</body>

</html>
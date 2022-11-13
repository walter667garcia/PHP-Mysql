<?php
require_once "libreria_db.php";
if(isset($_POST['actualizar'])){
$id=trim($_POST['id']);
$nombre=trim($_POST['nombre']);
$edad=trim($_POST['edad']);

$consulta = "UPDATE persona
SET `nombre`= :nombre, `edad` = :edad
WHERE `id` = :id";
$sql = $pdo->prepare($consulta);
$sql->bindParam(':id',$id,PDO::PARAM_STR, 25);
$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
$sql->bindParam(':edad',$edad,PDO::PARAM_STR, 25);

$sql->execute();

if($sql->rowCount() > 0)
{
$count = $sql -> rowCount();

header('Location: index.php');
exit;
}
else{
echo "<div class='content alert alert-danger'> No se pudo actulizar el registro </div>";
print_r($sql->errorInfo()); 
}
}// Cierra envio
?>
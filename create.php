<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tareitas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->error) {
   echo "no t conectaste";
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tema = $_POST['tema'];
$sql = "INSERT INTO produc (id, nombre, descripcion, tema) VALUES ('$id', '$nombre', '$descripcion', '$tema')";
if($conn->query($sql)===TRUE){
    echo "Se registro correctamente";
}
else{
    echo $sql->error;
}
?>
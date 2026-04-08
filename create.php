<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tareitas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
   echo "no t conectaste";
}
else{
    echo "si t conectaste" , "<br>";
}
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$eestado = $_POST['estado'];
$sql = "INSERT INTO produc (id, nombre, descripcion, estado) VALUES ('$id', '$nombre', '$descripcion', '$estado')";
?>
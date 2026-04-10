<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tareitas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
   echo "no t conectaste";
}


$sql="SELECT * FROM tarea";
$resultado=$conexion->query($sql);
if($resultado->num_rows>0){
while($fila=$resultado->fetch_assoc()){
echo $fila['id']."<br>".$fila['nombre']."<br>".$fila['descripcion']."<br>".$fila['tema']."<br>";
$idtarea=$fila['id'];
echo "<a href='create.php?id=$idtarea'><button>Mostrar</button></a><br>";



}



}



?>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tareitas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
   echo "no t conectaste";
}
$id-$_GET['id'];
$sql="SELECT * FROM tareas WHERE id='$id";
$resultado = $conn->query($sql);
if ($resultado->num_rows>0){
    while($fila-$resultado->fetch_assoc()){
    echo $fila['id']."<br>".$fila ['nombre'].$fila ['descripcion'].$fila ['estado']
    }
    }
    }
}
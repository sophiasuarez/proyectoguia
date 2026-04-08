<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #formulario{
            background-color:#F3F4F6;
        width: 600px;
        height:800px;
        box-shadow: 5px 5px 10px #2569EB;

        }
    </style>
</head>
<body>

    <form action="create.php" method="POST" id="formulario">
         <p>nombre</p>
        <input type="text">
        <p>descripcion</p>
        <input type="text">
         <p>estado</p>
        <input type="text">
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>
</html>
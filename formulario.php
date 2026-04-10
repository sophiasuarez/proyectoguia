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
     border:5px solid #1fb81f80;

        }
        
        p{
            color: #6b7280
            
        }
        h1{
            color: #6b7280
        }
        #titulo{
            border:5px solid #6b7280;
        }
    </style>
</head>
<body>
<center>
   
    <form action="create.php" method="POST" id="formulario">
        <section id="titulo">
             <H1>REGISTRO DE TAREAS</H1>
        </section>
         <p>nombre</p>
        <input type="text">
        <p>descripcion</p>
        <input type="text">
         <p>estado</p>
        <input type="text">
        <br>
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form></center>
</body>
</html>
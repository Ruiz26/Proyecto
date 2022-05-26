<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/estilosMenu.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    
<main>
        <h1>Nuevo Docente</h1><br>
        <div>
            <center><h3>Informacion</h3></center>
            <form class="padre" name="form" action="../../../php/tabla_docentes/registro.php" method="post">

            <p>Identificacion:<input type="text" name="identificacion" required></p>
            <p>Nombres:<input type="text" name="nombres" required></p>
            <p>Apellidos:<input type="text" name="apellidos" required></p>
            <p>Titulo<input type="text" name="titulo" required></p>
            <p>Direccion:<input type="text" name="direccion" required></p>
            <p>telefono<input type="text" name="telefono" required></p>
            <p>f_nacimiento<input type="date" name="f_nacimiento" required></p>
            <p>eps<input type="text" name="eps" required></p>
            <p>rh<input type="text" name="rh" required></p>
            <input type="submit" value="Cargar">
            <input type="reset" value="Restablecer">
       
            
            </form>
        </div>

    </main>

</body>

</html>
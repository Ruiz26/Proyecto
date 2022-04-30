<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo '
        
        <script>
            alert("Por favor iniciar sesión.");
        </script>

        ';

        header("location: ../index.php");
        session_destroy();
        exit();

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Tecnico Industrial</title>

    <link rel="stylesheet" href="css/estilosMenu.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-school"></i>
            <h4>Instituto Tecnico Industrial</h4>
        </div>

        <div class="options__menu">	

            <a href="html/Inicio.html" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="html/Matricula.html">
                <div class="option">
                    <i class="far fa-file" title="Matricular"></i>
                    <h4>Matricular</h4>
                </div>
            </a>
            
            <a href="html/Asignaturas.html">
                <div class="option">
                    <i class="fa-solid fa-book" title="Cursos"></i>
                    <h4>Grados</h4>
                </div>
            </a>

            <a href="html/Asignaturas.html">
                <div class="option">
                    <i class="far fa-sticky-note" title="Asignaturas"></i>
                    <h4>Asignaturas</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Docentes"></i>
                    <h4>Docentes</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Estudiantes"></i>
                    <h4>Estudiantes</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        <h1>Plataforma Instituro Tecnico Industrial</h1><br>
        <p>Aqui podra realizar el control de la informacion de la plataforma</p> <br>

        <p>Estudiantes, Docentes, Administradores y funcionarios.</p>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
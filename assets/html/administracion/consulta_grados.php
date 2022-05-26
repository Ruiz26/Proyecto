<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

$grado=$_GET['grado'];

$sql="SELECT * FROM estudiantes WHERE grado='$grado'";
    $query=mysqli_query($conectar,$sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../../../index.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instituto Tecnico Industrial</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../../css/estilosDatatable.css">
    <link rel="stylesheet" href="../../css/estilosMenu.css">
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

  </head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>

        <nav>
            <div class="menu__side" id="menu_side">

            <div class="name__page">
            <i class="fa-solid fa-school"></i>
            <h4>Instituto Tecnico Industrial</h4>
            </div>

            <div class="options__menu">	

            <a href="Inicio.html">
            <div class="option">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>Inicio</h4>
            </div>
            </a>

            <a href="Matricula.html">
            <div class="option">
            <i class="far fa-file" title="Matricular"></i>
            <h4>Matricular</h4>
            </div>
            </a>
    
            <a href="Grados.html">
            <div class="option">
            <i class="fa-solid fa-book" title="Cursos"></i>
            <h4>Grados</h4>
            </div>
            </a>

            <a href="Asignaturas.html">
            <div class="option">
            <i class="far fa-sticky-note" title="Asignaturas"></i>
            <h4>Asignaturas</h4>
            </div>
            </a>

            <a href="Docentes.html">
            <div class="option">
            <i class="far fa-id-badge" title="Docentes"></i>
            <h4>Docentes</h4>
            </div>
            </a>

            <a href="Estudiantes.php" class="selected">
            <div class="option">
            <i class="far fa-address-card" title="Estudiantes"></i>
            <h4>Estudiantes</h4>
            </div>
            </a>
            <a href="../../../index.php">
            <div class="option">
            <i class="fa-solid fa-arrow-right-from-bracket" title="Cerrar Sesión"></i>
            <h4>Cerrar Sesión</h4>
            </div>
            </a>
            </div>

            </div>
        
        </nav>
    </header>

    
    <main>

    <div>
       <center> <h1 >Lista de Estudiantes</h1><center>
    </div>

    <div style="height:50px"></div>
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Idenficacion</th>
                                <th>Nombres</th>
                                <th>Telefono/Celular</th>
                                <th>Grado</th>
                                <th>Jornada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php  echo $row['identificacion']?></td>
                                    <td><?php  echo $row['nombres']?>
                                    <?php  echo $row['apellidos']?></td>
                                    <td><?php  echo $row['telefono/celular']?></td>
                                    <td><?php  echo $row['grado']?></td>   
                                    <td><?php  echo $row['jornada']?></td>    
                                    <td><center><a href="../estudiantes/perfil.php?id=<?php echo $row['identificacion'] ?>"><button class='btn btn-primary btnEditar'>Mas Info</button>
                                    </a><a href="../../../php/tabla_estudiantes/delete.php?id=<?php echo $row['identificacion'] ?>"><button class='btn btn-danger btnBorrar'>Borrar</button></a></center></td>  
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>
                  
    </main>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../../js/datatable.js"></script>  


    <script src="../../js/script.js"></script>
</body>
</html>
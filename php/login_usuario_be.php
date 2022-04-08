<?php 

session_start();

include 'conexion_be.php';
$boton = $_POST['boton'];

if($boton == "a"){

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

if($correo == "" || $contrasena == ""){

    echo '
    
    <script>
        alert("No pueden haber campos vacíos, favor verificar.");
        window.location = "../index.php";
    </script>

    ';

    exit();

}

if(mysqli_num_rows($verificar_login) > 0){ 


    $_SESSION['usuario'] = $correo;
    header("location: ../assets/index.php");        
    exit();

}else{

    echo'
    
    <script>
        alert("Datos de acceso incorrectos...");
        window.location = "../index.php";
    </script>

    ';

}

mysqli_close();

}//if a


if($boton == "b"){

    echo '
    
    <script>
        window.location = "../assets/recovery.php";
    </script>

    ';

    exit();

}

?>


<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

    if(mysqli_num_rows($verificar_correo) > 0){

        echo '
        
        <script>
            alert("Correo ya existe, favor iniciar sesión.");
            window.location = "../index.php";
        </script>

    ';
        exit();
    
    }elseif (mysqli_num_rows($verificar_usuario) > 0) {
        
        echo '
        
        <script>
            alert("Usuario ya existe, favor digitar otro.");
            window.location = "../index.php";
        </script>

    ';
        exit();
    }


    if($nombre_completo == "" || $correo == "" || $usuario == "" || $contrasena == ""){

        echo '
        
        <script>
            alert("No pueden haber campos vacíos, favor verificar.");
            window.location = "../index.php";
        </script>

        ';

        exit();

    }
    
        $ejecutar = mysqli_query($conexion, $query);


        if($ejecutar){

            echo '
        
                <script>
                    alert("Usuario almacenado exitosamente.");
                    window.location = "../index.php";
                </script>

            ';

        }else{

            echo '
        
                <script>
                    alert("Usuario no almacenado");
                </script>

            ';

        }//else2

    mysqli_close($conexion);

?>
<?php

    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");

    $identificacion = $_POST['identificacion'];
    $nombre_uno = $_POST['nombre_uno'];
    $nombre_dos = $_POST['nombre_dos'];
    $apellido_uno = $_POST['apellido_uno'];
    $apellido_dos = $_POST['apellido_dos'];
    $genero = $_POST['genero'];
    $rh = $_POST['rh'];

    $query = "INSERT INTO persona(identificacion, nombre_uno, nombre_dos, apellido_uno, apellido_dos, genero, rh) 
              VALUES('$identificacion', '$nombre_uno', '$nombre_dos', '$apellido_uno', '$apellido_dos', '$genero', '$rh')";

    if($identificacion == "" || $nombre_uno == "" || $nombre_dos == "" || $apellido_uno == "" || $apellido_dos == "" || $genero == "" || $rh == ""){

        echo '
        
        <script>
            alert("No pueden haber campos vacíos, favor verificar para continuar con el registro.");
            window.location = "../index.php";
        </script>

        ';

        exit();

    }
    
        $ejecutar = mysqli_query($conexion, $query);


        if($ejecutar){

            echo '
        
                <script>
                    alert("Usuario registrado exitosamente.");
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
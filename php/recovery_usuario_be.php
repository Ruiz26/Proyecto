<?php

include 'conexion_be.php';
$boton = $_POST['boton'];

if ($boton == "a") {
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

    if($correo == "" || $contrasena == ""){

        echo '
        
        <script>
            alert("No pueden haber campos vacíos, favor verificar.");
            window.location = "../assets/recovery.php";
        </script>
    
        ';
    
        exit();
    
    }
    
        if(mysqli_num_rows($verificar_login) > 0){ 


            echo "
        
                 <script>
                    var pass;
                    pass=prompt('Introduzca la nueva contraseña');
                 </script>
    
                ";

            $password = "<script> document.write(pass) </script>";
            $password = hash('sha512', $password);
        
            $sql = "update usuarios SET contrasena = '$password' WHERE correo = '$correo' ";
            mysqli_query($conexion, $sql);

            echo '
        
            <script>
                alert("¡Contraseña cambiada correctamente!");
                window.location = "../assets/recovery.php";
            </script>
        
            ';

            exit();
        
        }else{

            echo '
            
            <script>
            alert("Datos incorrectos, favor verificar.");
            window.location = "../assets/recovery.php";
            </script>

            ';

        }
    
    

}else{

        echo '
   
        <script>
           window.location = "../index.php";
        </script>

     ';

    }

?>
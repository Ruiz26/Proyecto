<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../../index.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main><h3>Administrador</h3></main>

</body>
</html>
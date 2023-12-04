<?php

    session_start();
    var_dump($_SESSION);

    if(!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor, debes iniciar sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenidoooo</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>
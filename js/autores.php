<?php
include('conexion.php');

$consultaAutores = $conn->query("SELECT DISTINCT autor FROM libros");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autores</title>
</head>
<body>
    <h1>Listado de Autores</h1>

    <?php
    
    if ($consultaAutores->rowCount() > 0) {
        
        while ($autor = $consultaAutores->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>{$autor['autor']}</p>";
        }
    } else {
        echo "<p>No hay autores disponibles.</p>";
    }
    ?>

</body>
</html>

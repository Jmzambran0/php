<?php
$nombre = $_GET['nombre'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];
$nota5 = $_GET['nota5'];

$prom = (($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Nota 5</th>
            <th>Promedio</th>
        </tr>
        <tr>
            <?php
            echo "<td>$nombre</td>";
            echo "<td>$nota1</td>";
            echo "<td>$nota2</td>";
            echo "<td>$nota3</td>";
            echo "<td>$nota4</td>";
            echo "<td>$nota5</td>";
            echo "<td>$prom</td>";
            ?>
        </tr>
        <br>
        <?php
        if ($prom < 3) {
            echo "<h3>No has aprobado :c</h3>";
        } else {
            echo "<h3>Has aprobado! :D</h3>";
        }
        ?>
    </table>
</body>
</html>
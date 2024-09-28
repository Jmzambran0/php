<?php
$num = $_GET['numero'];
for($i=1; $i<= $num; $i++) {
    echo '<br>';
    echo "$i: " . ($i % 2 == 0 ? 'par' : 'impar');
    echo '<br>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular</title>
</head>
<body>
    <h1>El numero ingresado es: <?php echo $num; ?> </h1>
    <br>
    <ul>
        <?php
        for($i = 1; $i<= intval($num); $i++) {
            echo '<li>';
            echo "$i: " . ($i % 2 == 0 ? 'par' : 'impar');
            echo '</li>';
        }
        ?>
    </ul>
</body>
</html>
<?php
require '../models/database/ejemploDb.php';
require '../models/entity/contacto.php';
require '../models/queries/ContactosQueries.php';
require '../views/contactosView.php';
require '../controllers/contactosController.php';

use App\views\ContactosViews;

$contactosView = new ContactosViews();
$datosFormulario = $_POST;
$msg = $contactosView->getMsgConfirmarContacto($datosFormulario);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar accion</title>
</head>
<body>
    <header>
        <h1>Resultado de la operacion</h1>
    </header>
    <section>
        <?php echo $msg; ?>
        <br>
        <a href="inicio.php">Volver al inicio</a>
    </section>
</body>
</html>
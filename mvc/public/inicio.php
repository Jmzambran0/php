<?php
require '../models/database/ejemploDb.php';
require '../models/entity/contacto.php';
require '../models/queries/ContactosQueries.php';
require '../views/contactosView.php';
require '../controllers/contactosController.php';

use App\views\ContactosViews;

$contactosViews = new ContactosViews();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <header>
        <h1>Lista de contactos</h1>
    </header>
    <section>
        <br>
        <!-- Tabla de contactos -->
         <?php
         echo $contactosViews->tablaContactos();
         ?>
        <br>
    </section>
</body>
</html>
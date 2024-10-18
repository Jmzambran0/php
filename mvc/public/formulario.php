<?php

use App\controllers\ContactosController;

require '../models/database/ejemploDb.php';
require '../models/entity/contacto.php';
require '../models/queries/ContactosQueries.php';
require '../views/contactosView.php';
require '../controllers/contactosController.php';

$titulo = empty($_GET['cod'])?'Crear contacto':'Modificar contacto';
$nombre = '';
$telefono = '';
$email = '';

if (!empty($_GET['cod'])){
    $controller = new ContactosController();
    $contactos = $controller->getContacto($_GET('cod'));
    $nombre = $contacto->get('nombre');
    $telefono = $contacto->get('telefono');
    $email = $contacto->get('email');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear contacto</h1>
    <section>
        <form action="confirmarContacto.php" method="POST">
            <?php
            if(!empty($_GET('cod'))){
                echo '<input type="hidden" name="cod" value=""'.$_GET('cod').'">';
            }
            ?>
            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php echo$nombre ?>" required>
            </div>
            <div>
                <label>Telefono</label>
                <input type="number" name="telefono" value="<?php echo$telefono ?>" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo$email ?>" required>
            </div>
            <div>
                <button type="submit">Guardar contacto</button>
            </div>
        </form>
    </section>
</body>
</html>
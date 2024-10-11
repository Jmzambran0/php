<?php
//require 'database/ejemplo_db.php';
include 'database/ejemplo_db.php';

$ejemploDb = new EjemploDb();
$sql = "select id, nombre, email, telefono from contactos";
$resultDB = $ejemploDb->query($sql);
if ($resultDB->num_rows > 0) {
    while ($row = $resultDB->fetch_assoc()) {
        echo '<br>';
        echo 'Nombre: '.$row['nombre'].'<br>';
        echo 'Email: '.$row['email'].'<br>';
        echo 'Telefono: '.$row['telefono'].'<br>';

    }
}

$ejemploDb->close();

?>
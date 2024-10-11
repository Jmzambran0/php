<?php
require 'database/ejemplo_db.php';
$ejemploDb = new EjemploDb();

$sql = "update contactos set ";
$sql .= "nombre='pablito', ";
$sql .= "email='pablito@pablito.com', ";
$sql .= "telefono='43678' ";
$sql .= "where id=1";


$resultDB = $ejemploDb->query($sql);

if ($resultDB) {
    echo 'Datos guardados';
} else {
    echo 'No se pudo guardar la informacion';
}

$ejemploDb->close();

?>
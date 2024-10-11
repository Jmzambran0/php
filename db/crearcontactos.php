<?php
require 'database/ejemplo_db.php';
$ejemploDb = new EjemploDb();

$sql = "insert into contactos (nombre,email,telefono)values";
$sql .= "('Juanita','juanita@juanita.com','556773')";

$resultDB = $ejemploDb->query($sql);

if ($resultDB) {
    echo 'Datos guardados';
} else {
    echo 'No se pudo guardar la informacion';
}

$ejemploDb->close();

?>
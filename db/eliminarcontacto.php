<?php
require 'database/ejemplo_db.php';
$ejemploDb = new EjemploDb();

$sql = "delete from contactos where id=1";

$resultDB = $ejemploDb->query($sql);

if ($resultDB) {
    echo 'Datos borrados';
} else {
    echo 'No se pudo borrar la informacion';
}

$ejemploDb->close();

?>
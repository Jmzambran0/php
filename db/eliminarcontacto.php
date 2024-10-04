<?php

use LDAP\Result;

$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'ejemplo_dl';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);
if ($conexDB->connect_error) {
    echo $conexDB->connect_error;
    die();
} else {
    echo 'Conexion exitosa!!<br>';
}

$sql = "delete from contactos where id=1";

$resultDB = $conexDB->query($sql);

if ($resultDB) {
    echo 'Datos borrados';
} else {
    echo 'No se pudo borrar la informacion';
}

$conexDB->close();

?>
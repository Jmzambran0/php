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

$sql = "select id, nombre, email, telefono from contactos";
//$sql = "select * from contactos;
$resultDB = $conexDB->query($sql);
if ($resultDB->num_rows > 0) {
    while ($row = $resultDB->fetch_assoc()) {
        echo '<br>';
        echo 'Nombre: '.$row['nombre'].'<br>';
        echo 'Email: '.$row['email'].'<br>';
        echo 'Telefono: '.$row['telefono'].'<br>';

    }
}

$conexDB->close();

?>
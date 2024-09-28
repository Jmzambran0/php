<?php
$nombre = 'Pepe';
echo 'Hola ' . $nombre;
echo '<br>';
echo "Hola <b>" . $nombre . "</b>";

$edad = 12;
$promedio = 3.5;
$mayorEdad = TRUE; //FALSE
$numeros = [1, 2, 3, 4, 5];
echo $numeros[0];

/**
 * && and
 * || or
 * ! negacion
 * == igual
 * > mayor
 * < menor
 * >= mayor o igual
 * <= menor o igual
 * != diferente
 */

 if(TRUE) {
    // bloque
 } elseif(TRUE) {
    //bloque
 } else if(TRUE) {
    //bloque
 } else {
    //bloque
 }

$estado = 'a';

 switch ($estado) {
    case 'a':
        //bloque
        break;
    case 'b':
        //bloque
        break;
    default:
        //bloque
        break;
 }

 $numeros = [12,11,10,9,8,7,6,5,4,3,2,1];

 echo '<br>';

 //for -------------------

 for ($i=0; $i<count(($numeros)); $i++){
    echo $numeros[$i];
    echo '<br>';
 }

 echo '<br>';

 //While -------------------
$i = 0;
while ($i < count($numeros)){
    echo $numeros[$i];
    echo '<br>';
    $i++;
}

echo '<br>';
 
//Do While -------------------
$i = 0;
do {
    echo $numeros[$i];
    echo '<br>';
    $i++;
}
while ($i < count($numeros));

echo '<br>';
 
//Foreach -------------------

foreach($numeros as $n){
    echo $n;
    echo '<br>';
}

foreach($numeros as $x => $n){
    echo "$x: $n";
    echo '<br>';
}

function saludar($nombre) {
    echo '<br>';
    echo "Hola $nombre";
}

saludar('Juanita');

function saludo($nombre){
    return "Hola, $nombre";
}

echo saludo('Pepe');

// $a = {
//    'nombre' = 'Pepe';
//    'edad' = 20; 
// }
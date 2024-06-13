<?php
$largo = intval(readline("Ingresa el largo del terreno en metros: "));
$ancho = intval(readline("Ingresa el ancho del terreno en metros: "));

$area = $largo*$ancho;

echo "\n$area metros cuadrados\n";


$mensaje = ($area >= 1000) ? "\nEl terreno es adecuado para cultivos extensivos.\n" :
                             "\nEl terreno es más adecuado para cultivos de jardín o huerto.\n"; 

echo "$mensaje";

?>
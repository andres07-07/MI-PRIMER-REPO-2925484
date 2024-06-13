<?php
$num = readline("Ingresa tu edad: ");

if ($num >= 18) :
    $lic = readline("¿Tienes licencia de conducir? (si/no): ");
    echo ($lic == "si") ? "Puedes conducir" : 
         (($lic == "no") ? "Debes obtener una licencia de conducir primero" :
                           "Respuesta no válida. Debes ingresar 'si' o 'no'.");
else :
    echo "No puedes conducir";
endif;
?>
<?php
$numcam = intval(readline("Ingresa el número de camisas a comprar: "));
$precporcam = intval(readline("Ingresa el precio por camisa: "));

# Usamos un operador ternario para determinar el descuento
$descuento = ($numcam >= 3) ? 0.2 : 0.1;

# Calculamos el precio total sin descuento
$total_sin_descuento = $numcam * $precporcam;

# Calculamos el total con descuento
$total_con_descuento = $total_sin_descuento * (1 - $descuento);

echo "El precio total de su compra es: " . $total_con_descuento . " COP\n";


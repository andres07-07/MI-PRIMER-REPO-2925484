<?php
$numart = intval(readline("Ingresa el número de articulos comprados: "));
$precunitart = intval(readline("Ingresa el precio por articulo: "));

# Usamos un operador ternario para determinar el descuento
$descuento = ($numart >= 10) ? 0.1 : 0.0;

# Calculamos el precio total sin descuento
$total_sin_descuento = $numart * $precunitart;

# Calculamos el total con descuento
$total_con_descuento = $total_sin_descuento * (1 - $descuento);

echo "El precio total de su compra es: " . $total_con_descuento . " COP\n";
?>
<?php
function calcular_total($articulos) {
    // Calcular el precio total sin descuento
    $total_sin_descuento = array_sum($articulos);
    
    // Determinar el descuento
    if (count($articulos) >= 10) {
        $descuento = 0.10;
    } else {
        $descuento = 0;
    }
    
    // Calcular el total con descuento
    $total_con_descuento = $total_sin_descuento * (1 - $descuento);
    
    return $total_con_descuento;
}

// Ejemplo de uso
$articulos = [];

echo "Ingrese los precios de los artículos separados por espacios: ";
$input = trim(fgets(STDIN)); // Lee la entrada del usuario desde la consola

// Convertir la entrada en un array de precios
$articulos = array_map('floatval', explode(' ', $input));

$total = calcular_total($articulos);
echo "El total a pagar es: $" . number_format($total, 2) . "\n";
?>
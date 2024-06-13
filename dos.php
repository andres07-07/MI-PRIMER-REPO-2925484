<?php
function calcular_total($articulos) {
    // Calcular el precio total sin descuento
    $total_sin_descuento = array_sum($articulos);
    
    // Aplicar el descuento usando un operador ternario
    $descuento = count($articulos) >= 10 ? 0.10 : 0;
    $total_con_descuento = $total_sin_descuento * (1 - $descuento);
    
    return $total_con_descuento;
}

// Ejemplo de uso
$num_articulos = (int)readline("Ingrese el número de artículos: ");
$articulos = [];

for ($i = 0; $i < $num_articulos; $i++) {
    $precio = (float)readline("Ingrese el precio del artículo " . ($i + 1) . ": ");
    $articulos[] = $precio;
}

$total = calcular_total($articulos);
echo "El total a pagar es: $" . number_format($total, 2) . "\n";
?>
<?php
$mes = readline("Ingresa el número del mes correspondiente: ");


$meses =  ["1" =>"Enero",
            "2" =>"Febrero",
            "3" =>"Marzo",
            "4" =>"Abril",
            "5" =>"Mayo",
            "6" =>"Junio",
            "7" =>"Julio",  
            "8" =>"Agosto", 
            "9" =>"Septiembre", 
            "10" =>"Octubre",  
            "11" =>"Noviembre", 
            "12" =>"Diciembre",      ];

$esInvierno = ($mes >= 4 && $mes <= 11);

$mensaje = $esInvierno ? "Se debe usar la siembra en almacigo." : "Se puede realizar la siembra directa.";

echo "$mensaje";

?>
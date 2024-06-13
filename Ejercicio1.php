<?php
$numcam = intval(readline("Ingresa el número de camisas a comprar: "));
$precporcam = intval(readline("Ingresa el precio por camisa: "));
$desc1 = $precporcam-(0.1 * $precporcam);
$desc2 = $precporcam-(0.2 * $precporcam);

if ( $numcam < 3):
    echo $desc1*$precporcam;
    echo "El precio total de su compra es:". $desc1*$numcam. "COP";
elseif ( $numcam >= 3):
    echo $desc2*$precporcam;
    echo "El precio total de su compra es:". $desc2*$numcam. "COP";
endif;

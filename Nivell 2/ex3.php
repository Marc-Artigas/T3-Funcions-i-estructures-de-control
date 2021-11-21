<?php

 function costTotal($numXocolata,$numXiclets,$numCarmels){

    $total=($numXocolata*1)+($numXiclets*0.5)+($numCarmels*1.50);
    echo "El cost total de la compra és de ".$total."€.";
 }

echo costTotal(2,1,1);

?>
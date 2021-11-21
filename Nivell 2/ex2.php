<?php
  
    function costTrucada($minuts){
        $minutsAddicionals=$minuts-3;
        $costMinutsAddicionals=$minutsAddicionals*5;
        if($minuts<3){
            echo "El cost de la trucada és de 10 cèntims".".";
        } else {
            echo "El cost de la trucada és de ".(10+ $costMinutsAddicionals." cèntims.");
        }
       
    }

    echo costTrucada(10);


?>
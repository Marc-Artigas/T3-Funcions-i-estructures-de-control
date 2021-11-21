<?php
  
    function costTrucada($minuts){
        $minutsAddicionals=$minuts-3;
        if($minuts<3){
            echo "El cost de la trucada és de 10 cèntims".".";
        } else {
            echo "El cost de la trucada és de ".(10+($minutsAddicionals*5).".");
        }
    }

    echo costTrucada(10);







?>
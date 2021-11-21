<?php

    $minuts=2;
    $minutsAddicionals=$minuts-3;

        if($minuts<3){
            echo "El cost de la trucada és de 10 cèntims";
        } else {
            echo "El cost de la trucada és de ".(10+($minutsAddicionals*5).".");
        }

    // $minuts;
    // $costTrucada;
    // $minutsAddicional;
    // function costTrucada($minuts,$minutsAddicional){
    //     for($minuts>3;$minuts<=$minutsAddicional;$minuts++){
    //         echo $minuts."<br>";
    //         $totalMinuts=$minuts;
            
           
    //     }
    // }

    // echo costTrucada(3,8);
    // $costTrucada= 10 + ($minutsAddicional*5);
    // echo $costTrucada;
    // if($minuts<3){
    //     echo "El cost de la trucada és de 10 cèntims";      
    // } else {
    //     for($minuts>3;$minuts=$minutsTrucada;$minuts++){

    //     }
    // }








?>
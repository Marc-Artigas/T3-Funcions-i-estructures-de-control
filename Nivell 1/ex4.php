<?php

function myfunction($y=10){
    for($x=2;$x<=$y;$x+=2){
        echo ($x);
        if($x !==$y){
            echo", ";       
        } else {
            echo ".";
         }
    }
}
echo myfunction();//comptarà de dos en dos fins al valor del paràmetre.
?>
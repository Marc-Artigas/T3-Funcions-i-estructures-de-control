<?php

function myfunction($y){
    for($x=2;$x<=$y;$x+=2){
        echo ($x);
        if($x !==$y){
            echo", ";       
        } else {
            echo ".";
         }
    }
}
echo myfunction(30);//comptarà de dos en dos fins al valor del paràmetre.
?>
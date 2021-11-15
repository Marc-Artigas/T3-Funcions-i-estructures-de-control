<?php

function myfunction($n){
    if($n>=60){ 
    echo "Primera Divisió";
    } else if($n<60 and $n>=45) {   
    echo "Segona Divisió";
    } else if($n<45 and $n>=33){    
    echo "Tercera Divisió";
    }else if($n<33){
        echo "L'estudiant reprovarà";
    }
}   
echo myfunction(45);//introduint el paràmetre comprovem que funciona.

?>
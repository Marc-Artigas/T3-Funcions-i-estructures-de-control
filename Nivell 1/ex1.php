<?php
   
function myfunction($n){
    $n1=($n%2);
    if ($n1==0){
        echo $n." és parell.";
    } else {
        echo $n." és imparell.";
    }
}
echo myFunction(35)."<br>";
// echo myFunction(28)."<br>"; //comprovem que funciona
// echo myFunction(31)."<br>";

?>
<?php

$n=rand(1,100);
// echo $n;
function isBitten($n){
if($n<51){
    echo "Charlie et mossegarà el dit.";
} else {
    echo "Charlie no et mossegarà.";
}
}
echo isBitten($n);

?>
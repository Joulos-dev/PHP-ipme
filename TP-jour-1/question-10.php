<?php

$mot = 'radar';
$sliced = str_split($mot);
$reverseSliced = [];

for($i=count($sliced)-1;$i >= 0;$i--){

    $reverseSliced[] = $sliced[$i];
    var_dump("coucou");
}

$true = "c'est un palindrome";
$false = "ce n'est pas un palindrome";

if($sliced == $reverseSliced) {
    echo $true;
} else {
    echo $false;
}

?>
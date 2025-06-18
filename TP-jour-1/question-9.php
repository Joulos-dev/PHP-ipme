<?php

$phrase = 'Bonjour tout le monde';
$phraseMin = strtolower($phrase);
$sliced = str_split($phraseMin);
var_dump($sliced);
$nbVoyels = 0;

$array = ['a', 'e', 'i', 'o', 'u', 'y'];
var_dump($array);

foreach($sliced as $index => $char){
    if (in_array($char, $array)){
        $nbVoyels = $nbVoyels + 1;
    }

};

echo $nbVoyels;

?>
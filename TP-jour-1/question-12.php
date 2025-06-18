<?php

$limite = 88;
$multipleDe = 8;
$result = 0;

for($i = 1;$i<= ($limite/$multipleDe); $i++){
    $result += 1;
    echo $result . "</br>";
}

echo "Il y a " . $result . " multiple de " . $multipleDe . " entre 1 et " . $limite;

// DEUXIEME METHODE ENCORE PLUS SIMPLE //
$test = round($limite / $multipleDe);
echo '<br>';
echo $test;

?>
<?php

$valeurs = [8, 3, 5, 1, 9];
$result = $valeurs[0];

foreach($valeurs as $value){
    if($result >= $value) {
        $result = $value;
    }
}

echo "le plus petit nombre est : " . $result;

//phpinfo();


?>
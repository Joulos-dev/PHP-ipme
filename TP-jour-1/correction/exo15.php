<?php
$valeurs = [8, 3, 5, 1, 9];
$min = $valeurs[0];

foreach ($valeurs as $val) {
    if ($val < $min) {
        $min = $val;
    }
}

echo "Le plus petit nombre est : " . $min;
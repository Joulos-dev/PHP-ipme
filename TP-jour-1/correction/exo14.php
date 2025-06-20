<?php
$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 42;
$positions = [];

foreach ($nombres as $index => $val) {
    if ($val === $recherche) {
        $positions[] = $index;
    }
}

var_dump($positions);
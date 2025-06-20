<?php
$mot = 'ordinateur';
$lettre = 'r';
$positions = [];

for ($i = 0; $i < strlen($mot); $i++) {
    if ($mot[$i] === $lettre) {
        $positions[] = $i;
    }
}

var_dump($positions);
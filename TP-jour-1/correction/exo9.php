<?php
$phrase = 'Bonjour tout le monde';
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$nbVoyelles = 0;

$lettres = str_split(strtolower($phrase));
foreach ($lettres as $lettre) {
    if (in_array($lettre, $voyelles)) {
        $nbVoyelles++;
    }
}

echo "Nombre de voyelles : " . $nbVoyelles;
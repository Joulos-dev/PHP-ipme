<?php
$grille = [
    ['X', 'O', 'X'],
    [' ', 'X', ' '],
    ['O', 'O', 'O']
];

// Affichage
foreach ($grille as $ligne) {
    echo implode(' | ', $ligne);
}
echo '<br>';

// Vérifie lignes
foreach ($grille as $ligne) {
    if ($ligne[0] !== ' ' && $ligne[0] === $ligne[1] && $ligne[1] === $ligne[2]) {
        echo "Gagnant ligne : " . $ligne[0];
        return;
    }
}

// Vérifie colonnes
for ($col = 0; $col < 3; $col++) {
    if ($grille[0][$col] !== ' ' && $grille[0][$col] === $grille[1][$col] && $grille[1][$col] === $grille[2][$col]) {
        echo "Gagnant colonne : " . $grille[0][$col];
        return;
    }
}

// Vérifie diagonales
if ($grille[0][0] !== ' ' && $grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2]) {
    echo "Gagnant diagonale : " . $grille[0][0];
    return;
}

if ($grille[0][2] !== ' ' && $grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0]) {
    echo "Gagnant diagonale : " . $grille[0][2];
    return;
}

echo "Pas de gagnant.";
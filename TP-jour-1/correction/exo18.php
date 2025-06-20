<?php
$de1 = rand(1, 6);
$de2 = rand(1, 6);
$sum = $de1 + $de2;

echo "Dé 1 : " . $de1;
echo '<br>';
echo "Dé 2 : " . $de2;
echo '<br>';
echo "Somme : " . $sum;
echo '<br>';

if ($sum == 7 || $sum == 11) {
    echo "Gagné !";
} else {
    echo "Perdu";
}

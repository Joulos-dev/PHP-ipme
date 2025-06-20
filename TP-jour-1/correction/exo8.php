<?php
$a = 14;
$b = 22;
$c = 6;

if ($a >= $b && $a >= $c) {
    echo "Le plus grand est : " . $a;
} elseif ($b >= $a && $b >= $c) {
    echo "Le plus grand est : " . $b;
} else {
    echo "Le plus grand est : " . $c;
}
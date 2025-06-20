<?php
$a = 12;
$b = 4;
$operations = ['+', '-', '*', '/'];

foreach ($operations as $op) {
    switch ($op) {
        case '+':
            echo $a . " + " . $b . " = " . ($a + $b);
            echo "<br>";
            break;
        case '-':
            echo $a . " - " . $b . " = " . ($a - $b);
            echo "<br>";
            break;
        case '*':
            echo $a . " * " . $b . " = " . ($a * $b);
            echo "<br>";
            break;
        case '/':
            echo $a . " / " . $b . " = " . ($a / $b);
            echo "<br>";
            break;
    }
}

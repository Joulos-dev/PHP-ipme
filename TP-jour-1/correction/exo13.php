<?php
$nombres = [1, 3, 5, 7, 9];
$doubles = [];

foreach ($nombres as $val) {
    $doubles[] = $val * 2;
}

print_r($doubles);
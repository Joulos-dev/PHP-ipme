<?php
$mot = 'radar';
$inverse = strrev($mot);

if (strtolower($mot) == strtolower($inverse)) {
    echo $mot . " est un palindrome";
} else {
    echo $mot . " n'est pas un palindrome";
}
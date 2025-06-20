<?php
$mysteres = [38, 72, 15];
$essais = 0;
foreach ($mysteres as $mystere) {
    //nouvelle boucle do->while
    //fait -> pendant que
    do {
        $proposition = rand(1, 100);
        $essais++;
    } while ($proposition != $mystere);

}

echo $essais;
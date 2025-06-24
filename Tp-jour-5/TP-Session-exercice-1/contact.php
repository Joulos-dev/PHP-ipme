<?php

session_start();

if (isset($_SESSION['contact']))
    $_SESSION['contact'] = $_SESSION['contact'] + 1;
else
    $_SESSION['contact'] = 1;

?>

<nav>
    <a href="accueil.php">Accueil</a>
    <a href="test.php">Test</a>
    <a href="random.php">Random</a>
</nav>


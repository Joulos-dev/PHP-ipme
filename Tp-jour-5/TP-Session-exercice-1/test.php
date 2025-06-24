<?php

session_start();

if (isset($_SESSION['test']))
    $_SESSION['test'] = $_SESSION['test'] + 1;
else
    $_SESSION['test'] = 1;

?>

<nav>
    <a href="contact.php">Contact</a>
    <a href="accueil.php">Accueil</a>
    <a href="random.php">Random</a>
</nav>


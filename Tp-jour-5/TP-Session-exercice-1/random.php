<?php

session_start();

if (isset($_SESSION['random']))
    $_SESSION['random'] = $_SESSION['random'] + 1;
else
    $_SESSION['random'] = 1;


?>

<nav>
    <a href="contact.php">Contact</a>
    <a href="test.php">Test</a>
    <a href="accueil.php">Accueil</a>
</nav>


<?php

session_start();

var_dump($_SESSION['utilisateur']);
?>

<p> Vous êtes connecter en tant que <?php echo $_SESSION['utilisateur'] ?></p>


<a href="log-out.php">Log out</a>


<?php

var_dump($_GET);



if(
    isset($_GET['prenom']) &&
    $_GET['prenom'] !== "" &&
    isset($_GET['nom']) &&
    $_GET['nom'] !== "" &&
    isset($_GET['age']) &&
    $_GET['age'] !== ""
){
    echo "<p>Bonjour " . $_GET['prenom'] . " " . $_GET['nom'] . " vous avez " . $_GET['age'] ." ans.</p> ";
} else {
  echo '<script> alert("coucou") </script>';
}



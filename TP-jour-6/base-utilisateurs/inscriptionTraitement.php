<?php

session_start();

include 'pdo.php';

if(
    isset($_POST['adresse-mail']) &&
    isset($_POST['identifiant']) &&
    isset($_POST['mdp']) &&
    isset($_POST['mdp-check']) &&
    $_POST['adresse-mail'] != "" &&
    $_POST['identifiant'] != "" &&
    $_POST['mdp'] != ""  &&
    $_POST['mdp-check'] === $_POST['mdp'] ) {




         $sql = "INSERT INTO users (adresse_mail, identifiant, mdp) VALUES (:adresse_mail, :identifiant, :mdp)";
         $stmt = $pdo->prepare($sql);
         $stmt->execute([
             'adresse_mail' => $_POST['adresse-mail'],
             'identifiant' => $_POST['identifiant'],
             'mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT)
        ]);

             $_SESSION['user'] = $_POST['identifiant'];
             header('Location: index.php?inscription=1');

} else {
       header('Location: inscription.php?failed=1');
}



//faire une condition pour éviter les doublons d'email
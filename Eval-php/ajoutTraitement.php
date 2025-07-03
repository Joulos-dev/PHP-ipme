<?php

session_start();

include 'pdo.php';

if(
    isset($_POST['nom']) &&
    isset($_POST['adresse']) &&
    isset($_POST['nb_pieces']) &&
    isset($_POST['prix']) &&
    $_POST['nom'] != "" &&
    $_POST['adresse'] != "" &&
    $_POST['nb_pieces'] != ""  &&
    $_POST['prix'] != "" ) {

        $sql = "INSERT INTO maison (nom, adresse, nb_pieces, prix) VALUES (:nom, :adresse, :nb_pieces, :prix)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
        'nom' => htmlspecialchars($_POST['nom']),
        'adresse' => htmlspecialchars($_POST['adresse']),
        'nb_pieces' => htmlspecialchars($_POST['nb_pieces']),
        'prix' => htmlspecialchars($_POST['prix'])
        ]);

        header('Location: index.php?ajout=ok');

    } else {
        header('Location: ajout.php?failed=1');
    }

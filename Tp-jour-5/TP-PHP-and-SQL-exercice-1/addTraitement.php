<?php

include 'pdo.php';

if(
    isset($_GET['title']) &&
    isset($_GET['genre']) &&
    isset($_GET['platform']) &&
    isset($_GET['rating']) &&
    $_GET['title'] != "" &&
    $_GET['genre'] != "" &&
    $_GET['platform'] != "" &&
    $_GET['rating'] >= 0 ) {



    //autre requete tu recupere le jeu par son id pour éviter les doublons dans la base de données


    $sql = "INSERT INTO game (title, genre, platform, rating) VALUES (:title, :genre, :platform, :rating)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'title' => $_GET['title'],
        'genre' => $_GET['genre'],
        'platform' => $_GET['platform'],
        'rating' => $_GET['rating']
        ]);
    }

header('Location: index.php?success=1');

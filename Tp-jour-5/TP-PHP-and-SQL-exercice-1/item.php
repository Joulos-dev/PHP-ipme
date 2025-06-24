<a href="index.php">Retour à l'accueil</a>

<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=gamedb;charset=utf8',
    'root',
    ''
);

$sql = "SELECT * FROM game WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);
$selectedGame = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($selectedGame);


<a href="index.php">Retour à l'accueil</a>

<?php

include 'pdo.php';

$sql = "SELECT * FROM game WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);
$selectedGame = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "DELETE FROM game WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);

header('Location: index.php?delete=1');

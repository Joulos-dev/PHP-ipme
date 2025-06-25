<?php

include 'pdo.php';

$sql = "UPDATE game SET title = :title, genre = :genre, platform = :platform, rating = :rating WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'genre' => $_POST['genre'],
    'platform' => $_POST['platform'],
    'rating' => $_POST['rating']
]);


header('Location: index.php?updated=1');
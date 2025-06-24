<?php

// récupere la base de donnée sur localhost ( wamp )
$pdo = new PDO(
    'mysql:host=localhost;dbname=spotify;charset=utf8',
    'root',
    ''
);

var_dump($pdo);

// ON RECUPERE PLUSIEURS LIGNES AVEC fetchAll //

//on tape la requete en texte
$sql = "SELECT * FROM song";

// on prépare la requete
$stmt = $pdo->prepare($sql);

// on execute la requete
$stmt->execute();

// on récupere les datas
// le fetchAll = permet de récuperer plusieurs lignes
// fetch_assoc = récupere les valeurs sous forme de tableau associatif
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($songs);


// ON RECUPERE UNE SEULE LIGNE PAR ID (fetch) //

$sql = "SELECT * FROM song WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 1]);

// LE fetch simple permet de récuperer une ligne
$songId = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($songId);

// ON RECUPERE UNE SEULE LIGNE PAR LABEL (fetch)

$sql = "SELECT * FROM song WHERE title = :titre";
$stmt = $pdo->prepare($sql);
$stmt->execute(['titre' => 'Petite Marie']);
$songLabel = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($songLabel);

// INSERER UN ELEMENT (song) //

//$sql = "INSERT INTO song (title, description, note) VALUES (:titre, :description, :note)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([
//    'titre' => 'Montagne',
//    'description' => 'Biga Ranx',
//    'note' => 17
//]);

// INSERER PLUSIEURS ELEMENTS (songs) //

//$songsInsert = [
//    ['titre' => 'NQNTMQMQMB', 'description' => 'album de vald 1', 'note' => 18],
//    ['titre' => 'X', 'description' => 'album de vald 2', 'note' => 19],
//    ['titre' => 'Pandemonium Reloaded', 'description' => 'album de vald 3', 'note' => 16],
//];
//
//$sql = "INSERT INTO song (title, description, note) VALUES (:titre, :description, :note)";
//$stmt = $pdo->prepare($sql);
//
//foreach ($songsInsert as $song) {
//    $stmt->execute($song);
//}


// SUPPRIMER UN FILM PAR SON ID //

//$sql = "DELETE FROM song WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id' => 2]);

// METTRE A JOUR UN FILM //

$sql = "UPDATE song SET note = :note WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'note' => 5,
    'id' => 3
]);
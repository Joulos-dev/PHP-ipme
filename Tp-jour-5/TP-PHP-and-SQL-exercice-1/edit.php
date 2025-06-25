<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>

</body>
</html>

<a href="index.php">Retour à l'accueil</a>

<?php

include 'pdo.php';

$sql = "SELECT * FROM game WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);
$selectedGame = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($selectedGame);

?>


<form method="post" action="editTraitement.php">

    <label for="title">title</label>
    <input type="text" id="title" name="title" value="<?php echo $selectedGame['title']?>">
    <label for="genre">genre</label>
    <input type="text" id="genre" name="genre" value="<?php echo $selectedGame['genre']?>">
    <label for="platform">platform</label>
    <input type="text" id="platform" name="platform" value="<?php echo $selectedGame['platform']?>">
    <label for="rating">rating</label>
    <input type="number" id="rating" name="rating" value="<?php echo $selectedGame['rating']?>">

    <input name="id" hidden="" value="<?php echo $selectedGame['id'] ?>">

    <button type="submit">Update</button>
</form>

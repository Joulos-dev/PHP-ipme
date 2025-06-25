<a href="index.php">Retour à l'accueil</a>

<?php

include 'pdo.php';

$sql = "SELECT * FROM game WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['id']]);
$selectedGame = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($selectedGame);

?>

<div class="card">
    <h2> <?php echo $selectedGame['title'] ?></h2>
    <p> <strong>Genre:</strong> <?php echo $selectedGame['genre'] ?> </p>
    <p> <strong>Platform:</strong> <?php echo $selectedGame['platform'] ?> </p>
    <p> <strong>Rating:</strong> <?php echo $selectedGame['rating'] ?> </p>
</div>

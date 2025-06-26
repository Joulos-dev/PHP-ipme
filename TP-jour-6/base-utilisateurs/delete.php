

<?php include 'pdo.php';

session_start();

//$sql = "SELECT * FROM users WHERE identifiant = :identifiant";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['identifiant' => $_SESSION['identifiant']]);
//$selectedGame = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "DELETE FROM users WHERE identifiant = :identifiant";
$stmt = $pdo->prepare($sql);
$stmt->execute(['identifiant' => $_SESSION['identifiant']]);

header('Location: index.php?delete=1');
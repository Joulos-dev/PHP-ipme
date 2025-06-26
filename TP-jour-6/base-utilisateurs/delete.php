

<?php include 'pdo.php';

session_start();
var_dump($_SESSION);

$sql = "DELETE FROM users WHERE identifiant = :identifiant";
$stmt = $pdo->prepare($sql);
$stmt->execute(['identifiant' => $_SESSION['user']]);

session_destroy();
header('Location: index.php?delete=1');

<?php require 'pdo.php';

session_start();

if(
    isset($_POST['id-mail']) &&
    isset($_POST['mdp']) &&
    $_POST['id-mail'] != "" &&
    $_POST['mdp'] != ""){

        $sql = "SELECT * FROM users WHERE adresse_mail = :adresse_mail or identifiant = :identifiant";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'adresse_mail' => $_POST['id-mail'],
            'identifiant' => $_POST['id-mail']
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(isset($_POST['mdp'])){
            if(password_verify($_POST['mdp'], $user['mdp'])){
                $_SESSION['user'] = $user['identifiant'];
                header('Location: index.php');
            }
        }
    } else {
        header('Location: inscription.php?failed=1');
    }





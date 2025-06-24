<?php

session_start();

$users = [
    ["login" => "alice", "password" => "1234"],
    ["login" => "bob", "password" => "azerty"],
    ["login" => "charlie", "password" => "mdp"],
    ["login" => "david", "password" => "pass123"],
    ["login" => "eve", "password" => "12345"],
    ["login" => "frank", "password" => "secret"],
    ["login" => "grace", "password" => "abc123"],
    ["login" => "heidi", "password" => "pwdpwd"],
    ["login" => "ivan", "password" => "0000"],
    ["login" => "judy", "password" => "monkey"],
];
?>

<form method="post">

    <label for="login">Login</label>
    <input type="text" id="login" name="login">

    <label for="mdp">Mot de passe</label>
    <input type="text" id="mdp" name="mdp">

    <button type="submit">Submit</button>
</form>

<?php

var_dump($_POST);

if(
    isset($_POST['login']) &&
    isset($_POST['mdp']) &&
    $_POST['login'] != "" &&
    $_POST['mdp'] != ""
){
    foreach($users as $user){
        if(
                $user['login'] === $_POST['login'] &&
                $user['password'] === $_POST['mdp'] ) {

            $_SESSION['utilisateur']= $_POST['login'];

                header('Location: index.php');
        } else {
                echo '<script>alert("login ou password incorrect")</script>';
        }
    }
} //else {
   // echo '<script>alert("vous devez remplir tout les champs")</script>';
//}

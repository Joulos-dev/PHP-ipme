<?php


if (
    isset($_POST['nom']) &&
    $_POST['nom'] !== "" &&
    isset($_POST['genre']) &&
    $_POST['genre'] !== "" &&
    isset($_POST['languages']) &&
    $_POST['languages'] !== "" &&
    isset($_POST['biographie']) &&
    $_POST['biographie'] !== ""
) {
    $listLanguages = "";
    $nom = htmlspecialchars($_POST['nom']);
    $genre = htmlspecialchars($_POST['genre']);
    $biographie = htmlspecialchars($_POST['biographie']);

    foreach ($_POST['languages'] as $language) {
        $listLanguages .= $language . ", ";
    }

    echo "<p> Bonjour " . $nom .
        " ! </br> Vous êtes une " . $genre .
        " et vous aimez coder en : " . $listLanguages .
        " </br> Voici ce que vous avez écrit à propos de vous : " . $biographie;

} else {
    echo '<script> alert("vous devez renseigner tout les champs") </script>';
}
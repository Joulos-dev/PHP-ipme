<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $_POST['couleur'] ?>
        }
    </style>
</head>
<body>

</body>
</html>




<?php

var_dump($_POST);

if(
    isset($_POST['prenom']) &&
    $_POST['prenom'] !== "" &&
    isset($_POST['couleur']) &&
    $_POST['couleur'] !== ""
)
{
//    echo "<body style=background-color:($_POST['couleur'])>";
    echo "<p> Bonjour " . htmlspecialchars($_POST['prenom']) . "! </br> Ta couleur préférée est " . htmlspecialchars($_POST['couleur']) . ". </p>";
} else {
    echo '<script> alert("vous devez renseigner tout les champs") </script>';
}

?>




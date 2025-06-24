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
            max-width: 1000px;

        }

        a {
            text-decoration: none;
            background-color:navajowhite;
            border:none;
            color: black;
            padding: 10px;
            border-radius:10px;
        }
    </style>
</head>
<body>

</body>
</html>


<?php


session_start();


     if(isset($_SESSION['contact']) === false ) {
           $_SESSION['contact'] = 0;
     }
    // ! dans isset = false
    if(!isset($_SESSION['test'])) {
         $_SESSION['test'] = 0;
    }

    if(isset($_SESSION['random']) === false ) {
        $_SESSION['random'] = 0;
    }


if (isset($_SESSION['accueil']))
        $_SESSION['accueil'] = $_SESSION['accueil'] + 1;
    else
        $_SESSION['accueil'] = 1;

?>

<nav>
    <a href="contact.php">Contact</a>
    <a href="test.php">Test</a>
    <a href="random.php">Random</a>
</nav>


<p> La page accueil à été visitée <?php echo $_SESSION['accueil']; ?> fois </p>

<p> La page contact à été visitée <?php echo $_SESSION['contact']; ?> fois </p>

<p> La page test à été visitée <?php echo $_SESSION['test']; ?> fois </p>

<p> La page random à été visitée <?php echo $_SESSION['random']; ?> fois </p>

<a href="toto.php">Delete historique</a>
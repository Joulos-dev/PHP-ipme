<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=WDXL+Lubrifont+SC&display=swap" rel="stylesheet">
    <style>

        body {
            background-color:darkslategray;
            font-family: "WDXL Lubrifont SC", sans-serif;

        }

        h1 {
            text-align: center;
        }

        .container {
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap:2rem;
        }
        .card {
            border:solid 3px gray;
            border-radius: 10px;
            overflow: hidden;
            background-color: gray;
        }

        .card-img {
            border-radius:10px;
        }

        .card-text {
            padding:15px;
        }

        img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        a {
            text-decoration: none;
        }

        .accueil {
            border:none;
            background-color:darkslategray;
            border-radius:15px;
            padding:15px;
            margin:2rem;
            text-decoration: none;
            color:black;
        }

    </style>
</head>

<body>
<?php include "./header.php"; ?>


<?php

$apiGhibli = file_get_contents("https://ghibliapi.vercel.app/films");
$decodedGhibli = json_decode($apiGhibli, true);
//var_dump($decodedGhibli);

?>

<div class="container">
    <?php foreach($decodedGhibli as $film => $value ) : ?>
    <div class="card">
        <div class="card-img">
            <img src="<?php echo $value['image'] ?>" >;
        </div>
        <div class="card-text">
            <h2> <?php echo $value['title'] ?></h2>
            <p> <?php echo substr($value['description'], 0, 300) ?></p>
             <a href="tp-jour3-2-item.php?film=<?php echo $value['id'] ?>"> ==> Voir le film <== </a>
        </div>

    </div>
    <?php endforeach; ?>
</div>

</body>
</html>
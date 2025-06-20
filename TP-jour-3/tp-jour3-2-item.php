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
            margin: 0;
            background-color:darkslategray;
            font-family: "WDXL Lubrifont SC", sans-serif;
            line-height: 1.5em;
        }

        h1 {
            text-align: center;
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

        h2 {
            text-align:center;
            border:solid 3px gray;
            border-radius: 10px;
            background-color: gray;
            padding: 15px;
            margin:1rem;
        }

        h3 {
            text-align: center;
        }

        p{
            text-align: justify;
        }

        .container {
            max-width: 1200px;
            margin-inline: auto;
            margin-block:2rem;
        }

        .container-grid {
            display:grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            max-width: 1200px;
            margin:auto;
        }

        .card {
            display: flex;
            border:solid 3px gray;
            border-radius: 10px;
            overflow: hidden;
            background-color: gray;
            padding: 15px;
            gap: 1rem;
            margin:1rem;
        }

        .card-character{
            border:solid 3px gray;
            border-radius: 10px;
            overflow: hidden;
            background-color: gray;
            padding: 10px;

            margin:1rem;

        }

        .card-text img {
            object-position: top;
            object-fit: cover;
            border-radius:10px;
            width: 100%;
            height: 200px;
        }

        .card-img img {
            object-fit: cover;
            border-radius:10px;
            max-height: 80vh;
        }

    </style>
</head>
<body>
<?php include "./header.php"; ?>


<?php

 if(isset($_GET['film']) == false){
     echo "erreur";
     die;
}

$apiGhibli = file_get_contents("https://ghibliapi.vercel.app/films/" . $_GET['film']);
$decodedGhibli = json_decode($apiGhibli, true);

$people = [];

foreach($decodedGhibli['people'] as $value) {
    $content = file_get_contents($value);
    $people[] = json_decode($content, true);
    //var_dump($people);
}

?>


<div class="container">
    <div class="card">
        <div class="card-img">
            <img src="<?php echo $decodedGhibli['image'] ?>" alt="movie-image" >
        </div>
        <div class="card-text">
            <h2> <?php echo $decodedGhibli['title'] ?></h2>
            <img src="<?php echo $decodedGhibli['movie_banner'] ?>" alt="movie-banner" >
            <p> <?php echo $decodedGhibli['description'].substr(1,300) ?></p>
            <p> <strong>Durée:</strong>  <?php echo $decodedGhibli['running_time'] ?> minutes </p>
            <p><strong>Date de sortie:</strong>  <?php echo $decodedGhibli['release_date'] ?></p>
            <p> <strong>Score Rotten Tomatoes:</strong> <?php echo $decodedGhibli['rt_score'] ?></p>
            <p><strong>Directeur:</strong>  <?php echo $decodedGhibli['director'] ?></p>
            <p> <strong>Producteur:</strong> <?php echo $decodedGhibli['producer'] ?></p>

        </div>
    </div>
</div>
<div><h2>Personnages</h2></div>
<div class="container-grid">
    <?php foreach($people as $personnage) : ?>
    <div class="card-character">
        <h3> <?php echo $personnage['name'] ?> </h3>
        <p> <strong>Genre:</strong>  <?php echo $personnage['gender']?></p>
        <p> <strong>Age:</strong>   <?php echo $personnage['age']?></p>
        <p>  <strong>Couleur des yeux:</strong>  <?php echo $personnage['eye_color']?></p>
        <p>  <strong>Couleur des cheveux:</strong>  <?php echo $personnage['hair_color']?></p>
    </div>
    <?php endforeach; ?>
</div>


</body>
</html>
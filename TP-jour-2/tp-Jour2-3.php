<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            display:grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap:2rem;
        }
        .card {
            border:solid 1px black
            padding:15px;
        }
        img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

    </style>
</head>
<body>

<?php

$homepage =  file_get_contents('https://hp-api.onrender.com/api/characters');
$decoded = json_decode($homepage, true);

?>

<div class="container">
    <?php foreach($decoded as $key => $value) : ?>
        <div class="card">
            <div>
                <img src=<?php echo $value['image'] ?>></div>
            <div>
                <h2><?php echo $value['name'] ?> </h2>
                <p><?php echo $value['house'] ?></p>
                <p><?php echo $value['dateOfBirth'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$titre = "Bienvenue sur mon site";

$fruits = ['Pomme', 'Banane', 'Cerise'];

$personne = [
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Âge' => 25,
    'Ville' => 'Paris'
];

$produits = [
    [
        'nom' => 'Chaise',
        'stock' => 5
    ],
    [
        'nom' => 'Table',
        'stock' => 0
    ],
    [
        'nom' => 'Lampe',
        'stock' => 3
    ]
];

$menu = [
    'Google' => 'https://google.fr',
    'Amazon' => 'https://www.amazon.fr/',
    'Spotify' => 'https://open.spotify.com/intl-fr',
    'Youtube' => 'https://www.youtube.com/'
];

?>

<h1> <?php echo $titre ?> </h1>

    <ul>
        <?php foreach($fruits as $fruit) : ?>

            <li> <strong> <?php echo $fruit ?> </strong></li>

        <?php endforeach; ?>
    </ul>

<table>
    <thead>
        <tr>
            <th>Key</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($personne as $key => $value) : ?>
         <tr>
             <td> <?php echo $key ?></td>
             <td> <?php echo $value ?> </td>
         </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<ul>
    <?php foreach($produits as $key => $value) : ?>

        <li> <strong> <?php echo $value['nom'] ?> </strong>
            <?php if($value['stock'] === 0 ): ?>
                ( Rupture de stock )
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>


<nav>
    <ul>
        <?php foreach ($menu as $key => $value) : ?>
        <li><a href=<?php echo $value ?>><?php echo $key ?></a> </li>
        <?php endforeach; ?>
    </ul>
</nav>









</body>
</html>
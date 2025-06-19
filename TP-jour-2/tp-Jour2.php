<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card {
            padding: 15px;
            margin: 20px;
            border: 1px solid black;
            background-color: #e67e22;
        }
    </style>
</head>
<body>

<?php
$personnes = [
    [
        'Nom' => 'Dupont',
        'Prénom' => 'Alice',
        'Age' => '26',
        'Ville' => 'Paris'
    ],

];
var_dump($personnes);

$notes = [
    [
        'Math' => 2,
        'Français' => 18,
        'Histoire' => 15
    ],
];

$couleurs = [
        'Rouge' => '#c0392b',
        'Bleu' => '#2980b9',
        'Vert' => '#2ecc71'
    ];

$meilleureNote = 0;
$meilleureMatiere = "";

foreach($notes[0] as $key => $note) {
    if($meilleureNote < $note) {
        $meilleureNote = $note;
        $meilleureMatiere = $key;
    }
}
var_dump($meilleureMatiere);
var_dump($meilleureNote);


$transfert = '';
$reverseCouleurs = [];

//foreach ($couleurs as $couleur => $hexa) {
//    $transfert = $couleur;
//    $couleur = $hexa;
//    $hexa = $transfert;
//    $reverseCouleurs[$hexa] = $couleur;
//    var_dump($reverseCouleurs);
//}

foreach ($couleurs as $couleur => $hexa) {
    $reverseCouleurs[$hexa] = $couleur;
}






?>


<?php foreach ($personnes as $personne) : ?>
    <div class="card">
        <p> Nom : <?php echo $personne['Nom'] ?> </p>
        <p> Prénom : <?php echo $personne['Prénom'] ?> </p>
        <p> Age : <?php echo $personne['Age'] ?> </p>
    </div>
<?php endforeach; ?>

<?php foreach ($notes as $matiere) : ?>
    <div class="card">
        <p>La note en Math est : <?php echo $matiere['Math'] ?> </p>
        <p> La note en Français est : <?php echo $matiere['Français'] ?> </p>
        <p> La note en Histoire est : <?php echo $matiere['Histoire'] ?> </p>
    </div>
<?php endforeach; ?>

    <div>
        <p>`La meilleure note est : <?php echo $meilleureNote ?>  en <?php echo $meilleureMatiere  ?></p>
    </div>
    <div>
        <p> le tableau reverse des couleurs :  <?php print_r($reverseCouleurs) ?> </p>
    </div>


</body>
</html>
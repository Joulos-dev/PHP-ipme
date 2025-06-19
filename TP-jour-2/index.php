<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .card-custom{
        padding:20px;
        border:solid 1px red;
        margin: 10px;
    }
    </style>
</head>
<body>

<?php

$arrayUsers = [
    [
        'firstName' => 'Jules',
        'favoriteColor' => 'Bleu',
        'kaamelottFan' => true
    ],
    [
        'firstName' => 'Antoine',
        'favoriteColor' => 'Noir',
        'kaamelottFan' => false
    ],
    [
        'firstName' => 'Benjamin',
        'favoriteColor' => 'Vert',
        'kaamelottFan' => true
    ],

];


foreach ($arrayUsers as $user) {
    echo "<div class='card-custom'>";
    echo "<p>Je m'appelle <strong>" . $user['firstName'] . "</strong></p>";
    echo "<p>Ma couleur préférée est le  <strong>" . $user['favoriteColor'] . "</strong></p>";
    echo "</div>";
};



?>


<?php foreach($arrayUsers as $user) : ?>
    <div class="card-custom">
        <p> Je m'apelle <strong> <?php echo $user['firstName'] ?> </strong></p>
        <p> ma couleur préfére est le :<strong> <?php echo $user['favoriteColor'] ?> </strong></p>

    <?php if($user['kaamelottFan']): ?>
            <p> cet utilisateur est fan de kaamelott </p>
    <?php else: ?>
        <p> Cet utilisateur n'est pas pas fan de kaamelott</p>

    <?php endif; ?>
    </div>
<?php endforeach; ?>

</body>
</html>
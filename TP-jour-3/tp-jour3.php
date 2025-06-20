

<?php


// 1 //

if(isset($_GET['prenom'])){
    echo "<p> Bonjour " . $_GET['prenom'] . " ! </p>";
} else {
    echo "<p> Bonjour inconnu ! </p>";
}

// 2 //

if(isset($_GET['a'])&& ($_GET['b'])){
    echo "<p> La somme de " . ($_GET['a']) . " et " . ($_GET['b']) . " est égale à " . ($_GET['a']) + ($_GET['b']) . "</p>" ;
} else {
    echo "<p> Pas de calcul à faire </p>";
}



// 3 //

if(isset($_GET['couleur'])){
    echo "<p> Ceci est un texte coloré en " . ($_GET['couleur']) . " </p>";
} else {
    echo "<p style='color:black'> Ceci est un texte coloré en noir </p>";
}

// 4 //

if(isset($_GET['a'])&& ($_GET['b']) && ($_GET['op'])){
    if($_GET['op']=== 'add') {
        echo ($_GET['a']) + ($_GET['b']);

    } elseif ($_GET['op']=== 'sub') {
        echo ($_GET['a']) - ($_GET['b']);

    }elseif($_GET['op']=== 'mul') {
        echo ($_GET['a']) * ($_GET['b']);

    }elseif($_GET['op']=== 'div') {
        echo ($_GET['a']) / ($_GET['b']);
    }
}

// 5 //


$fruits = $_GET['item'];
var_dump($fruits);?>

<ul>
    <?php foreach($fruits as $fruit) : ?>
        <li> <?php echo $fruit ?> </li>
    <?php endforeach; ?>
</ul>











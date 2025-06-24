

<?php


// ouvrir un nouveau serveur sur le terminal (penser à se placer dans le bon dossier)//
// php -S localhost:8080 //

// toujours mettre $ devant une variable //
$myVar = 'hello tout le monde ! ';

// echo permet d'afficher une variable sur la page //
echo $myVar;

//permet de CONCAT une variable dans un paragraphe // 
echo '<p>' . $myVar . '</p>';

//var dump est l'équivalent de la console // 
$tableau = [12, 20, 32];
var_dump($tableau);

// echo le tableau ne fonctionne pas car ce n'est pas une chaine de caractère //
//echo $tableau; //

//donc besoin d'une boucle FOR //
for($i=0 ; $i < count($tableau);$i++){
    echo $tableau[$i] . ' ';
}


// MAIS plutot favoriser les FOR EACH //
foreach($tableau as $item) {
    echo $item;
}

$array = [2, 5, 5, 10];
//utiliser break pour sortir de la boucle
foreach ($array as $value) {
    if ($value === 5) {
        break;
    }
}
// //die permet d'arreter complement l'execution de PHP des qu'il passe dedans
//$array = [2, 5, 5, 10];
//foreach ($array as $value) {
//    var_dump($value);
//    die;
//}

// // Sert à avoir des infos sur la requetes en cours (ip du user, le navigateur etc)...
//var_dump($_SERVER);



var_dump($_GET);
if(isset($_GET['name']) && isset($_GET['toto'])){
    echo $_GET['name'];
}



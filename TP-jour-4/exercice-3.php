<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        div {
            margin: 1rem;
        }

    </style>
    <title>Document</title>
</head>
<body>

<h1>Formulaire d'inscription</h1>

<form action="exercice-3-traitement.php" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <h2>Genre</h2>
    </div>
    <div>

        <label for="genre-h">Homme</label>
        <input type="radio" id="genre-h" name="genre" value="homme">
        <label for="genre-f">Femme</label>
        <input type="radio" id="genre-f"  name="genre" value="femme">
        <label for="genre-a">Autre</label>
        <input type="radio" id="genre-a"  name="genre" value="autre">
    </div>
<div>
    <h2>language de programmation préférée</h2>
</div>

    <div>
            <label for="PHP">PHP</label>
            <input id="PHP" type="checkbox" value="PHP" name="languages[]">

            <label for="JavaScript">JavaScript</label>
            <input id="JavaScript" type="checkbox" value="JavaScript" name="languages[]">

            <label for="Python">Python</label>
            <input id="Python" type="checkbox" value="Python" name="languages[]">

            <label for="C#"> C#</label>
            <input id="C#" type="checkbox" value="C#" name="languages[]">
    </div>
    <div>
     <label for="biographie"></label>
        <textarea id="biographie" name="biographie">Biographie...</textarea>
    </div>
    <div>
        <button type="submit"> Envoyer </button>
    </div>

</form>
</body>
</html>



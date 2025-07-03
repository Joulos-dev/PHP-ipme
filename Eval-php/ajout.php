<?php include 'header.php' ?>

<?php

session_start();

include 'pdo.php';

?>

<div class="accueil">
    <a href="index.php">Accueil</a>
</div>

<h1>Ajouter une Maison</h1>

<div class="center">
    <form action="ajoutTraitement.php" method="post">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="nb_pieces">Nombre de pièces</label>
        <input type="number" id="nb_pieces" name="nb_pieces" required>

        <label for="prix">Prix</label>
        <input type="number" id="prix" name="prix" required>

        <button type="submit">Ajouter une Maison</button>

    </form>
</div>

<?php if(isset($_GET['failed'])): ?>
    <script>
        Swal.fire({
            title: "Ajout incorrecte ",
            text: "Veuillez recommencer",
            icon: "error"
        });
    </script>
<?php endif ; ?>


<?php include 'footer.php'; ?>

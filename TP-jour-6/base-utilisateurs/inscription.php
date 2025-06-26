<?php include 'header.php'; ?>


<?php include 'pdo.php'; ?>

<div>
    <a href="index.php">Accueil</a>
</div>


<form action="inscriptionTraitement.php" method="post">

    <label for="adresse-mail">Email</label>
    <input type="email" id="adresse-mail" name="adresse-mail" required>

    <label for="identifiant">Choisissez votre identifiant</label>
    <input type="text" id="identifiant" name="identifiant" required>

    <label for="mdp">Choisissez votre mot de passe</label>
    <input type="password" id="mdp" name="mdp" required>

    <label for="mdp-check">Répétez le mot de passe</label>
    <input type="password" id="mdp-check" name="mdp-check" required>

    <button type="submit">S'inscrire</button>

</form>



<?php if(isset($_GET['failed'])): ?>
    <script>
        Swal.fire({
            title: "Inscription non valide ",
            text: "Veuillez recommencer",
            icon: "error"
        });
    </script>
<?php endif ; ?>


<?php include 'footer.php';
<?php include 'header.php'; ?>

<?php include 'pdo.php'; ?>

<div>
    <a href="index.php">Accueil</a>
</div>


<form method="post" action="se_connecterTraitement.php">

    <label for="id-mail">Identifiant ou Mail</label>
    <input type="text" id="id-mail" name="id-mail" required>

    <label for="mdp">Saisissez votre Mot de passe</label>
    <input type="password" id="mdp" name="mdp" required>

    <button type="submit">Se connecter</button>

</form>


<?php if(isset($_GET['failed'])): ?>
    <script>
        Swal.fire({
            title: "Connexion non valide ",
            text: "Veuillez recommencer",
            icon: "error"
        });
    </script>
<?php endif ; ?>



<?php include 'footer.php';

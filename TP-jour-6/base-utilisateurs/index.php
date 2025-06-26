<?php include 'header.php'; ?>


<?php

include 'pdo.php';

//var_dump($_SESSION);

if(isset($_SESSION['user'])){
    include 'menu-deco.php';
} else {
    include 'menu_co.php';
}

?>

<h1> Base de données inutile  </h1>

<?php if(isset($_SESSION['user'])): ?>
    <p> bienvenue <?php echo $_SESSION['user'] ?>  ! </p>
<?php endif ; ?>

<?php if(isset($_GET['inscription'])): ?>
    <script>
        Swal.fire({
            title: "Inscription Validée ",
            text: "Bienvenue sur le site",
            icon: "success"
        });
    </script>
<?php endif ; ?>

<?php if(isset($_GET['delete'])): ?>
    <script>
        Swal.fire({
            title: "Compte supprimé ",
            text: "Bonne continuation !",
            icon: "success"
        });
    </script>
<?php endif ; ?>

<?php include 'footer.php';

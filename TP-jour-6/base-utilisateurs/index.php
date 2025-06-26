<?php include 'header.php'; ?>



<?php

include 'pdo.php';

var_dump($_SESSION);

if(isset($_SESSION['user'])){
    include 'menu-deco.php';
} else {
    include 'menu_co.php';
}

?>

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


//$verify = password_verify('toto', '$2y$10$yED0seKQTz6TVAIB0W7MBOOL0ojBtd94CRV835sEOA3V/Wxrm.dpm');
//var_dump($verify);

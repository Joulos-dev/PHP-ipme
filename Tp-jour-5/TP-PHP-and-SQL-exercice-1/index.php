<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="default.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>
<body>

<h1> Ma Liste de Jeux Awesome </h1>

<?php

include 'pdo.php';

$sql = "SELECT * FROM game";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if(isset($_GET['success'])): ?>
<script>
    Swal.fire({
        title: "Jeux ajouté avec succés ",
        text: "Merci de votre contribution",
        icon: "success"
    });
</script>
<?php endif ; ?>

<?php if(isset($_GET['delete'])): ?>
    <script>
        Swal.fire({
            title: "Jeux supprimé avec succés ",
            text: "Merci de votre contribution",
            icon: "success"
        });
    </script>
<?php endif ; ?>

<?php if(isset($_GET['updated'])): ?>
    <script>
        Swal.fire({
            title: "Jeux modifié avec succés ",
            text: "Merci de votre contribution",
            icon: "success"
        });
    </script>
<?php endif ; ?>

<table>
    <thead>
        <tr>
            <th> ID </th>
            <th> Title </th>
            <th> Genre </th>
            <th> Platform </th>
            <th> Rating </th>
            <th> Lien </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($games as $game) : ?>
            <tr>
                <td><?php echo $game['id'] ?></td>
                <td><?php echo $game['title'] ?></td>
                <td><?php echo $game['genre'] ?></td>
                <td><?php echo $game['platform'] ?></td>
                <td><?php echo $game['rating'] ?></td>
                <td><a href="item.php?id=<?php echo $game['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                            </svg></a>  <a href="edit.php?id=<?php echo $game['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                            </svg></a>  <a href="delete.php?id=<?php echo $game['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg></a  >  </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <a href="add.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg> Ajouter un jeux</a>
</div>

</body>
</html>
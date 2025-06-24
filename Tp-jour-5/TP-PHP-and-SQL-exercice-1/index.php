<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
        }
        a {
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php


$pdo = new PDO(
    'mysql:host=localhost;dbname=gamedb;charset=utf8',
    'root',
    ''
);

$sql = "SELECT * FROM game";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($games);

?>

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
                <td> <p><a href="item.php?id=<?php echo $game['id'] ?>">Voir</a>  <a href="edit.php?id=<?php echo $game['id'] ?>">Edit</a>  <a href="delete.php?id=<?php echo $game['id'] ?>">Delete</a  ></p>  </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

</body>
</html>
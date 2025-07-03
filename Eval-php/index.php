<?php include 'header.php' ?>

<?php include 'pdo.php';

session_start();

$sql = "SELECT * FROM maison";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$maisons = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($maisons);
$nbMaison = 0;
$prixTotal = 0;

?>

<h1> Ma base de données Immobilière </h1>

<div class="center">
    <table>
        <thead>
        <tr>
            <th> ID </th>
            <th> Nom </th>
            <th> Adresse </th>
            <th> Nombres de pièces </th>
            <th> Prix </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($maisons as $maison) : ?>
            <tr>
                <td><?php echo htmlspecialchars($maison['id']) ?></td>
                <td><?php echo htmlspecialchars($maison['nom']) ?></td>
                <td><?php echo htmlspecialchars($maison['adresse']) ?></td>
                <td><?php echo htmlspecialchars($maison['nb_pieces']) ?></td>
                <td><?php echo htmlspecialchars($maison['prix']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<div>
    <a href="ajout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg> Ajouter une maison </a>
</div>

<?php if(isset($_GET['ajout'])): ?>
    <script>
        Swal.fire({
            title: "Maison ajouté avec succés ",
            text: "Bien joué :)",
            icon: "success"
        });
    </script>
<?php endif ; ?>

<h2>Statistiques</h2>

<?php foreach($maisons as $maison) :
      $nbMaison = $nbMaison + 1;
endforeach; ?>

<p> Le Nombre total de maisons est de  <?php echo  htmlspecialchars($nbMaison) ?> .</p>

<?php foreach($maisons as $maison) :
     $prixTotal += $maison['prix'];
endforeach; ?>

<p> Le Montant total de toutes les maisons est de  <?php echo  htmlspecialchars($prixTotal) ?>.</p>

<?php include 'footer.php'; ?>

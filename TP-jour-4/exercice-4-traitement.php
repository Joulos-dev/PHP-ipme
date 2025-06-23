<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        h1{
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding-inline:0 ;
        }

        li {
            padding: 0.5rem;
        }
        .card {
            display: flex;
            gap: 2rem;
            max-width: 1000px;
            justify-content: center;
        }
        img {
            object-fit: contain;
            width: 100%;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php if (
isset($_POST['country']) &&
$_POST['country'] !== ""
) : ?>

    <?php
    $api = @file_get_contents("https://restcountries.com/v3.1/name/" . htmlspecialchars($_POST["country"] ). "?fullText=true");
    ?>

<?php if($api === false) : ?>
    <script> alert("ce pays existe pas")</script>
<?php else : ?>
        <?php $apiCountries = json_decode($api, true); ?>
    <h1> <?php echo $apiCountries[0]['name']['common']; ?></h1>
    <div class="card">
        <div class="img">
            <img src="<?php echo $apiCountries[0]['flags']['png']; ?>" alt="flags">
        </div>
        <div class="text">
            <ul>
                <li> <strong> Nom Officiel: </strong> <?php echo $apiCountries[0]['name']['official']; ?> </li>
                <li> <strong> Capitale: </strong> <?php echo $apiCountries[0]['capital'][0]; ?> </li>
                <li> <strong> Population: </strong> <?php echo $apiCountries[0]['population']; ?> </li>
                <li> <strong> Region: </strong> <?php echo $apiCountries[0]['region'] ?> </li>
            </ul>
        </div>
    </div>
<?php endif; ?>

<?php
 else :
    echo '<script> alert("veuillez remplir le champ Country")</script>';
 endif;?>


</body>
</html>


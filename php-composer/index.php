<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=faker_demo;charset=utf8',
    'root',
    ''
);

?>


<form method="post" action="generate.php">

    <label for="generer">Générer des produis</label>
    <input type="number" id="generer" name="generer">
    <button type="submit">Submit</button>

</form>




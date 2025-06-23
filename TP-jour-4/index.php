<form action="traitement.php" method="post">
    <label for="test-input">Test input</label>
    <input type="text" id="test-input" name="test-input">

    <div>
        <label for="checkbox-1">Reponse 1</label>
        <input type="checkbox" value="1" id="checkbox-1" name="checkbox[]">
        <label for="checkbox-2">Reponse 2</label>
        <input type="checkbox" value="2" id="checkbox-2" name="checkbox[]">
        <label for="checkbox-3">Reponse 3</label>
        <input type="checkbox" value="3" id="checkbox-3" name="checkbox[]">
    </div>

    <button type="submit">Valider</button>
</form>

<?php
var_dump($_POST);
?>


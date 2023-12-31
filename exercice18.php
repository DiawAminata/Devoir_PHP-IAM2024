<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 18</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $rows = (int)$_POST["rows"];

        for ($i = 1; $i <= $rows; $i++) {
            echo str_repeat($i, $i) . "<br>";
        }
    }
    ?>

    <form method="POST">
        <label for="rows">Entrer le nombre de lignes :</label>
        <input type="number" name="rows" required>
        <button type="submit" name="submit">Afficher le motif</button>
    </form>
</body>
</html>

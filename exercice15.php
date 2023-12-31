<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15</title>
</head>
<body>
    <?php
    function capitalizeFirstLetter(&$array) {
        foreach ($array as &$str) {
            $str = ucfirst(strtolower($str));
        }
        unset($str); // Dissocier la référence à la dernière itération
    }

    if(isset($_POST["calculate"])){
        $texts = explode(",", $_POST["texts"]);
        capitalizeFirstLetter($texts);

        // Afficher le tableau modifié
        echo "<p>Résultats : </p>";
        echo "<pre>";
        print_r($texts);
        echo "</pre>";
    }
    ?>

    <form method="POST">
        <label for="texts">Entrer les chaînes de caractères (séparées par des virgules) :</label>
        <input type="text" name="texts" required>
        <button type="submit" name="calculate">Calculer</button>
    </form>
</body>
</html>

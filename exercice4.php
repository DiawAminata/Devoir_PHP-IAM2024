<?php
    // Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
    function pgcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
    function ppcm($a, $b) {
        return ($a * $b) / pgcd($a, $b);
    }

    // Initialiser les variables
    $nombre1 = null;
    $nombre2 = null;
    $ppcmResult = null;

    // Vérifier si le formulaire est soumis
    if (isset($_POST["submit"])) {
        // Récupérer les nombres saisis par l'utilisateur
        $nombre1 = (int)$_POST["nombre1"];
        $nombre2 = (int)$_POST["nombre2"];

        // Calculer le PPCM en appelant la fonction ppcm
        $ppcmResult = ppcm($nombre1, $nombre2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Calcul du PPCM</title>
</head>
<body>
    <form method="POST">
        <label for="nombre1">Entrer le premier nombre :</label>
        <input type="text" name="nombre1" value="<?php echo $nombre1; ?>" required>

        <label for="nombre2">Entrer le deuxième nombre :</label>
        <input type="text" name="nombre2" value="<?php echo $nombre2; ?>" required>

        <button type="submit" name="submit">Calculer le PPCM</button>
    </form>

    <?php
        // Afficher le résultat si le PPCM a été calculé
        if ($ppcmResult !== null) {
            echo "<p>Le PPCM de $nombre1 et $nombre2 est : $ppcmResult</p>";
        }
    ?>
</body>
</html>

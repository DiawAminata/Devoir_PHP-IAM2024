<?php
    // Vérifier si le formulaire est soumis
    if (isset($_POST["submit"])) {
        // Récupérer le rayon saisi par l'utilisateur
        $rayon = (float)$_POST["rayon"];

        // Calculer le diamètre, le périmètre et la surface
        $diametre = 2 * $rayon;
        $perimetre = 2 * M_PI * $rayon;
        $surface = M_PI * pow($rayon, 2);
    } else {
        // Initialiser les variables si le formulaire n'est pas encore soumis
        $rayon = null;
        $diametre = null;
        $perimetre = null;
        $surface = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Calcul du cercle</title>
</head>
<body>
    <form method="POST">
        <label for="rayon">Entrer le rayon du cercle :</label>
        <input type="text" name="rayon" value="<?php echo $rayon; ?>" required>

        <button type="submit" name="submit">Calculer</button>
    </form>

    <?php
        // Afficher les résultats si le formulaire a été soumis
        if (isset($_POST["submit"])) {
            echo "<p>Le diamètre du cercle est : $diametre</p>";
            echo "<p>Le périmètre du cercle est : $perimetre</p>";
            echo "<p>La surface du cercle est : $surface</p>";
        }
    ?>
</body>
</html>

<?php
    // Fonction pour calculer la somme des diviseurs propres d'un nombre
    function sommeDiviseursPropres($nombre) {
        $somme = 0;
        for ($i = 1; $i <= $nombre / 2; $i++) {
            if ($nombre % $i == 0) {
                $somme += $i;
            }
        }
        return $somme;
    }

    // Vérifier si le formulaire est soumis
    if (isset($_POST["submit"])) {
        // Récupérer le nombre saisi par l'utilisateur
        $nombre = (int)$_POST["nombre"];

        // Calculer la somme des diviseurs propres du nombre
        $sommeDiviseurs = sommeDiviseursPropres($nombre);

        // Tester si le nombre est parfait
        $estParfait = ($sommeDiviseurs == $nombre);
    } else {
        // Initialiser les variables si le formulaire n'est pas encore soumis
        $nombre = null;
        $sommeDiviseurs = null;
        $estParfait = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Nombre parfait</title>
</head>
<body>
    <form method="POST">
        <label for="nombre">Entrer un nombre :</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required>

        <button type="submit" name="submit">Vérifier si le nombre est parfait</button>
    </form>

    <?php
        // Afficher le résultat si le formulaire a été soumis
        if (isset($_POST["submit"])) {
            echo "<p>La somme des diviseurs propres de $nombre est : $sommeDiviseurs</p>";
            if ($estParfait) {
                echo "<p>$nombre est un nombre parfait.</p>";
            } else {
                echo "<p>$nombre n'est pas un nombre parfait.</p>";
            }
        }
    ?>
</body>
</html>

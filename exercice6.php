<?php
    // Vérifier si le formulaire est soumis
    if (isset($_POST["submit"])) {
        // Récupérer le nombre saisi par l'utilisateur
        $nombre = (int)$_POST["nombre"];

        // Initialiser un tableau pour stocker les diviseurs
        $diviseurs = array();

        // Trouver les diviseurs du nombre
        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i == 0) {
                $diviseurs[] = $i;
            }
        }
    } else {
        // Initialiser les variables si le formulaire n'est pas encore soumis
        $nombre = null;
        $diviseurs = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Diviseurs d'un nombre</title>
</head>
<body>
    <form method="POST">
        <label for="nombre">Entrer un nombre :</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required>

        <button type="submit" name="submit">Afficher les diviseurs</button>
    </form>

    <?php
        // Afficher les diviseurs si le formulaire a été soumis
        if (isset($_POST["submit"])) {
            echo "<p>Les diviseurs de $nombre sont : " . implode(', ', $diviseurs) . "</p>";
        }
    ?>
</body>
</html>

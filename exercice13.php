<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 - Calcul TVA et Prix TTC</title>
</head>
<body>

<?php
// Initialiser les variables
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
$montantTVA = '';
$prixTTC = '';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider et récupérer les données du formulaire
    if (is_numeric($prixHT) && is_numeric($tauxTVA)) {
        // Calculer le montant de la TVA et le prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    } else {
        // Afficher un message d'erreur si les données ne sont pas valides
        echo "<p style='color: red;'>Veuillez saisir des valeurs numériques valides.</p>";
    }
}
?>

<form method="POST">
    <label for="prixHT">Prix HT :</label>
    <input type="text" name="prixHT" value="<?= $prixHT ?>" required><br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" name="tauxTVA" value="<?= $tauxTVA ?>" required><br>

    <button type="submit">Calculer</button>
</form>

<?php
// Afficher les résultats seulement si le formulaire a été soumis avec des données valides
if ($_SERVER["REQUEST_METHOD"] == "POST" && is_numeric($prixHT) && is_numeric($tauxTVA)) {
    echo "<p>Montant de la TVA : $montantTVA</p>";
    echo "<p>Prix TTC : $prixTTC</p>";
}
?>

</body>
</html>

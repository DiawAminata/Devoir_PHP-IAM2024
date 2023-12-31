<?php
function afficherTableauMultidimensionnel($tableau) {
    echo "<table border='1'>";
    // En-tête du tableau avec les clés des premiers éléments
    echo "<tr>";
    foreach (array_keys($tableau[0]) as $key) {
        echo "<th>$key</th>";
    }
    echo "</tr>";

    // Affichage des données
    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation
$donnees = array(
    array("Nom" => "Astou", "Age" => 25, "Ville" => "Saint-louis"),
    array("Nom" => "Samba", "Age" => 30, "Ville" => "Dakar"),
    array("Nom" => "Ousmane", "Age" => 22, "Ville" => "Touba")
);

afficherTableauMultidimensionnel($donnees);
?>

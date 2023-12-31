<?php
    // Tableau multidimensionnel associatif
    $personnes = array(
        'Diaw' => array(
            'prenom' => 'Fifi',
            'ville' => 'Dakar',
            'age' => 30
        ),
        'Diop' => array(
            'prenom' => 'Mouhamed',
            'ville' => 'Lyon',
            'age' => 25
        ),
        'Thompson' => array(
            'prenom' => 'Emma',
            'ville' => 'Marseille',
            'age' => 28
        ),
        // Ajoutez d'autres personnes au besoin
    );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Tableau multidimensionnel associatif</title>
</head>
<body>
    <h2>Informations sur les personnes</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>
        <?php
            // Afficher les informations sur chaque personne dans le tableau HTML
            foreach ($personnes as $nom => $infos) {
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>{$infos['prenom']}</td>";
                echo "<td>{$infos['ville']}</td>";
                echo "<td>{$infos['age']}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

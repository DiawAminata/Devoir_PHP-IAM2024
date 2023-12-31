<?php
    // Tableau multidimensionnel associatif
    $personnes = array(
        'Ndiaye' => array(
            'prenom' => 'Abdou makhtar',
            'ville' => 'Londres',
            'age' => 30
        ),
        'Fall' => array(
            'prenom' => 'Ely cheikh',
            'ville' => 'Laval',
            'age' => 25
        ),
        'Dia' => array(
            'prenom' => 'Malick',
            'ville' => 'Brazil',
            'age' => 28
        ),
        'Luna' => array(
            'prenom' => 'Eva',
            'ville' => 'Berlin',
            'age' => 22
        ),
        'Diaw' => array(
            'prenom' => 'Mai',
            'ville' => 'New York',
            'age' => 35
        ),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 - Tableau multidimensionnel associatif</title>
</head>
<body>
    <h2>Informations sur les personnes</h2>
    <table border="3">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - Utilisation de foreach</title>
</head>
<body>

<h2>Exercice 8 - Tableau multidimensionnel associatif</h2>
<?php
    // Tableau multidimensionnel associatif de l'exercice 8
    $personnesExercice8 = array(
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

    // Utilisation de foreach pour afficher les informations
    foreach ($personnesExercice8 as $nom => $infos) {
        echo "<p>Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}</p>";
    }
?>

<hr>

<h2>Exercice 9 - Tableau multidimensionnel associatif</h2>
<?php
    // Tableau multidimensionnel associatif de l'exercice 9
    $personnesExercice9 = array(
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
        // Ajoutez d'autres personnes au besoin
    );

    // Utilisation de foreach pour afficher les informations
    foreach ($personnesExercice9 as $nom => $infos) {
        echo "<p>Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}</p>";
    }
?>
</body>
</html>

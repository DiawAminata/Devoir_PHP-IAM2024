<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11</title>
</head>
<body>
    <?php
    // Exercice 8
    $tab8 = array(
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
        )
    );
    $index8 = 0;

    echo "<p>Exercice 8 :</p>";
    while ($index8 < count($tab8)) {
        $key = array_keys($tab8)[$index8];
        $value = $tab8[$key];
        echo "$key : ";
        foreach ($value as $subKey => $subValue) {
            echo "$subKey => $subValue, ";
        }
        echo "<br>";
        $index8++;
    }

    // Exercice 9
    $tab9 = array(
        'prenom' => 'Abdou makhtar',
        'ville' => 'Londres',
        'age' => 30
    );
    $keys9 = array_keys($tab9);
    $index9 = 0;

    echo "<p>Exercice 9 :</p>";
    while ($index9 < count($keys9)) {
        $key = $keys9[$index9];
        $value = $tab9[$key];
        echo "$key : $value <br>";
        $index9++;
    }
    ?>
</body>
</html>

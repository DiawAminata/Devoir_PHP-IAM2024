<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
</head>
<body>
   <form method="POST">
    <label for="angle">Entrer l'angle :</label>
    <input type="number" name="angle" required>

    <label for="unite">Choisir l'unité :</label>
    <select name="unite">
        <option value="radian">Radian</option>
        <option value="degre">Degré</option>
        <option value="grade">Grade</option>
    </select>

    <button type="submit" name="calculate">Calculer le Sinus</button>
   </form>

   <?php
    if(isset($_POST["calculate"]) && isset($_POST["angle"]) && isset($_POST["unite"])){
        $angle = (float)$_POST["angle"];
        $unite = $_POST["unite"];

        switch(strtolower($unite)) {
            case 'radian':
                $resultat = sin($angle);
                break;
            case 'degre':
                $resultat = sin(deg2rad($angle));
                break;
            case 'grade':
                $resultat = sin(deg2rad(($angle / 90) * 100));
                break;
            default:
                $resultat = null;
        }

        echo "<p>Le sinus de $angle $unite est : $resultat</p>";
    }
    ?>
</body>
</html>

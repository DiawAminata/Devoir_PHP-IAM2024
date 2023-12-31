<?php
$nombreInitial = isset($_POST['number']) ? (int)$_POST['number'] : null;
$tirages = 0;
$nombreTire = 0;
$erreur = '';

if (isset($_POST['submit'])) {
    if (strlen($nombreInitial) === 3 && is_numeric($nombreInitial)) {
        while ($nombreTire !== $nombreInitial) {
            $nombreTire = rand(100, 999);
            $tirages++;
        }
    } else {
        $erreur = 'Veuillez entrer un nombre de trois chiffres valide.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de tirages</title>
</head>
<body>
    <h1 style="color: burlywood;">Tirage avec l'instruction while</h1>
   <form method="POST">
    <label for="number">Entrer le nombre initial :</label>
    <input type="text" name="number" id="number" pattern="\d{3}" title="Veuillez entrer un nombre de trois chiffres." required>
    <button type="submit" name="submit">Envoyer</button>
   </form>

   <?php if ($erreur): ?>
       <p style="color: red;"><?php echo $erreur; ?></p>
   <?php endif; ?>

   <?php if (isset($_POST['submit']) && !$erreur): ?>
       <p>Nombre initial : <?php echo $nombreInitial; ?></p>
       <p>Nombre de tirages nécessaires : <?php echo $tirages; ?></p>
   <?php endif; ?>
</body>
</html>

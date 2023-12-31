<?php
if(isset($_POST["number"])){
    $nombre = (int) $_POST["number"];

    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "<p>$nombre est un multiple de 3 et de 5.</p>";
    } else {
        echo "<p>$nombre n'est pas un multiple de 3 et de 5.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple de 3 et 5</title>
</head>
<body>
   <form method="POST">
    <label for="">Entrer le nombre :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
</body>
</html>


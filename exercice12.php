<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Exercice chapitre 6 n°</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<table border=\"1\" >";
    echo "<caption><b>Confirmation de vos coordonnées</b></caption>";
    
    foreach($_POST as $cle=>$val) {
        echo "<tr> <td> $cle :  </td> <td>" . stripslashes($val) . "</td></tr>";
    }
    
    echo "</table>";
} else {
    // Afficher le formulaire si aucune soumission n'a eu lieu
    echo <<<HTML
    <form action="{$_SERVER['PHP_SELF']}" method="post">
        <fieldset>
            <legend><b>Saisissez vos coordonnées </b></legend>
            <table border="1">
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" /></td>
                </tr>
                <tr>
                    <td>Prénom : </td>
                    <td> <input type="text" name="prenom" /></td>
                </tr>
                <tr>
                    <td>Adresse : </td>
                    <td><input type="text" name="adresse" /></td>
                </tr>
                <tr>
                    <td>Ville :</td>
                    <td><input type="text" name="ville" /></td>
                </tr>
                <tr>
                    <td>Code postal :</td>
                    <td><input type="text" name="code" maxlength="5"/></td>
                </tr>
                <tr>
                    <td>CONFIRMER</td>
                    <td><input type="submit" value="ENVOI" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
HTML;
}
?>
</body>
</html>

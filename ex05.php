<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5 : conditions</h1>
    <?php
    // Changer cette valeur pour tester : -1, 9, 10, 12, 14, 16, 21
    $moyenne = 13;

    echo "<p>Moyenne : $moyenne</p>";

    if ($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } elseif ($moyenne < 10) {
        echo "<p>Non validé</p>";
    } elseif ($moyenne < 12) {
        echo "<p>Passable</p>";
    } elseif ($moyenne < 14) {
        echo "<p>Assez bien</p>";
    } elseif ($moyenne < 16) {
        echo "<p>Bien</p>";
    } else {
        echo "<p>Très bien</p>";
    }
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

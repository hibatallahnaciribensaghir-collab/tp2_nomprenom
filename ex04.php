<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4 : types et conversions</h1>
    <?php
    $entier = 42;
    $texte = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    echo "<h2>Types et valeurs (var_dump)</h2><pre>";
    var_dump($entier, $texte, $decimal, $vrai, $faux, $vide);
    echo "</pre>";

    echo "<h2>Conversions</h2><pre>";
    echo '(int) "42"  : '; var_dump((int) $texte);
    echo '(int) 15.8  : '; var_dump((int) $decimal);
    echo '(string) 42 : '; var_dump((string) $entier);
    echo "</pre>";

    echo "<h2>Booléens avec echo</h2>";
    echo "<p>true : " . $vrai . "</p>";
    echo "<p>false : " . $faux . " (chaîne vide)</p>";

    echo "<h2>Booléens avec var_dump</h2><pre>";
    var_dump($vrai);
    var_dump($faux);
    echo "</pre>";

    echo "<h2>Conversion en booléen</h2><pre>";
    echo '(bool) 0     : '; var_dump((bool) 0);
    echo '(bool) "0"   : '; var_dump((bool) "0");
    echo '(bool) "PHP" : '; var_dump((bool) "PHP");
    echo '(bool) []    : '; var_dump((bool) []);
    echo "</pre>";
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

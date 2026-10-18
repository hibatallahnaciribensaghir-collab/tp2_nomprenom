<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3 : constantes et calculs</h1>
    <?php
    define("TAUX_TVA", 20);
    const DEVISE = "MAD";

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    $montantFinal = $totalTTC;
    $montantFinal += 15; // frais de livraison

    echo "<ul>";
    echo "<li>Prix unitaire HT : $prixUnitaireHT " . DEVISE . "</li>";
    echo "<li>Quantité : $quantite</li>";
    echo "<li>Total HT : $totalHT " . DEVISE . "</li>";
    echo "<li>TVA (" . TAUX_TVA . " %) : $montantTVA " . DEVISE . "</li>";
    echo "<li>Total TTC : $totalTTC " . DEVISE . "</li>";
    echo "<li>Montant final (livraison 15 " . DEVISE . " incluse) : $montantFinal " . DEVISE . "</li>";
    echo "</ul>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas.</p>";
    }
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

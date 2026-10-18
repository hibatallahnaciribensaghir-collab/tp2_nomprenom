<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1 : balises, echo, commentaires</h1>
    <?php
    // Commentaire sur une ligne
    /* Commentaire
       sur plusieurs lignes */
    echo "<p>Bienvenue dans mon TP PHP</p>";
    echo "<p>Nom : Alaoui</p>";
    echo "<p>Prénom : Karim</p>";
    echo "<p>Groupe : G1</p>";
    ?>
    <p><?= "Dernière phrase affichée avec la syntaxe courte." ?></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

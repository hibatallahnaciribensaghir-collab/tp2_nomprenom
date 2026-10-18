<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h1>Traitement GET</h1>
    <?php
    $champs = ["nom", "prenom", "groupe"];
    $donnees = [];
    $manquants = [];

    foreach ($champs as $champ) {
        $valeur = isset($_GET[$champ]) ? trim($_GET[$champ]) : "";
        if ($valeur === "") {
            $manquants[] = $champ;
        } else {
            $donnees[$champ] = $valeur;
        }
    }

    if (!isset($_GET["nom"]) && !isset($_GET["prenom"]) && !isset($_GET["groupe"])) {
        echo "<p>Aucune donnée reçue. Veuillez passer par le <a href=\"ex10_get.html\">formulaire</a>.</p>";
    } elseif (count($manquants) > 0) {
        echo "<p>Formulaire incomplet. Champ(s) manquant(s) ou vide(s) : " . implode(", ", $manquants) . ".</p>";
        echo "<p><a href=\"ex10_get.html\">Retour au formulaire</a></p>";
    } else {
        $nom = htmlspecialchars($donnees["nom"], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($donnees["prenom"], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($donnees["groupe"], ENT_QUOTES, 'UTF-8');
        echo "<p>Bienvenue $prenom $nom du groupe $groupe !</p>";
    }
    ?>
</body>
</html>

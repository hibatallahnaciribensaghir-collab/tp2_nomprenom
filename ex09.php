<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #444; padding: 6px 12px; }
    </style>
</head>
<body>
    <h1>Exercice 9 : tableau associatif</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $seuil = 10;
    $somme = 0;
    $nbValides = 0;
    $meilleureNote = null;
    $meilleurEtudiant = "";

    echo "<table><tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>";
    foreach ($notes as $etudiant => $note) {
        $valide = $note >= $seuil;
        $somme += $note;
        if ($valide) {
            $nbValides++;
        }
        if ($meilleureNote === null || $note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $etudiant;
        }
        echo "<tr><td>$etudiant</td><td>$note</td><td>" . ($valide ? "Validé" : "Non validé") . "</td></tr>";
    }
    echo "</table>";

    $moyenne = $somme / count($notes);

    echo "<p>Somme des notes : $somme</p>";
    echo "<p>Moyenne de la classe : $moyenne</p>";
    echo "<p>Nombre d'étudiants validés : $nbValides</p>";
    echo "<p>Meilleure note : $meilleureNote ($meilleurEtudiant)</p>";
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>

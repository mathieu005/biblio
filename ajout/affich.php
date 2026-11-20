<?php
$pdo = new PDO('mysql:host=localhost;dbname=biblio;charset=utf8mb4', 'root', '');

$titre   = $_POST['titre'];
$auteur  = $_POST['auteur'];
$genre   = $_POST['genre'];
$proprio = $_POST['proprio'];

$req = $pdo->prepare('INSERT INTO livres (titre, auteur, genre, proprio) VALUES (?, ?, ?, ?)');
$req->execute([$titre, $auteur, $genre, $proprio]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre ajouté</title>
</head>
<body>
    <h1>Livre ajouté !</h1>
    <p><?= htmlspecialchars($titre) ?> de <?= htmlspecialchars($auteur) ?> a bien été ajouté.</p>
    <p><a href="ajout.php">Ajouter un autre livre</a></p>
    <p><a href="../index.php">Retour à l'accueil</a></p>
</body>
</html>
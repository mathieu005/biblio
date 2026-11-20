<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
</head>
<body>
    <h1>Ajouter un livre</h1>
    <p><a href="../index.php">Accueil</a></p>
    <form action="enregistrer_livre.php" method="post">
        <p>Titre : <input type="text" name="titre" required></p>
        <p>Auteur : <input type="text" name="auteur" required></p>
        <p>Genre : <input type="text" name="genre" required></p>
        <p>Propriétaire : <input type="text" name="proprio" required></p>
        <p><input type="submit" value="Envoyer"></p>
    </form>
</body>
</html>
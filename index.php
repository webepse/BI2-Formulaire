<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="traitement.php">
        <div>
            <label for="nom">Nom: </label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom: </label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="date">Date de naissance: </label>
            <input type="date" id="date" name="date">
        </div>
        <div>
            <input type="submit" value="envoyer">
        </div>
    </form>
</body>
</html>
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
            <label for="pays">Pays: </label>
            <select name="pays" id="pays">
                <option value="BE">Belgique</option>
                <option value="FR">France</option>
                <option value="IT">Italie</option>
                <option value="ES">Espagne</option>
            </select>
        </div>
        <div>
            <label for="com">Commentaire: </label>
            <textarea name="com" id="com" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="envoyer">
        </div>
    </form>
    <?php 
        if(isset($_GET['error']))
        {
            echo "<div class='alert'>Un problème est survenu (code erreur: ".$_GET['error'].")</div>";
        }

    ?>

</body>
</html>
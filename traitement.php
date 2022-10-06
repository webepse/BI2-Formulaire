<?php
    // vérifier que la personne soit passée par mon formulaire et la renvoyer si ce n'est pas le cas

    
    // empty() -> répond vrai ou faux (si vide)
    // isset() -> répond vrai ou faux (si existe)
    // ! négation
    // if -> si et else -> sinon

    if(isset($_POST['nom']))
    {
        $err=0;
        if(empty($_POST['nom']))
        {
            $err=1;
        }else{
            $nom=htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['prenom']))
        {
            $err=2;
        }else{
            $prenom = htmlspecialchars($_POST['prenom']);
        }

        if(empty($_POST['date']))
        {
            $err=3;
        }else{
            $date = htmlspecialchars($_POST['date']);
        }

        if(empty($_POST['pays']))
        {
            $err=4;
        }else{
            $pays = htmlspecialchars($_POST['pays']);
        }
        if(empty($_POST['com']))
        {
            $err=5;
        }else{
            $com = htmlspecialchars($_POST['com']);
        }

        if($err==0)
        {
            // traitement dans la bdd
            echo "<div>".$nom."</div>";
            echo "<div>".$prenom."</div>";
            echo "<div>".$date."</div>";
            echo "<div>".$pays."</div>";
            echo "<div>".nl2br($com)."</div>";
        }else{
            header("LOCATION:index.php?error=".$err);
        }

        



    }else{
        // renvoyer l'utilisateur
        header("LOCATION:index.php");
    }

    



?>

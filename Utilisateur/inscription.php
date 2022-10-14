<?php
    include('connect_db.php');
// recuperation des elements inscrit dans le formulaire
    
    $nom_user   = htmlspecialchars($_POST['nom']);
    $e_mail     = htmlspecialchars($_POST['mail']);
    $user_code  = htmlspecialchars($_POST['user_password']);
    
    //verification de valeur dans la base de donnee 
    if (existe($nom_user,$e_mail,$db)) {
        echo "<br> <b>desole ce compte exite deja </b> <br>";
    }else {
        $db->query('ALTER TABLE compte_client AUTO_INCREMENT=0');//remise du compteur d'incrementation a zero 
        $requete2 = $db->prepare("INSERT INTO compte_client VALUES (null,?,?,?)");//requete d'insertion dans la base de donnee 
        if ( $requete2->execute(array($nom_user,$e_mail,$user_code)) ) {
            echo " Bienvenue M(lle) $nom_user veiller verifier votre compte <br>";
        }
    }

    //fonction de verification de valeur 
    function existe($nom,$mail,$database){
        $requete1    = "SELECT * FROM compte_client"; //requete de selection
        $resultat   = $database->query($requete1);//execution de la requete
        while ($ligne = $resultat->fetch()) {//recuperation ligne par ligne des valeur dans la base de donnee
            if ( ($nom == $ligne['NOM_CLIENT']) || ($mail == $ligne['MAIL']) ) {

                 return true;
            }
        }
    }

?>
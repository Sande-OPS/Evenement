<?php
    
        echo "les information du formulaire d'inscription ne sont pas envoyer <br>";
        session_start();
        $e_mail = htmlspecialchars($_POST['mail']);
        $mot_de_passe = $_POST['user_password'];
        echo "votre mail est : $e_mail et pour mot de passe : $mot_de_passe <br>";
        $crypt_password = md5($mot_de_passe);
        echo "<br>mot de passe crypte : $crypt_password";
?>
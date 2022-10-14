<?php

      //information de connexion a la base de donnee
      $server = "mysql:host=localhost";
      $db_name = "evenement";
      $login   = "root";
      $code ="";
    //commande de connection a la base de donne 
    try{
        $db = new PDO("$server;dbname=$db_name;charset=utf8",$login,$code,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
        die('Erreur fatale :'.$e->getMessage());
    }
?>
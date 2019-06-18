<?php
    include_once "header.php" ;
        
        echo 'Nom : '.$_SESSION['nom'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Prenom : '.$prenom['prenom'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Adresse : '.$_SESSION['adresse'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Ville : '.$_SESSION['ville'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Date Naisannce : '.$_SESSION['dateNaissance'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Tel : '.$_SESSION['telephone'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Ligne preferée : '.$_SESSION['lignePref'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Station preferée : '.$_SESSION['stationPref'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Station preferée 2 : '.$_SESSION['stationPref2'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';
        echo 'Satisfait : '.$_SESSION['satisfait'].' <a href="./index.php?ctrl=membre&action=updateInfoPerso">Modifier</a><br />';

     
    


    include_once "header.php" ;
?>
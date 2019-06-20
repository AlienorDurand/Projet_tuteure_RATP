<?php

class statController{
    
    function display(){
        
        $stat = new Connexion();
        
        $test1 = $stat->getNbTrajetsEffectues($_SESSION['mail']);
        $test2 = $stat->getNbTrajetsStation1($_SESSION['mail']);
        $test3 = $stat->getNbTrajetsStation2($_SESSION['mail']);
        
        var_dump($test1);
        var_dump($test2);
        var_dump($test3);
        
        require ('./View/stat.php'); 
    }
}
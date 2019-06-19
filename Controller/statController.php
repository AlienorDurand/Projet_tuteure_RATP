<?php

class statController{
    
    public function afficheStat(){
        $stat=new Connexion();
        $nbTrajetsEffectues=$stat->getNbTrajetsEffectues($_SESSION['mail']);
        var_dump($getNbTrajetsEffectues);
        $nbTrajetsStation1=$stat->getNbTrajetsStation1($_SESSION['mail']);
        var_dump($getNbTrajetsStation1);
        $nbTrajetsStation2=$stat->getNbTrajetsStation2($_SESSION['mail']);
        var_dump($getNbTrajetsStation2);
        require('./View/stat.php'); 
    }
    
}

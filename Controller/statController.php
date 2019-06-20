<?php 

class statController{
    
    public function afficheStat(){
        
        $stat = new Connexion();
        
        
        $nbTrajetsEffectues = $stat->getNbTrajetsEffectues($_SESSION['mail']);
        $nbTrajetsStation1 = $stat->getNbTrajetsStation1($_SESSION['mail']);
        $nbTrajetsStation2 = $stat->getNbTrajetsStation2($_SESSION['mail']);
        
        require('./View/stat.php');
    }
}
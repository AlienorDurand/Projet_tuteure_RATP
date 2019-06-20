<?php

class rechercheController{
    private $depart;
    private $arrivee;

    public function recherchePage(){
        if((isset($_POST['depart']) && !empty($_POST['depart'])) && (isset($_POST['arrivee']) && !empty($_POST['arrivee']))) {          
           $depart = $_POST['depart'];
           $arrivee = $_POST['arrivee'];
        }
       require('./View/recherche.php'); 
    }
    
}
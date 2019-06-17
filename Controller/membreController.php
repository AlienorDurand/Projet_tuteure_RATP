<?php

class membreController {
   
    public function login(){
        require ('./View/login.php'); 
    }
    
    public function inscription(){
        require ('./View/inscription.php'); 
    }
    
    public function doLogin(){
        if(isset($_POST['connexion']) &&  $_POST['connexion'] == 'Connexion') {
            if((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
                $membre = new Connexion();
                $data = $membre->getMembre($_POST['mail'],$_POST['password']);        
                if ($data[0] == 1){
                session_start();
                $_SESSION['mail'] = $_POST['mail']; 
                require('./View/membre.php');
                exit();
                }
                elseif($data[0] == 0) {
                $erreur = 'Compte non reconnu.';
                require('./View/login.php');
                  }
                else{
                $erreur= 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
                require('./View/login.php');
                } 
            }
            else{
            $erreur = 'Au moins un des champs et vide';
            require('./View/login.php');
            }
            
        }
    }
    
    public function doInscription(){
        if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	       // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	       if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom'])) && (isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['password_confirm']) && !empty($_POST['password_confirm']))) {
	           // on teste les deux mots de passworde
	           if ($_POST['password'] != $_POST['password_confirm']) {
		          $erreur = 'Les 2 mots de passe sont différents.';
	           }
	       else {
	           $membre = new Connexion();
               $data = $membre->getMembre($_POST['mail'],$_POST['password']);

		      if ($data[0] == 0) {
                  $membre->insertMembre($_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['password']);
                  session_start();
                  $_SESSION['mail'] = $_POST['mail'];
                  require('./View/membre.php');
                  exit();
		      }
		      else {
		          $erreur = 'Un membre possède déjà ce mail.';
                  require('./View/inscription.php');
		      }
	       }
	       }
	   else {
	       $erreur = 'Au moins un des champs est vide.';
           require('./View/inscription.php');
	   }
       }
    }
    
    public function infoPerso(){
        $nom = ;
        $prenom = ;
        $email = ;
        $adresse = ;
        $ville = ;
        $dateNaissance = ;
        $telephone = ;
        $lignePref = ;
        $lignePref2 = ;
        $statisfait = ;
        $stationPref = ;
        require('./View/info.php');
    }
    
    public function updateInfoPerso(){
        
    }


    
    
}


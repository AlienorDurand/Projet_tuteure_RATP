<?php

class membreController {
<<<<<<< HEAD
   //redirection vers la page de connexion
    public function login(){
        require ('./View/login.php'); 
    }
    
    //redirection vers la page d'inscription
    public function inscription(){
        require ('./View/inscription.php'); 
    }
    
    //connexion du membre a son compte
    public function doLogin(){
        if(isset($_POST['connexion']) &&  $_POST['connexion'] == 'Connexion') {
            if((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
=======

    public function login() {
        require ('./View/login.php');
    }

    public function inscription() {
        require ('./View/inscription.php');
    }

    public function doLogin() {
        if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
            if ((isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
>>>>>>> master
                $membre = new Connexion();
                $data = $membre->getMembre($_POST['mail'], $_POST['password']);
                if ($data[0] == 1) {
                    session_start();
                    $_SESSION['mail'] = $_POST['mail'];
                    $nom = $membre->getNom($_SESSION['mail']);
                    $_SESSION['nom'] = $nom['nom'];
                    $prenom = $membre->getPrenom($_SESSION['mail']);
                    $_SESSION['prenom'] = $prenom['prenom'];
                    $adresse = $membre->getAdresse($_SESSION['mail']);
                    $_SESSION['adresse'] = $adresse['adresse'];
                    $ville = $membre->getVille($_SESSION['mail']);
                    $_SESSION['ville'] = $ville['ville'];
                    $dateNaissance = $membre->getDateNais($_SESSION['mail']);
                    $_SESSION['dateNaissance'] = $dateNaissance['dateNaissance'];
                    $telephone = $membre->getTel($_SESSION['mail']);
                    $_SESSION['telephone'] = $telephone['telephone'];
                    $lignePref = $membre->getLignePref($_SESSION['mail']);
                    $_SESSION['lignePreferee'] = $lignePref['lignePreferee'];
                    $stationPref = $membre->getStationPref($_SESSION['mail']);
                    $_SESSION['stationPreferee'] = $stationPref['stationPreferee'];
                    $satisfait = $membre->getSatisfait($_SESSION['mail']);
                    $_SESSION['satisfait'] = $satisfait['satisfait'];
                    $stationPref2 = $membre->getStationPref2($_SESSION['mail']);
                    $_SESSION['stationPreferee2'] = $stationPref2['stationPreferee2'];
                    require('./View/info.php');
                    exit();
                } elseif ($data[0] == 0) {
                    $erreur = 'Compte non reconnu.';
                    require('./View/login.php');
                } else {
                    $erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
                    require('./View/login.php');
                }
            } else {
                $erreur = 'Au moins un des champs et vide';
                require('./View/login.php');
            }
        }
    }
<<<<<<< HEAD
    
    //Inscription du nouveau membre s'il n'est pas deja present dans la base
    public function doInscription(){
=======

    public function doInscription() {
>>>>>>> master
        if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
            // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
            if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom'])) && (isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['password_confirm']) && !empty($_POST['password_confirm']))) {
                // on teste les deux mots de passworde
                if ($_POST['password'] != $_POST['password_confirm']) {
                    $erreur = 'Les 2 mots de passe sont différents.';
                } else {
                    $membre = new Connexion();
                    $data = $membre->getMembre($_POST['mail'], $_POST['password']);

                    if ($data[0] == 0) {
                        $membre->insertMembre($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password']);
                        session_start();
                        $_SESSION['mail'] = $_POST['mail'];
                        $nom = $membre->getNom($_SESSION['mail']);
                        $_SESSION['nom'] = $nom['nom'];
                        $prenom = $membre->getPrenom($_SESSION['mail']);
                        $_SESSION['prenom'] = $prenom['prenom'];
                        $adresse = $membre->getAdresse($_SESSION['mail']);
                        $_SESSION['adresse'] = $adresse['adresse'];
                        $ville = $membre->getVille($_SESSION['mail']);
                        $_SESSION['ville'] = $ville['ville'];
                        $dateNaissance = $membre->getDateNais($_SESSION['mail']);
                        $_SESSION['dateNaissance'] = $dateNaissance['dateNaissance'];
                        $telephone = $membre->getTel($_SESSION['mail']);
                        $_SESSION['telephone'] = $telephone['telephone'];
                        $lignePref = $membre->getLignePref($_SESSION['mail']);
                        $_SESSION['lignePreferee'] = $lignePref['lignePreferee'];
                        $stationPref = $membre->getStationPref($_SESSION['mail']);
                        $_SESSION['stationPreferee'] = $stationPref['stationPreferee'];
                        $satisfait = $membre->getSatisfait($_SESSION['mail']);
                        $_SESSION['satisfait'] = $satisfait['satisfait'];
                        $stationPref2 = $membre->getStationPref2($_SESSION['mail']);
                        $_SESSION['stationPreferee2'] = $stationPref2['stationPreferee2'];
                        require('./View/info.php');
                        exit();
                    } else {
                        $erreur = 'Un membre possède déjà ce mail.';
                        require('./View/inscription.php');
                    }
                }
            } else {
                $erreur = 'Au moins un des champs est vide.';
                require('./View/inscription.php');
            }
        }
    }
<<<<<<< HEAD
    
    //redirection vers la page avec les infos affichees par l'ecran
    public function pageAccueilMembre(){
        require('./View/info.php');
    }
    
    //acces aux donnees personnelles de l'utilisateur connecte
    public function infoPerso(){
=======

    public function pageAccueilMembre() {
        require('./View/info.php');
    }

    public function infoPerso() {
>>>>>>> master

        $membre = new Connexion();
        $nom = $membre->getNom($_SESSION['mail']);
        $_SESSION['nom'] = $nom['nom'];
        $prenom = $membre->getPrenom($_SESSION['mail']);
        $_SESSION['prenom'] = $prenom['prenom'];
        $adresse = $membre->getAdresse($_SESSION['mail']);
        $_SESSION['adresse'] = $adresse['adresse'];
        $ville = $membre->getVille($_SESSION['mail']);
        $_SESSION['ville'] = $ville['ville'];
        $dateNaissance = $membre->getDateNais($_SESSION['mail']);
        $_SESSION['dateNaissance'] = $dateNaissance['dateNaissance'];
        $telephone = $membre->getTel($_SESSION['mail']);
        $_SESSION['telephone'] = $telephone['telephone'];
        $lignePref = $membre->getLignePref($_SESSION['mail']);
        $_SESSION['lignePreferee'] = $lignePref['lignePreferee'];
        $stationPref = $membre->getStationPref($_SESSION['mail']);
        $_SESSION['stationPreferee'] = $stationPref['stationPreferee'];
        $satisfait = $membre->getSatisfait($_SESSION['mail']);
        $_SESSION['satisfait'] = $satisfait['satisfait'];
        $stationPref2 = $membre->getStationPref2($_SESSION['mail']);
        $_SESSION['stationPreferee2'] = $stationPref2['stationPreferee2'];

        require('./View/info.php');
    }
<<<<<<< HEAD
    
    //redirection vers la page qui affiche le formulaire afin de pouvoir modifier les infos de l'utilisateur connecte
    public function updateInfoPerso(){
        
        require('./View/modifMembre.php');
    }
    
    //sauvegarde des données personnelles de l'utilisateur connecté
    public function sauvInforPerso(){
        
=======

    public function updateInfoPerso() {

        require('./View/modifMembre.php');
    }

    public function sauvInforPerso() {

>>>>>>> master
        $membre2 = new Connexion();
        $mdp = md5($_POST['password']);
        $membre2->update($_POST['mail'],$mdp,$_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['ville'], $_POST['dateNaissance'], $_POST['telephone'], $_POST['lignePreferee'], $_POST['stationPreferee'], $_POST['satisfait'], $_POST['stationPreferee2'], $_SESSION['mail']);
        
        $membre = new Connexion();
        
        $_SESSION['mail'] = $_POST['mail'];
        $nom = $membre->getNom($_SESSION['mail']);
        $_SESSION['nom'] = $nom['nom'];
        $prenom = $membre->getPrenom($_SESSION['mail']);
        $_SESSION['prenom'] = $prenom['prenom'];
        $adresse = $membre->getAdresse($_SESSION['mail']);
        $_SESSION['adresse'] = $adresse['adresse'];
        $ville = $membre->getVille($_SESSION['mail']);
        $_SESSION['ville'] = $ville['ville'];
        $dateNaissance = $membre->getDateNais($_SESSION['mail']);
        $_SESSION['dateNaissance'] = $dateNaissance['dateNaissance'];
        $telephone = $membre->getTel($_SESSION['mail']);
        $_SESSION['telephone'] = $telephone['telephone'];
        $lignePref = $membre->getLignePref($_SESSION['mail']);
        $_SESSION['lignePreferee'] = $lignePref['lignePreferee'];
        $stationPref = $membre->getStationPref($_SESSION['mail']);
        $_SESSION['stationPreferee'] = $stationPref['stationPreferee'];
        $satisfait = $membre->getSatisfait($_SESSION['mail']);
        $_SESSION['satisfait'] = $satisfait['satisfait'];
        $stationPref2 = $membre->getStationPref2($_SESSION['mail']);
        $_SESSION['stationPreferee2'] = $stationPref2['stationPreferee2'];

        require('./View/info.php');
    }
<<<<<<< HEAD
    
    //Deconnexion du membre
    public function deconnexion(){
=======

    public function deconnexion() {
>>>>>>> master
        session_unset();
        require('./View/default.php');
    }

}

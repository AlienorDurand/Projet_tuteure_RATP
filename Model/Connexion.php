<?php

class Connexion {

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct() {

        $this->username = 'root';
        $this->password = 'mysql'; //root pour MAMP et mysql pour AMPSS
        
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=ptut', $this->username, $this->password);
        } catch (Exception $ex) {
            echo "<script>alert(\"Problème de connexion\")</script> " . $ex->getMessage();
        }
    }
    function getDb() {
        return $this->db;
    }
    
    function getMembre($mail,$password){
        $sql = $this->db->prepare('SELECT count(*) FROM membre WHERE mail= ? AND password=?');
		$sql->execute(array($mail,md5($password)));
        return $sql->fetch();
    }
    
    function insertMembre($nom,$prenom,$mail,$password){
        $sql = $this->db->prepare('INSERT INTO membre(nom,prenom,mail,password) VALUES(?,?,?,?)');
        $sql->execute(array($nom,$prenom,$mail,md5($password)));        
    }

    function update($nom,$prenom,$adr,$vil,$dateNai,$tel,$lignePref,$staPref,$satis,$statPref2,$mail){
        $sql = $this->db->prepare('
        UPDATE membre SET 
        nom = ?,
        prenom = ?,
        adresse = ? ,
        ville = ?,
        dateNaissance = ?,
        telephone= ?,
        lignePreferee=?,
        stationPreferee=?,
        satisfait=?,
        stationPreferee2=?
        where mail=?
        ');
        $sql->execute(array($nom,$prenom,$adr,$vil,$dateNai,$tel,$lignePref,$staPref,$satis,$statPref2,$mail)); 
    }
    
    
    ////////////////////////////////////////// Select user en fct de l'email ///////////////////////////////////
    function getNom($mail){
        $sql = $this->db->prepare('SELECT nom FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getPrenom($mail){
        $sql = $this->db->prepare('SELECT prenom FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    
    // aucun sens
    function getMail($mail){
        $sql = $this->db->prepare('SELECT mail FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    
    // en attente
    function getPassword($mail){
        $sql = $this->db->prepare('SELECT password FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    
    
    function getAdresse($mail){
        $sql = $this->db->prepare('SELECT adresse FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getVille($mail){
        $sql = $this->db->prepare('SELECT ville FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
            
    }
    function getDateNais($mail){
        $sql = $this->db->prepare('SELECT dateNaissance FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getTel($mail){
        $sql = $this->db->prepare('SELECT telephone FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getLignePref($mail){
        $sql = $this->db->prepare('SELECT lignePreferee FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getStationPref($mail){
        $sql = $this->db->prepare('SELECT stationPreferee FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getSatisfait($mail){
        $sql = $this->db->prepare('SELECT satisfait FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getStationPref2($mail){
        $sql = $this->db->prepare('SELECT stationPreferee2 FROM membre WHERE mail=?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getNbTrajetsEffectues($mail){
        $sql = $this->db->prepare('SELECT COUNT(*) FROM trajet t,membre m WHERE m.id=t.idMembre and m.mail =?');
        $sql->execute(array($mail));
        return $sql->fetch();      
    }
    function getNbTrajetsStation1($mail){
        $sql = $this->db->prepare('SELECT COUNT(*) FROM membre m,trajet t WHERE m.id=t.idMembre and m.stationPreferee=t.stationDepart or m.stationPreferee=t.stationArrivee and m.mail =?');
        $sql = $this->db->prepare('SELECT COUNT(*) FROM trajet t,membre m WHERE m.id=t.idMembre and m.stationPreferee=t.stationDepart or m.stationPreferee=t.stationArrivee and m.mail =?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getNbTrajetsStation2($mail){
        $sql = $this->db->prepare('SELECT COUNT(*) FROM trajet t,membre m WHERE m.id=t.idMembre and m.stationPreferee2=t.stationDepart or m.stationPreferee2=t.stationArrivee and m.mail =?');
        $sql->execute(array($mail));
        return $sql->fetch();
    }
    function getTotalLignePref(){
        $sql = $this->db->query('SELECT count(*) as nbStation,lignePreferee FROM membre GROUP BY lignePreferee');
        return $sql->fetchAll();
    }
}




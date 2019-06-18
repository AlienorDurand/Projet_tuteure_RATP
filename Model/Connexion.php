<?php

class Connexion {

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct() {

        $this->username = 'root';
        $this->password = 'root'; //root pour MAMP et mysql pour AMPSS
        
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



}
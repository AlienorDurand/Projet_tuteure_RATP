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
            echo "Problème de connexion" . $ex->getMessage();
        }
    }
    function getDb() {
        return $this->db;
    }


}
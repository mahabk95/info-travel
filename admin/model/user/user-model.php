<?php
class Depot extends MySQL {
    private $id;
    private $label;

    public function getLabel(){
        return $this->label;
    }

    public function setLabel($l){
       $this->label = $l;
       return $this;
    }
    public function setId($l){
        $this->id = $l;
        return $this;
    }
    public function getId(){
        return $this->id;
    }

    public function __construct($id = NULL,$label = NULL) {

            $this->id = $id;
            $this->label = $label;


    }

    public function getDepot() {
        $iddepot = $this->id;
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM user WHERE id  = $iduser";
        $stmt =$dbh->prepare($sql);
        $stmt->fetchObject(__CLASS__);
        $stmt->execute();

        foreach ($stmt as $d) {

             $user = new user($d['id'],$d['label']);
            return $user;
        }


    }

    public  function getAllDepots() {
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM user WHERE 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt;

    }

    /*public  function getDeptById($id) {
      
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM depot WHERE id  = $id";
        $stmt =$dbh->prepare($sql);
        $stmt->execute();
        $stmt->fetchObject(__CLASS__);
            var_dump($stmt);
            die;
        foreach ($stmt as $content_page) {
            // print_r($client);
            return $content_page;
        }
    }*/

    public function update() {
        $dbh = MySQL::getInstance();
        $requete = "UPDATE user  SET `label` =:label WHERE id=:id";
        $stmt = $dbh->prepare($requete);
        $stmt->bindParam(':label', $this->label);
        $stmt->bindParam(':id', $this->id);

        $res = $stmt->execute();

        return $res;
    }

    public function save() {
        $dbh = MySQL::getInstance();
        $requete_insert = "INSERT INTO user ( `label`) VALUES (:label)";
        $stmt = $dbh->prepare($requete_insert);
        $stmt->bindParam(':label', $this->label);
        $res = $stmt->execute();
        $iddepot = $this->id;
        return $iddepot;
    }

    public function delete() {
        $dbh = MySQL::getInstance();
        $sql = "DELETE FROM user WHERE id =:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $res = $stmt->execute();
        return $res;

    }
}
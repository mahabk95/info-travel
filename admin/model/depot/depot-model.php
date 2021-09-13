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
        $sql = "SELECT * FROM depot WHERE id  = $iddepot";
        $stmt =$dbh->prepare($sql);
        $stmt->fetchObject(__CLASS__);
        $stmt->execute();

        foreach ($stmt as $d) {

             $depot = new Depot($d['id'],$d['label']);
            return $depot;
        }


    }

    public  function getAllDepots() {
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM depot WHERE 1";
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
        $requete = "UPDATE station  SET `label` =:label WHERE id=:id";
        $stmt = $dbh->prepare($requete);
        $stmt->bindParam(':label', $this->label);
        $stmt->bindParam(':id', $this->id);

        $res = $stmt->execute();

        return $res;
    }

    public function save() {
        $dbh = MySQL::getInstance();
        $requete_insert = "INSERT INTO depot ( `label`) VALUES (:label)";
        $stmt = $dbh->prepare($requete_insert);
        $stmt->bindParam(':label', $this->label);
        $res = $stmt->execute();
        $iddepot = $dbh->lastInsertId();
        return $iddepot;
    }

    public function delete() {
        $dbh = MySQL::getInstance();
        $sql = "DELETE FROM depot WHERE id =:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $res = $stmt->execute();
        return $res;

    }
}
<?php
class prog_saisonaire extends MySQL {
    private $id;
    private $label;
    private $dateFin;
    private $dateDebut;

    /**
     * prog_saisonaire constructor.
     * @param $id
     * @param $label
     * @param $dateFin
     * @param $dateDebut
     */
    public function __construct($id = NULL, $label= NULL, $dateFin= NULL, $dateDebut= NULL)
    {
        $this->id = $id;
        $this->label = $label;
        $this->dateFin = $dateFin;
        $this->dateDebut = $dateDebut;
    }

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

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }



    public function getProgrammeSaison() {
        $idprog_saisonaire = $this->id;
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM programme_saisonaire WHERE id  = $idprog_saisonaire";
        $stmt =$dbh->prepare($sql);
        $stmt->fetchObject(__CLASS__);
        $stmt->execute();

        foreach ($stmt as $p) {

             $ps = new prog_saisonaire($p['id'],$p['label'],$p['date_debut'],$p['date_fin']);
            return $ps;
        }


    }

    public  function getAllProgramSaisoniaire() {
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM programme_saisonaire WHERE 1";
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
        $requete = "UPDATE programme_saisonaire  SET `label` =:label, `date_debut` =:dd, `date_fin` =:df  WHERE id=:id";
        $stmt = $dbh->prepare($requete);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':label', $this->label);
        $stmt->bindParam(':dd', $this->dateDebut);
        $stmt->bindParam(':df', $this->dateFin);
        $res = $stmt->execute();

        return $res;
    }

    public function save() {
        $dbh = MySQL::getInstance();
        $requete_insert = "INSERT INTO programme_saisonaire ( `label`, `date_debut`, `date_fin`) VALUES (:label, :date_debut, :date_fin)";
        $stmt = $dbh->prepare($requete_insert);
        $stmt->bindParam(':label', $this->label);
        $stmt->bindParam(':date_debut', $this->dateDebut);
        $stmt->bindParam(':date_fin', $this->dateFin);
        $res = $stmt->execute();
        return $this->id;
    }

    public function delete() {
        $dbh = MySQL::getInstance();
        $sql = "DELETE FROM programme_saisonaire WHERE id =:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $res = $stmt->execute();
        return $res;

    }
}
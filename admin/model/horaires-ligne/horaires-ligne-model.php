<?php
class HorairesLigne extends MySQL {
    private $id;
    private $direction;
    private $heureDepart;
    private $heureArrivee;
    private $numeroDepart;
    private $regim_hebdomadeur_id;
    private $ligne_id;
    private $programme_saisonaire_id;

    /**
     * HorairesLigne constructor.
     * @param $id
     * @param $direction
     * @param $heureDepart
     * @param $heureArrivee
     * @param $numeroDepart
     * @param $regim_hebdomadeur_id
     * @param $ligne_id
     * @param $programme_saisonaire_id
     */
    public function __construct($id = NULL, $direction= NULL, $heureDepart= NULL, $heureArrivee= NULL, $numeroDepart= NULL, $regim_hebdomadeur_id= NULL, $ligne_id= NULL, $programme_saisonaire_id = NULL)
    {
        $this->id = $id;
        $this->direction = $direction;
        $this->heureDepart = $heureDepart;
        $this->heureArrivee = $heureArrivee;
        $this->numeroDepart = $numeroDepart;
        $this->regim_hebdomadeur_id = $regim_hebdomadeur_id;
        $this->ligne_id = $ligne_id;
        $this->programme_saisonaire_id = $programme_saisonaire_id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return HorairesLigne
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     * @return HorairesLigne
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * @param mixed $heureDepart
     * @return HorairesLigne
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeureArrivee()
    {
        return $this->heureArrivee;
    }

    /**
     * @param mixed $heureArrivee
     * @return HorairesLigne
     */
    public function setHeureArrivee($heureArrivee)
    {
        $this->heureArrivee = $heureArrivee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroDepart()
    {
        return $this->numeroDepart;
    }

    /**
     * @param mixed $numeroDepart
     * @return HorairesLigne
     */
    public function setNumeroDepart($numeroDepart)
    {
        $this->numeroDepart = $numeroDepart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegimHebdomadeurId()
    {
        return $this->regim_hebdomadeur_id;
    }

    /**
     * @param mixed $regin_hebdomadeur_id
     * @return HorairesLigne
     */
    public function setRegimHebdomadeurId($regim_hebdomadeur_id)
    {
        $this->regim_hebdomadeur_id = $regim_hebdomadeur_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLigneId()
    {
        return $this->ligne_id;
    }

    /**
     * @param mixed $ligne_id
     * @return HorairesLigne
     */
    public function setLigneId($ligne_id)
    {
        $this->ligne_id = $ligne_id;
        return $this;
    }

    /**
     * @return null
     */
    public function getProgrammeSaisonaireId()
    {
        return $this->programme_saisonaire_id;
    }

    /**
     * @param $programme_saisonaire_id
     * @return $this
     */


    public function setProgrammeSaisonaireId($programme_saisonaire_id)
    {
        $this->programme_saisonaire_id = $programme_saisonaire_id;
        return $this;
    }





    public function getHorairesLigne($ligneId) {
        $ligneId = $this->id;
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM horaires_lignes WHERE id  = $ligneId";
        $stmt =$dbh->prepare($sql);
        $stmt->fetchObject(__CLASS__);
        $stmt->execute();

        foreach ($stmt as $d) {

             $depot = new HorairesLigne($d['id'],$d['label']);
            return $depot;
        }


    }

    public  function getAllDepots() {
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM horaires_lignes WHERE 1";
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
        $requete = "UPDATE horaires_lignes  SET `label` =:label WHERE id=:id";
        $stmt = $dbh->prepare($requete);
        $stmt->bindParam(':label', $this->label);
        $stmt->bindParam(':id', $this->id);

        $res = $stmt->execute();

        return $res;
    }

    public function save() {
        $dbh = MySQL::getInstance();
        $requete_insert = "INSERT INTO  horaires_lignes ( `direction`, `heure_depart`, `heure_arrive`, `numero_depart`,`ligne_id`, `regim_hebdomadeur_id`, `programme_saisonaire_id` ) VALUES (:direction, :heure_depart, :heure_arrive, :numero_depart,:ligne_id, :regim_hebdomadeur_id, :programme_saisonaire_id )";
        $stmt = $dbh->prepare($requete_insert);
        var_dump($this);
        $stmt->bindParam(':direction', $this->direction);
        $stmt->bindParam(':heure_depart', $this->heureDepart);
        $stmt->bindParam(':heure_arrive', $this->heureArrivee);
        $stmt->bindParam(':numero_depart', $this->numeroDepart);
        $stmt->bindParam(':ligne_id', $this->ligne_id);
        $stmt->bindParam(':regim_hebdomadeur_id', $this->regim_hebdomadeur_id);
        $stmt->bindParam(':programme_saisonaire_id', $this->programme_saisonaire_id);
        $res = $stmt->execute();
        $id = $this->id;
        return $id;
    }
    public function saveHoraire(){

    }
    public function delete() {
        $dbh = MySQL::getInstance();
        $sql = "DELETE FROM horaires_lignes WHERE id =:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $res = $stmt->execute();
        return $res;

    }
}
<?php
class Ligne extends MySQL {




    private $id = NULL;
    private $numero;
    private $status;
    private $station_depart_id;
    private $station_arrivee_id;
    private $depot_id;
    private $regin_hebdomadeur_id;

    /**
     * Ligne constructor.
     * @param null $id
     * @param $numero
     * @param $status
     * @param $station_depart_id
     * @param $station_arrivee_id
     * @param $depot_id
     * @param $regin_hebdomadeur_id
     */
    public function __construct($id = NULL, $numero = NULL, $status = NULL , $station_depart_id  = NULL, $station_arrivee_id = NULL, $depot_id = NULL, $regin_hebdomadeur_id = NULL)
    {
        $this->id = $id;
        $this->numero = $numero;
        $this->status = $status;
        $this->station_depart_id = $station_depart_id;
        $this->station_arrivee_id = $station_arrivee_id;
        $this->depot_id = $depot_id;
        $this->regin_hebdomadeur_id = $regin_hebdomadeur_id;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     * @return Station
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     * @return Station
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Station
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStationDepartId()
    {
        return $this->station_depart_id;
    }

    /**
     * @param mixed $station_depart_id
     */
    public function setStationDepartId($station_depart_id)
    {
        $this->station_depart_id = $station_depart_id;
    }

    /**
     * @return mixed
     */
    public function getStationArriveeId()
    {
        return $this->station_arrivee_id;
    }

    /**
     * @param mixed $station_arrivee_id
     */
    public function setStationArriveeId($station_arrivee_id)
    {
        $this->station_arrivee_id = $station_arrivee_id;
    }

    /**
     * @return mixed
     */
    public function getDepotId()
    {
        return $this->depot_id;
    }

    /**
     * @param mixed $depot_id
     */
    public function setDepotId($depot_id)
    {
        $this->depot_id = $depot_id;
    }

    /**
     * @return mixed
     */
    public function getReginHebdomadeurId()
    {
        return $this->regin_hebdomadeur_id;
    }

    /**
     * @param mixed $regin_hebdomadeur_id
     */
    public function setReginHebdomadeurId($regin_hebdomadeur_id)
    {
        $this->regin_hebdomadeur_id = $regin_hebdomadeur_id;
    }



   /* public function __construct($id = NULL, $numero = NULL, $status = NULL) {

        $this->id = $id;
        $this->numero = $numero;
        $this->status = $status;


    }*/

    public function getLigne() {
        $iddepot = $this->id;
        $dbh = MySQL::getInstance();
        $sql = "SELECT * FROM ligne WHERE id  = $iddepot";
        $stmt =$dbh->prepare($sql);
        $stmt->execute();
        foreach ($stmt as $L) {

            $ligne = new Ligne();
            $ligne->setId($L['id']);
            $ligne->setStatus($L['status']);
            $ligne->setNumero($L['numero']);
            $ligne->setDepotId($L['depot_id']);
            $ligne->setReginHebdomadeurId($L['regin_hebdomadeur_id']);
            $ligne->setStationArriveeId($L['station_arrivee_id']);
            $ligne->setStationDepartId($L['station_depart_id']);

            return $ligne;
        }


    }
    public function getLigneById($id) {

        $dbh = MySQL::getInstance();
        $sql = "SELECT l.id, l.numero, d.label as label_depot, r.label as label_rh, sd.label as label_sd, sa.label as label_sa, l.status
          FROM ligne l, depot d, regim_hebdomadaire r, station sd, station sa
          WHERE  d.id = l.depot_id and r.id = l.regin_hebdomadeur_id and sa.id = l.station_depart_id and sd.id = l.station_arrivee_id and l.id = $id";
        $stmt =$dbh->prepare($sql);
        $stmt->execute();
        foreach ($stmt as $ligne) {


            return $ligne;
        }


    }
    public  function getAllLignes() {
        $dbh = MySQL::getInstance();
        $sql = "SELECT l.id, l.numero, d.label as label_depot, r.label as label_rh, sd.label as label_sd, sa.label as label_sa, l.status
          FROM ligne l, depot d, regim_hebdomadaire r, station sd, station sa
          WHERE  d.id = l.depot_id and r.id = l.regin_hebdomadeur_id and sa.id = l.station_depart_id and sd.id = l.station_arrivee_id";
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
        $requete = "UPDATE ligne  
        SET `numero`= :numero, `status` = :status, `station_depart_id` = :sd, `station_arrivee_id` = :sa,`depot_id` =:d, `regin_hebdomadeur_id` = :rh 
        WHERE id = :id";
        $stmt = $dbh->prepare($requete);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':sd', $this->station_depart_id);
        $stmt->bindParam(':sa', $this->station_arrivee_id);
        $stmt->bindParam(':d', $this->depot_id);
        $stmt->bindParam(':rh', $this->regin_hebdomadeur_id);
        $stmt->bindParam(':id', $this->id);

        $res = $stmt->execute();

        return $res;
    }

    public function save() {
        $dbh = MySQL::getInstance();
        $requete_insert = "INSERT INTO ligne ( `numero`, `status`, `station_depart_id`, `station_arrivee_id`,`depot_id`, `regin_hebdomadeur_id` ) VALUES (:numero, :status, :station_depart_id, :station_arrivee_id,:depot_id, :regin_hebdomadeur_id )";
        $stmt = $dbh->prepare($requete_insert);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':station_depart_id', $this->station_depart_id);
        $stmt->bindParam(':station_arrivee_id', $this->station_arrivee_id);
        $stmt->bindParam(':depot_id', $this->depot_id);
        $stmt->bindParam(':regin_hebdomadeur_id', $this->regin_hebdomadeur_id);
        $res = $stmt->execute();
        $iddepot = $this->id;
        return $iddepot;
    }

    public function delete() {
        $dbh = MySQL::getInstance();
        $sql = "DELETE FROM ligne WHERE id =:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $res = $stmt->execute();
        return $res;

    }
}
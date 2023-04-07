<?php
require "schoolConnect.php";
class klanten
{

    public $klantNaam;
    public $klantEmail;
    public $klantAdres;
    public $klantPostcode;
    public $klantWoonplaats;
    public $klantId;

    public function __construct($klantId,$klantNaam, $klantEmail, $klantAdres, $klantPostcode, $klantWoonplaats) {
        $this->klantNaam = $klantNaam;
        $this->klantEmail = $klantEmail;
        $this->klantAdres = $klantAdres;
        $this->klantPostcode = $klantPostcode;
        $this->klantWoonplaats = $klantWoonplaats;
        $this->klantId = $klantId;
    }

    public function create(){
        global $conn;
        $query = $conn->prepare("INSERT INTO klanten (klantId,klantNaam, klantEmail, klantAdres, klantPostcode, klantWoonplaats) VALUES (:klantId,:klantNaam, :klantEmail, :klantAdres, :klantPostcode, :klantWoonplaats)");
        $query->bindParam(":klantNaam", $this->klantNaam);
        $query->bindParam(":klantEmail", $this->klantEmail);
        $query->bindParam(":klantAdres", $this->klantAdres);
        $query->bindParam(":klantPostcode", $this->klantPostcode);
        $query->bindParam(":klantWoonplaats", $this->klantWoonplaats);
        $query->bindParam(":klantId", $this->klantId);
        $query->execute();
    }

    public function Delete($klantId){
        global $conn;
        $query = "DELETE FROM klanten WHERE klantId=$klantId";
        $query = $conn->prepare($query);
        $query->execute();
        echo $klantId;

    }

    /**
     * @return mixed
     */
    public function getKlantNaam()
    {
        return $this->klantNaam;
    }

    /**
     * @param mixed $klantNaam
     */
    public function setKlantNaam($klantNaam)
    {
        $this->klantNaam = $klantNaam;
    }

    /**
     * @return mixed
     */
    public function getKlantEmail()
    {
        return $this->klantEmail;
    }

    /**
     * @param mixed $klantEmail
     */
    public function setKlantEmail($klantEmail)
    {
        $this->klantEmail = $klantEmail;
    }

    /**
     * @return mixed
     */
    public function getKlantAdres()
    {
        return $this->klantAdres;
    }

    /**
     * @param mixed $klantAdres
     */
    public function setKlantAdres($klantAdres)
    {
        $this->klantAdres = $klantAdres;
    }

    /**
     * @return mixed
     */
    public function getKlantPostcode()
    {
        return $this->klantPostcode;
    }

    /**
     * @param mixed $klantPostcode
     */
    public function setKlantPostcode($klantPostcode)
    {
        $this->klantPostcode = $klantPostcode;
    }

    /**
     * @return mixed
     */
    public function getKlantWoonplaats()
    {
        return $this->klantWoonplaats;
    }

    /**
     * @param mixed $klantWoonplaats
     */
    public function setKlantWoonplaats($klantWoonplaats)
    {
        $this->klantWoonplaats = $klantWoonplaats;
    }

    /**
     * @return mixed
     */
    public function getKlantId()
    {
        return $this->klantId;
    }

    /**
     * @param mixed $klantId
     */
    public function setKlantId($klantId)
    {
        $this->klantId = $klantId;
    }




}
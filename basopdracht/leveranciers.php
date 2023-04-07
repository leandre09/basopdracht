<?php

require "schoolConnect.php";
class Leverancier {
    public $levId;
    public $levnaam;
    public $levcontact;
    public $levEmail;
    public $levAdres;
    public $levPostcode;
    public $levWoonplaats;

    public function __construct($levId, $levnaam, $levcontact, $levEmail, $levAdres, $levPostcode, $levWoonplaats) {
        $this->levId = $levId;
        $this->levnaam = $levnaam;
        $this->levcontact = $levcontact;
        $this->levEmail = $levEmail;
        $this->levAdres = $levAdres;
        $this->levPostcode = $levPostcode;
        $this->levWoonplaats = $levWoonplaats;
    }

    public function create(){
        global $conn;
        $query = $conn->prepare("INSERT INTO leveranciers (levnaam, levcontact, levEmail, levAdres, levPostcode,levWoonplaats)VALUES (:levnaam,:levcontact,:levEmail,:levAdres,:levPostcode,:levWoonplaats)");
        $query->bindParam(":levnaam", $this->levnaam);
        $query->bindParam(":levcontact", $this->levcontact);
        $query->bindParam(":levEmail", $this->levEmail);
        $query->bindParam(":levAdres", $this->levAdres);
        $query->bindParam(":levPostcode", $this->levPostcode);
        $query->bindParam(":levWoonplaats", $this->levWoonplaats);
        $query->execute();
    }

    /**
     * @return mixed
     */
    public function getLevId()
    {
        return $this->levId;
    }

    /**
     * @param mixed $levId
     */
    public function setLevId($levId)
    {
        $this->levId = $levId;
    }

    /**
     * @return mixed
     */
    public function getLevnaam()
    {
        return $this->levnaam;
    }

    /**
     * @param mixed $levnaam
     */
    public function setLevnaam($levnaam)
    {
        $this->levnaam = $levnaam;
    }

    /**
     * @return mixed
     */
    public function getLevcontact()
    {
        return $this->levcontact;
    }

    /**
     * @param mixed $levcontact
     */
    public function setLevcontact($levcontact)
    {
        $this->levcontact = $levcontact;
    }

    /**
     * @return mixed
     */
    public function getLevEmail()
    {
        return $this->levEmail;
    }

    /**
     * @param mixed $levEmail
     */
    public function setLevEmail($levEmail)
    {
        $this->levEmail = $levEmail;
    }

    /**
     * @return mixed
     */
    public function getLevAdres()
    {
        return $this->levAdres;
    }

    /**
     * @param mixed $levAdres
     */
    public function setLevAdres($levAdres)
    {
        $this->levAdres = $levAdres;
    }

    /**
     * @return mixed
     */
    public function getLevPostcode()
    {
        return $this->levPostcode;
    }

    /**
     * @param mixed $levPostcode
     */
    public function setLevPostcode($levPostcode)
    {
        $this->levPostcode = $levPostcode;
    }

    /**
     * @return mixed
     */
    public function getLevWoonplaats()
    {
        return $this->levWoonplaats;
    }

    /**
     * @param mixed $levWoonplaats
     */
    public function setLevWoonplaats($levWoonplaats)
    {
        $this->levWoonplaats = $levWoonplaats;
    }

}


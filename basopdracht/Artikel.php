<?php
require_once "databaseConn.php";
class Artikel
{
    public $artId;
    public $artOmschrijving;
    public $artInkoop;
    public $artVerkoop;
    public $artVoorraad;
    public $artMinVoorraad;
    public $artMaxVoorraad;
    public $artLocatie;
    public $levId;

    function __construct($artOmschrijving=null, $artInkoop=null, $artVerkoop=null, $artVoorraad=null, $artMinVoorraad=null, $artMaxVoorraad=null, $artLocatie=null, $levId=null)
    {
        $this->artOmschrijving = $artOmschrijving;
        $this->artInkoop = $artInkoop;
        $this->artVerkoop = $artVerkoop;
        $this->artVoorraad = $artVoorraad;
        $this->artMinVoorraad = $artMinVoorraad;
        $this->artMaxVoorraad = $artMaxVoorraad;
        $this->artLocatie = $artLocatie;
        $this->levId = $levId;


    }

    public function Create()
    {
        global $conn;
        $query = $conn->prepare("INSERT INTO Artikelen (artOmschrijving, artInkoop, artVerkoop, artVoorraad, artMinVoorraad, artMaxVoorraad, artLocatie, levId)
            VALUES ('$this->artOmschrijving', $this->artInkoop, $this->artVerkoop, $this->artVoorraad, $this->artMinVoorraad, $this->artMaxVoorraad, '$this->artLocatie', $this->levId)");
        $query->execute();
    }

    public function Delete($artId){
        global $conn;
        $sql = "DELETE FROM Artikelen WHERE artId=$artId";
        $query = $conn->prepare($sql);
        $query->execute();

    }


    /**
     * @return mixed
     */
    public function getArtId()
    {
        return $this->artId;
    }

    /**
     * @param mixed $artId
     */
    public function setArtId($artId)
    {
        $this->artId = $artId;
    }

    /**
     * @return mixed
     */
    public function getArtOmschrijving()
    {
        return $this->artOmschrijving;
    }

    /**
     * @param mixed $artOmschrijving
     */
    public function setArtOmschrijving($artOmschrijving)
    {
        $this->artOmschrijving = $artOmschrijving;
    }

    /**
     * @return mixed
     */
    public function getArtInkoop()
    {
        return $this->artInkoop;
    }

    /**
     * @param mixed $artInkoop
     */
    public function setArtInkoop($artInkoop)
    {
        $this->artInkoop = $artInkoop;
    }

    /**
     * @return mixed
     */
    public function getArtVerkoop()
    {
        return $this->artVerkoop;
    }

    /**
     * @param mixed $artVerkoop
     */
    public function setArtVerkoop($artVerkoop)
    {
        $this->artVerkoop = $artVerkoop;
    }

    /**
     * @return mixed
     */
    public function getArtVoorraad()
    {
        return $this->artVoorraad;
    }

    /**
     * @param mixed $artVoorraad
     */
    public function setArtVoorraad($artVoorraad)
    {
        $this->artVoorraad = $artVoorraad;
    }

    /**
     * @return mixed
     */
    public function getArtMinVoorraad()
    {
        return $this->artMinVoorraad;
    }

    /**
     * @param mixed $artMinVoorraad
     */
    public function setArtMinVoorraad($artMinVoorraad)
    {
        $this->artMinVoorraad = $artMinVoorraad;
    }

    /**
     * @return mixed
     */
    public function getArtMaxVoorraad()
    {
        return $this->artMaxVoorraad;
    }

    /**
     * @param mixed $artMaxVoorraad
     */
    public function setArtMaxVoorraad($artMaxVoorraad)
    {
        $this->artMaxVoorraad = $artMaxVoorraad;
    }

    /**
     * @return mixed
     */
    public function getArtLocatie()
    {
        return $this->artLocatie;
    }

    /**
     * @param mixed $artLocatie
     */
    public function setArtLocatie($artLocatie)
    {
        $this->artLocatie = $artLocatie;
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

    public function deleteArtikel(Artikel $artId)
    {
    }


}
<?php
require_once "databaseConn.php";
class verkooporders
{public $klantId;
    public $artId;
    public $verkOrdDatum;
    public $verkOrdBestAantal;
    public $verkOrdStatus;

    public function __construct($klantId, $artId, $verkOrdDatum, $verkOrdBestAantal, $verkOrdStatus) {
        $this->klantId = $klantId;
        $this->artId = $artId;
        $this->verkOrdDatum = $verkOrdDatum;
        $this->verkOrdBestAantal = $verkOrdBestAantal;
        $this->verkOrdStatus = $verkOrdStatus;
    }

    public
    function create()
    {
        global $conn;
        $query = $conn->prepare("INSERT INTO verkooporders(klantId, artId, verkOrdDatum, verkOrdBestAantal, verkOrdStatus) VALUES (:klantId,:artId,:verkOrdDatum,:verkOrdBestAantal,:verkOrdStatus)");
        $query->bindParam(":klantId", $this->klantId);
        $query->bindParam(":artId", $this->artId);
        $query->bindParam(":verkOrdDatum", $this->verkOrdDatum);
        $query->bindParam(":verkOrdBestAantal", $this->verkOrdBestAantal);
        $query->bindParam(":verkOrdStatus", $this->verkOrdStatus);
        $query->execute();
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
    public function getVerkOrdDatum()
    {
        return $this->verkOrdDatum;
    }

    /**
     * @param mixed $verkOrdDatum
     */
    public function setVerkOrdDatum($verkOrdDatum)
    {
        $this->verkOrdDatum = $verkOrdDatum;
    }

    /**
     * @return mixed
     */
    public function getVerkOrdBestAantal()
    {
        return $this->verkOrdBestAantal;
    }

    /**
     * @param mixed $verkOrdBestAantal
     */
    public function setVerkOrdBestAantal($verkOrdBestAantal)
    {
        $this->verkOrdBestAantal = $verkOrdBestAantal;
    }

    /**
     * @return mixed
     */
    public function getVerkOrdStatus()
    {
        return $this->verkOrdStatus;
    }

    /**
     * @param mixed $verkOrdStatus
     */
    public function setVerkOrdStatus($verkOrdStatus)
    {
        $this->verkOrdStatus = $verkOrdStatus;
    }



}

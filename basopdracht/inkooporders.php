<?php
require "schoolConnect.php";


class inkooporder
{


    public $inkOrdId;
    public $levId;
    public $artId;
    public $inkOrdDatum;
    public $inkOrdBestAantal;
    public $inkOrdStatus;

    public function __construct($inkOrdId=NULL,$levId=NULL,$artId=NULL, $inkOrdDatum=NULL, $inkOrdBestAantal=NULL, $inkOrdStatus=NULL)
    {
        $this->levId = $levId;
        $this->artId = $artId;
        $this->inkOrdDatum = $inkOrdDatum;
        $this->inkOrdBestAantal = $inkOrdBestAantal;
        $this->inkOrdStatus = $inkOrdStatus;
        $this->inkOrdId = $inkOrdId;
    }



            public
            function create()
            {
                global $conn;
                $query = $conn->prepare("INSERT INTO inkooporder (inkOrdId,levId, artId, inkOrdDatum, inkOrdBestAantal, inkOrdStatus) VALUES (:inkOrdId,:levId,:artId,:inkOrdDatum,:inkOrdBestAantal,:inkOrdStatus)");
                $query->bindParam(":artId", $this->artId);
                $query->bindParam(":levId", $this->levId);
                $query->bindParam(":inkOrdDatum", $this->inkOrdDatum);
                $query->bindParam(":inkOrdBestAantal", $this->inkOrdBestAantal);
                $query->bindParam(":inkOrdStatus", $this->inkOrdStatus);
                $query->bindParam(":inkOrdId", $this->inkOrdId);
                $query->execute();
            }

    public function Delete($inkOrdId){
        global $conn;
        $query = "DELETE FROM inkooporder WHERE inkOrdId=$inkOrdId";
        $query = $conn->prepare($query);
        $query->execute();
        echo $inkOrdId;

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
    public function getInkOrdDatum()
    {
        return $this->inkOrdDatum;
    }

    /**
     * @param mixed $inkOrdDatum
     */
    public function setInkOrdDatum($inkOrdDatum)
    {
        $this->inkOrdDatum = $inkOrdDatum;
    }

    /**
     * @return mixed
     */
    public function getInkOrdBestAantal()
    {
        return $this->inkOrdBestAantal;
    }

    /**
     * @param mixed $inkOrdBestAantal
     */
    public function setInkOrdBestAantal($inkOrdBestAantal)
    {
        $this->inkOrdBestAantal = $inkOrdBestAantal;
    }

    /**
     * @return mixed
     */
    public function getInkOrdStatus()
    {
        return $this->inkOrdStatus;
    }

    /**
     * @param mixed $inkOrdStatus
     */
    public function setInkOrdStatus($inkOrdStatus)
    {
        $this->inkOrdStatus = $inkOrdStatus;
    }
}

?>

<?php
// Anjo Eijerks
require "Persoon.php";
class Student extends Persoon
{
    // properties - eigenschappen ----------------------------
    protected $opleiding;
    // $naam en $telefoonnummer worden geërfd van Persoon

    // methoden - functies -----------------------------------
    // constructor
    public function __construct($opleiding = NULL, $naam = NULL, $telefoonnummer = NULL)
    {
        $this->opleiding = $opleiding;
        $this->naam = $naam;
        $this->telefoonnummer = $telefoonnummer;
    }

    // setters
    public function set_opleiding($opleiding)
    {
        $this->opleiding = $opleiding;
    }
    // set_naam() en set_telefoonnummer() worden geërfd van Persoon

    // getters
    public function get_opleiding()
    {
        return $this->opleiding;
    }
    // get_naam() en get_telefoonnummer() worden geërfd van Persoon

    // afdruk-functies -----------------------------------------
    public function afdrukken()
    {
        echo $this->get_naam();
        echo "<br/>";
        echo $this->get_telefoonnummer();
        echo "<br/>";
        echo $this->get_opleiding();
        echo "<br/><br/>";
    }

    public function voorstellen()
    {
        echo "Mijn naam is " . $this->get_naam()
            . ", ik zit op de opleiding " . $this->get_opleiding()
            . ". Mijn telefoonnummer is: " . $this->get_telefoonnummer();
        echo "<br/><br/>";
    }

    // CRUD-functies -------------------------------------------
    public function createStudent()
    {
        require "schoolConnect.php";    // openen database 'school'
        $naam = $this->get_naam();
        $opleiding = $this->get_opleiding();
        $telefoonnummer = $this->get_telefoonnummer();

        $sql = $conn->prepare("");
        $sql->bindParam("isStudentid", $studentid);
        $sql->bindParam("");
        $sql->bindParam("");
        $sql->bindParam("");

    }

    public function readStudent()
    {
        require "schoolConnect.php";
        $sql = $conn->prepare("
            select * From studenten
            ");

        $sql->execute();

        foreach ($sql as $student) {
            echo $student["studentid"] . "-";
            echo $this->naam = $student["naam"] . "-";
            echo $this->opleiding = $student["opleiding"] . "-";
            echo $this->telefoonnummer = $student["telefoonnummer"] . "-";

        }

    }

    public function updateStudent()
    {

    }

    public function deleteStudent()
    {

    }

    public function searchStudent($studentid)
    {
        require "schoolConnect.php";

        $sql->bindParam(":studentid", $studentid);
        $sql->execute();
        foreach ($sql as $student) {
            echo $studentid . "<br/>";
            $this->naam = $student["naam"];
            $this->telefoonnummer = $student["postcode"];
            $this->opleiding = $student["opleiding"];

        }
        echo $studentid;
    }

    public function createArtikelen(){


    }



}
?>
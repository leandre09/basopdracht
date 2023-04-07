<?php
// Anjo Eijeriks
class Persoon
{
    // properties - eigenschappen ------------
    protected  $naam;
    protected  $telefoonnummer;

    // methoden - functies -------------------
    // constructor
    public function __construct($naam=NULL, $telefoonnummer=NULL)
    {
        $this->naam=$naam;
        $this->telefoonnummer=$telefoonnummer;
    }

    // setters
    public function set_naam($naam)
    {
        $this->naam=$naam;
    }
    public function set_telefoonnummer($telefoonnummer)
    {
        $this->telefoonnummer=$telefoonnummer;
    }
    // getters
    public function get_naam()
    {
        return $this->naam;
    }
    public function get_telefoonnummer()
    {
        return $this->telefoonnummer;
    }
}
?>
<?php
// Anjo Eijeriks
require "Persoon.php";

// maken objecten
$persoon1 = new Persoon();
$persoon1->set_naam("Cassandra");
$persoon1->set_telefoonnummer("412.34.45");

$persoon2 = new Persoon();
$persoon2->set_naam("Kelvin");
$persoon2->set_telefoonnummer("498.76.54");

$persoon3 = new Persoon("Jagmeet", "06-12.34.56.78");

// afdrukken objecten
echo $persoon1->get_naam();
echo "<br/>";
echo $persoon1->get_telefoonnummer();
echo "<br/><br/>";

echo $persoon2->get_naam();
echo "<br/>";
echo $persoon2->get_telefoonnummer();
echo "<br/><br/>";

echo $persoon3->get_naam();
echo "<br/>";
echo $persoon3->get_telefoonnummer();

?>
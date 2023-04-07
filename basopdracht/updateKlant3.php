<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>update artikel </title>
</head>
<body>
<h1>update artikel</h1>

<?php
require "klanten.php";

// gegevens uit de array in variabelen stoppen
$klantNaam=$_POST["klantNaam"];
$klantEmail=$_POST["klantEmail"];
$klantAdres=$_POST["klantAdres"];
$klantPostcode=$_POST["klantPostcode"];
$klantWoonplaats=$_POST["klantWoonplaats"];

// maken object ---------------------------------------------------
$klantid = new Klanten($klantNaam, $klantEmail, $klantAdres,$klantPostcode,$klantWoonplaats,); // maakt object
$klantid->updateKlant($klantid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $klantid."<br/>";
$klantid->afdrukkenKlanten();	                       // drukt object af

?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
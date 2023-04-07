<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>update verkoop orders </title>
</head>
<body>
<h1>update  verkoop orders</h1>

<?php
require "verkooporders.php.php";

// gegevens uit de array in variabelen stoppen
$klantid=$_POST["klantid"];
$artId=$_POST["artId"];
$verkOrdDatum=$_POST["verkOrdDatum"];
$verkOrdStatus=$_POST["verkOrdStatus"];
$verkOrdBestAantal=$_POST["verkOrdBestAantal"];


// maken object ---------------------------------------------------
$klantid = new verkooporders($klantid, $artId, $verkOrdDatum,$verkOrdStatus, $verkOrdBestAantal); // maakt object
$klantid->updateVerkoopstatus($klantid);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $klantid."<br/>";
$klantid->afdrukkenverkooporders();	                       // drukt object af

?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
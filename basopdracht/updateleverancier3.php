<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>update leverancier </title>
</head>
<body>
<h1>update leverancier</h1>

<?php
require "leveranciers.php";

// gegevens uit de array in variabelen stoppen
$levId=$_POST["levId"];
$levnaam=$_POST["levnaam"];
$levcontact=$_POST["levcontact"];
$levemail=$_POST["levemail"];
$levadres=$_POST["levadres"];
$levpostcode=$_POST["levpostcode"];
$levWoonplaats=$_POST["levWoonplaats"];

// maken object ---------------------------------------------------
$levId = new leveranciers($levId, $levnaam, $levcontact,$levemail,$levadres,$levpostcode,$levWoonplaats); // maakt object
$levId->updateleveranciers($levId);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $levId."<br/>";
$levId->afdrukkenLeveranciers();	                       // drukt object af

?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
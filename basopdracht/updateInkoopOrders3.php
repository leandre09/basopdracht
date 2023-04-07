<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>update artikel </title>
</head>
<body>
<h1>update artikel</h1>

<?php
require "inkooporders.php";

// gegevens uit de array in variabelen stoppen
$levId=$_POST["levId"];
$inkOrdDatum=$_POST["inkOrdDatum"];
$inkOrdBestAantal=$_POST["inkOrdBestAantal"];
$inkOrdStatus=$_POST["inkOrdStatus"];


// maken object ---------------------------------------------------
$artId = new Inkooporders($levId, $inkOrdDatum, $inkOrdBestAantal,$inkOrdStatus); // maakt object
$artId->updateInkooporders($artId);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $artId."<br/>";
$artId->afdrukkenInkooporders();	                       // drukt object af

?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
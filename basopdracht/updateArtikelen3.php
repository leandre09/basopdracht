<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>update artikel </title>
</head>
<body>
<h1>update artikel</h1>

<?php
require "Artikel.php";

// gegevens uit de array in variabelen stoppen
$artOmschrijving=$_POST["artOmschrijving"];
$artInkoop=$_POST["artInkoop"];
$artVerkoop=$_POST["artVerkoop"];
$artVoorraad=$_POST["artVoorraad"];
$artMinVoorraad=$_POST["artMinVoorraad"];
$artMaxVoorraad=$_POST["artMaxVoorraad"];
$artLocatie=$_POST["artLocatie"];
$levId=$_POST["levId"];

// maken object ---------------------------------------------------
$artId = new Artikelen($artOmschrijving, $artInkoop, $artVerkoop,$artVoorraad,$artMinVoorraad,$artMaxVoorraad,$artLocatie,$levId); // maakt object
$artId->updateArtikel($artId);		           // vervangt de tabelgegevens voor objectgegevens
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $artId."<br/>";
$artId->afdrukkenArtikelen();	                       // drukt object af

?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
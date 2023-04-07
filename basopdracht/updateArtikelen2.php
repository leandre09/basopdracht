<!doctype html>
<html>

<head>
    <title>update artikel</title>
</head>
<body>
<h1>update artikel</h1>

<?php
// Anjo Eijeriks
require "Artikel.php";					// nodig om object te maken
$artId = $_POST["ArtikelIdVak"];	// uitlezen vakje van deleteStudentForm1
$artId = new Artikel();				// object aanmaken
$artId->searchArtikel($artId);
// properties in variabelen zetten
$artOmschrijving=$_POST["artOmschrijving"];
$artInkoop=$_POST["artInkoop"];
$artVerkoop=$_POST["artVerkoop"];
$artVoorraad=$_POST["artVoorraad"];
$artMinVoorraad=$_POST["artMinVoorraad"];
$artMaxVoorraad=$_POST["artMaxVoorraad"];
$artLocatie=$_POST["artLocatie"];
$levId=$_POST["levId"];
?>

<form action="updateArtikelen2.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $artId ?>
    <input type="hidden" name="artId" value="<?php echo $artId;  ?> "><br/>
    <input type="text"   name="artOmscrhijving"      value="<?php echo $artOmscrhijving;     ?> "><br/>
    <input type="text"   name="artInkoop"  value="<?php echo $artInkoop;  ?> "><br/>
    <input type="text"   name="artVerkoop" value="<?php echo $artVerkoop;  ?> "><br/><br/>
    <input type="text"   name="artVoorrad" value="<?php echo $artVoorraad;  ?> "><br/><br/>
    <input type="text"   name="artMinVoorraad" value="<?php echo $artMinVoorraad;  ?> "><br/><br/>
    <input type="text"   name="artMaxVoorraad" value="<?php echo $artMaxVoorraad;  ?> "><br/><br/>
    <input type="text"   name="artLocatie" value="<?php echo $artLocatie;  ?> "><br/><br/>
    <input type="text"   name="levid" value="<?php echo $levId;  ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
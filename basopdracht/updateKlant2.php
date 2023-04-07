<!doctype html>
<html>

<head>
    <title>update artikel</title>
</head>
<body>
<h1>update artikel</h1>

<?php
// Anjo Eijeriks
require "klanten.php";					// nodig om object te maken
$klantid = $_POST["klantenIdVak"];	// uitlezen vakje van deleteStudentForm1
$klantid = new Klant();				// object aanmaken
$klantid->searchKlant($klantid);
// properties in variabelen zetten
$klantNaam=$_POST["klantNaam"];
$klantEmail=$_POST["klantEmail"];
$klantAdres=$_POST["klantAdres"];
$klantPostcode=$_POST["klantPostcode"];
$klantWoonplaats=$_POST["klantWoonplaats"];

?>

<form action="updateKlant3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $klantid ?>
    <input type="hidden" name="klantNaam" value="<?php echo $klantNaam;  ?> "><br/>
    <input type="text"   name="klantEmail"      value="<?php echo $klantEmail;     ?> "><br/>
    <input type="text"   name="klantAdres"  value="<?php echo $klantAdres;  ?> "><br/>
    <input type="text"   name="klantPostcode" value="<?php echo $klantPostcode;  ?> "><br/><br/>
    <input type="text"   name="klantWoonplaats" value="<?php echo $klantWoonplaats;  ?> "><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
<!doctype html>
<html>

<head>
    <title>update artikel</title>
</head>
<body>
<h1>update artikel</h1>

<?php
// Anjo Eijeriks
require "leveranciers.php";					// nodig om object te maken
$levId = $_POST["levIdVak"];	// uitlezen vakje van deleteStudentForm1
$levId = new leverancier();				// object aanmaken
$levId->searchLeverancier($levId);
// properties in variabelen zetten
$levId=$_POST["levId"];
$levnaam=$_POST["levnaam"];
$levcontact=$_POST["levcontact"];
$levemail=$_POST["levemail"];
$levadres=$_POST["levadres"];
$levpostcode=$_POST["levpostcode"];
$levWoonplaats=$_POST["levWoonplaats"];
?>

<form action="updateleverancier3.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $levId ?>
    <input type="hidden" name="levid" value="<?php echo $levId;  ?> "><br/>
    <input type="text"   name="levnaam"      value="<?php echo $levnaam;     ?> "><br/>
    <input type="text"   name="levcontact"  value="<?php echo $levcontact;  ?> "><br/>
    <input type="text"   name="levemail" value="<?php echo $levemail;  ?> "><br/><br/>
    <input type="text"   name="levadres" value="<?php echo $levadres;  ?> "><br/><br/>
    <input type="text"   name="levpostcode" value="<?php echo $levpostcode;  ?> "><br/><br/>
    <input type="text"   name="levWoonPlaats" value="<?php echo $levWoonplaats;  ?> "><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
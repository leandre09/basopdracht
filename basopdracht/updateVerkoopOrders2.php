<!doctype html>
<html>

<head>
    <title>update artikel</title>
</head>
<body>
<h1>update verkoop orders</h1>

<?php
// Anjo Eijeriks
require "verkooporders.php";					// nodig om object te maken
$klantid = $_POST["verkoopordersIdVak"];	// uitlezen vakje van deleteStudentForm1
$klantid = new $klantid();				// object aanmaken
$klantid->searchVerkoopOrders($klantid);
// properties in variabelen zetten
$klantid=$_POST["klantid"];
$artId=$_POST["artId"];
$verkOrdDatum=$_POST["verkOrdDatum"];
$verkOrdStatus=$_POST["verkOrdStatus"];
$verkOrdBestAantal=$_POST["verkOrdBestAantal"];
?>

<form action="updateInkoopOrders2.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $artId ?>
    <input type="hidden" name="klantid" value="<?php echo $klantid;  ?> "><br/>
    <input type="text"   name="artId"      value="<?php echo $artId;     ?> "><br/>
    <input type="text"   name="verkOrdDatum"  value="<?php echo $verkOrdDatum;  ?> "><br/>
    <input type="text"   name="verkOrdStatus" value="<?php echo $verkOrdStatus;  ?> "><br/><br/>
    <input type="text"   name="verkOrdBestAantal" value="<?php echo $verkOrdBestAantal;  ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
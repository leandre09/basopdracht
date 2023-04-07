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
$levId=$_POST["levId"];
$inkOrdDatum=$_POST["inkOrdDatum"];
$inkOrdBestAantal=$_POST["inkOrdBestAantal"];
$inkOrdStatus=$_POST["inkOrdStatus"];
?>

<form action="updateInkoopOrders2.php" method="post">
    <!-- $studentid mag niet meer gewijzigd worden -->
    <?php echo $artId ?>
    <input type="hidden" name="levId" value="<?php echo $levId;  ?> "><br/>
    <input type="text"   name="inkOrdDatum"      value="<?php echo $inkOrdDatum;     ?> "><br/>
    <input type="text"   name="inkOrdBestAantal"  value="<?php echo $inkOrdBestAantal;  ?> "><br/>
    <input type="text"   name="inkOrdStatus" value="<?php echo $inkOrdStatus;  ?> "><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
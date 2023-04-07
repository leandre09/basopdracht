<!doctype html>
<html>

<head>
    <title>delete verkoop orders</title>
</head>
<body>
<h1>delete verkoop orders</h1>

<?php
// Anjo Eijeriks
require "verkooporders.php";					// nodig om object te maken
$klantid=$_POST["klantid"];
$artId=$_POST["artId"];
$verkOrdDatum=$_POST["verkOrdDatum"];
$verkOrdStatus=$_POST["verkOrdStatus"];
$verkOrdBestAantal=$_POST["verkOrdBestAantal"];
?>

<form action="deleteVerkoopOrders3.php" method="post">

    <input type="hidden" name="klantId" value=" <?php echo klantId ?> ">
    <input type="hidden" 	name="verwijderBox" value="nee">
    <input type="checkbox" 	name="verwijderBox" value="ja">
    <label for="verwijderBox"> Verwijder deze klant</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
<!doctype html>
<html>

<head>
    <title>delete klant</title>
</head>
<body>
<h1>delete klant</h1>

<?php
// Anjo Eijeriks
require "leveranciers.php";					// nodig om object te maken
$levid = $_POST["levidVak"];	// uitlezen vakje van deleteStudentForm1
$levid = new $levid();				// object aanmaken
$levid->deleteLeverancier($levid);
$levid->afdrukkenLeverancier();
?>

<form action="deleteLeverancier2.php" method="post">

    <input type="hidden" name="$levid" value=" <?php echo $levid ?> ">
    <input type="hidden" 	name="verwijderBox" value="nee">
    <input type="checkbox" 	name="verwijderBox" value="ja">
    <label for="verwijderBox"> Verwijder deze leverancier</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="home.html">Terug naar het hoofdmenu</a>
</body>
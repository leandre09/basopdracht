<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken klant</title>
</head>
<body>
<h1>afdrukken klanten</h1>
<p>Dit zijn alle gegevens uit de klantentabel.</p>
<?php
require "klanten.php";			// nodig om object te maken
$klantId = new klantId();
$klantId->readKlanten();
?>
<a href="home.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
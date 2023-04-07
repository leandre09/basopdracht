<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken artikelen</title>
</head>
<body>
<h1>afdrukken artikelen</h1>
<p>Dit zijn alle gegevens uit de artikelentabel.</p>
<?php
require "Artikel.php";			// nodig om object te maken
$artId = new artId();
$artId->readArtikel();
?>
<a href="home.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
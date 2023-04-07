<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken inkooporders</title>
</head>
<body>
<h1>afdrukken inkooporders</h1>
<p>Dit zijn alle gegevens uit de inkoopordertabel.</p>
<?php
require "inkooporders.php";			// nodig om object te maken
$artId = new artId();
$artId->readArt();
?>
<a href="home.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken leveranciers</title>
</head>
<body>
<h1>afdrukken leveranciers</h1>
<p>Dit zijn alle gegevens uit de leverancierstabel</p>
<?php
require "leveranciers.php";			// nodig om object te maken
$levId = new levId();
$levId->readlevenranciers();
?>
<a href="home.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
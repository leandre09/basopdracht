<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken verkoop orders</title>
</head>
<body>
<h1>afdrukken verkoop orders</h1>
<p>Dit zijn alle gegevens uit de verkooporderstabel.</p>
<?php
require "verkooporders.php";			// nodig om object te maken
$klantId = new klantId();
$klantId->readVerkoopOrders();
?>
<a href="home.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>
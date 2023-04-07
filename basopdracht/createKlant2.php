<!doctype html>
<html>
<head>
    <title>create klant 2</title>
</head>
<body>
<h1>create klant 2</h1>

<?php

require "klanten.php";

$klantNaam=$_POST["klantNaam"];
$klantEmail=$_POST["klantEmail"];
$klantAdres=$_POST["klantAdres"];
$klantPostcode=$_POST["klantPostcode"];
$klantWoonplaats=$_POST["klantWoonplaats"];


$klantid = new klanten($klantNaam, $klantEmail, $klantAdres, $klantPostcode, $klantWoonplaats);
$klantid->create();
echo "Het volgende opject is gemaakt: <br/>";

?>
</body>
</html>
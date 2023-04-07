<!doctype html>
<html>
<head>
    <title>Create Artikel</title>
</head>
<body>
<h1>Create artikel</h1>

<?php
require "Artikel.php";

$artOmschrijving=$_POST["artOmschrijving"];
$artInkoop=$_POST["artInkoop"];
$artVerkoop=$_POST["artVerkoop"];
$artVoorraad=$_POST["artVoorraad"];
$artMinVoorraad=$_POST["artMinVoorraad"];
$artMaxVoorraad=$_POST["artMaxVoorraad"];
$artLocatie=$_POST["artLocatie"];
$levId=$_POST["levId"];

$artikel = new Artikel($artOmschrijving, $artInkoop, $artVerkoop, $artVoorraad,$artMinVoorraad,$artMaxVoorraad,$artLocatie,$levId);
$artikel->Create();
echo "Het volgende opject is gemaakt: <br/>";

?>
</body>
</html>

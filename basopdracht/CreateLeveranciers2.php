<!doctype html>
<html>
<head>
    <title>Create $levenranciers</title>
</head>
<body>
<h1>Create $levenranciers</h1>

<?php

require "leveranciers.php";

$levId=$_POST["levId"];
$levnaam=$_POST["levnaam"];
$levcontact=$_POST["levcontact"];
$levemail=$_POST["levemail"];
$levadres=$_POST["levadres"];
$levpostcode=$_POST["levpostcode"];
$levWoonplaats=$_POST["levWoonplaats"];



$levenranciers = new Leverancier($levId, $levnaam, $levcontact, $levemail,$levadres,$levpostcode,$levWoonplaats);
$levenranciers->Create();
echo "Het volgende opject is gemaakt: <br/>";

?>
</body>
</html>

<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete klant</title>
</head>
<body>
<h1>delete klant</h1>

<?php

// Anjo Eijeriks
require "klanten.php";                    // nodig om object te maken
$klantId = $_POST["klantId"];
echo $klantId;
$dell_art = new klanten();



$dell_art->Delete($klantId);




?>



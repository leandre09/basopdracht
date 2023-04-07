<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete inkoop order</title>
</head>
<body>
<h1>delete inkoop order</h1>

<?php

// Anjo Eijeriks
require "inkooporders.php";                    // nodig om object te maken
$inkOrdId = $_POST["inkOrdId"];
echo $inkOrdId;
$dell_art = new inkooporder();



$dell_art->Delete($inkOrdId);




?>



<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete artikel</title>
</head>
<body>
<h1>delete artikel</h1>

<?php

// Anjo Eijeriks
require "Artikel.php";                    // nodig om object te maken
$artId = $_POST["artId"];    // uitlezen vakje van deleteStudentForm1
$dell_art = new Artikel();




$dell_art->Delete($artId);




?>



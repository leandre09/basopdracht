<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete leverancier</title>
</head>
<body>
<h1>delete leverancier</h1>

<?php
require "leveranciers.php";

$levid = $_POST["levid"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De student is verwijderd <br/>";
    $levid =  new leverancier();
    $levid->deleteleverancier($levid);
}
else
{
    echo "De Leverancier is niet verwijderd <br/>";
}
?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
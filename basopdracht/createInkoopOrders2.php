<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>create student formulier 2</title>
</head>
<body>
<h1>create inkooporders </h1>

<?php
require "inkooporders.php";

$levId=$_POST["levId"];
$inkOrdId=$_POST["inkOrdId"];
$artId=$_POST["artId"];
$inkOrdDatum=$_POST["inkOrdDatum"];
$inkOrdBestAantal=$_POST["inkOrdBestAantal"];
$inkOrdStatus=$_POST["inkOrdStatus"];

// maken object -------------------------------
//$artikel = new Artikel("tomaat", "50", "10", "1","1","1","dsdas",1);
$inkooporders = new inkooporder($inkOrdId,$levId,$artId, $inkOrdDatum, $inkOrdBestAantal, $inkOrdDatum);
// object in de database zetten
$inkooporders->Create();
// afdrukken object ---------------------------
echo "Het volgende opject is gemaakt: <br/>";
//$student1->afdrukken()

?>
</body>
</html>

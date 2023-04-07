<!doctype html>
<html>
<head>
    <title>verkoop orders</title>
</head>
<body>
<h1>create verkoop orders
<?php
require "verkooporders.php";

$klantId=$_POST["klantId"];
$artId=$_POST["artId"];
$verkOrdDatum=$_POST["verkOrdDatum"];
$verkOrdStatus=$_POST["verkOrdStatus"];
$verkOrdBestAantal=$_POST["verkOrdBestAantal"];

$verkoopOrders = new verkoopOrders($klantId, $artId, $verkOrdDatum, $verkOrdStatus, $verkOrdBestAantal);
$verkoopOrders->Create();
echo "Het volgende opject is gemaakt: <br/>";

?>
</body>
</html>

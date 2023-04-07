<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete verkoop orders</title>
</head>
<body>
<h1>delete verkoop orders</h1>

<?php
require "verkooporders.php";

$klantid = $_POST["verkoopOrdersIdVak"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De student is verwijderd <br/>";
    $klantid =  new verkooporders();
    $klantid->deleteverkooporder($klantid);
}
else
{
    echo "De Verkooporder is niet verwijderd <br/>";
}
?>
<a href="home.html">Terug naar het hoofdmenu</a>
</body>
</html>
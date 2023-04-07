<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>search artikel 2</h1>
<?php
require "Artikel.php.php";
require "databaseConn.php";
$artId=$_POST["artikelIDVak"];
$artId =new Artikel();
$artId ->searchArtikel($artId);
?>

<a href="home.html">Terug naar het hoofdmenu</a>

</body>
</html>
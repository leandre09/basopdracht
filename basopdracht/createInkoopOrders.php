<?php

require_once "databaseConn.php";


?>


<!doctype html>
<html>
<head>
    <title>Create Inkoop orders</title>
</head>
<body>
<h1>create inkoop orders</h1>
<form action="createInkoopOrders2.php" method="post">
    <label for="levId">levId:</label>
    <input type="text" id = "levId" name="levId"><br/>
    <label for="artId">artId:</label>
    <input type="text" id = "artId" name="artId"><br/>
    <label for="inkOrdDatum">inkOrdDatum:</label>
    <input type="text" id = "inkOrdDatum" name="inkOrdDatum"><br/>
    <label for="inkOrdBestAantal">inkOrdBestAantal:</label>
    <input type="text" id = "inkOrdBestAantal" name="inkOrdBestAantal"><br/>
    <label for="inkOrdStatus">inkOrdStatus:</label>
    <input type="text" id = "inkOrdStatus" name="inkOrdStatus"><br/>
    <input type="submit">
</form>
</body>
</html>
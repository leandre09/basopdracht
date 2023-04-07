<?php

require_once "databaseConn.php";


?>


<!doctype html>
<html>
<head>
    <title>Create verkooporders</title>
</head>
<body>
<h1>create verkoop orders</h1>
<form action="createVerkoopOrders2.php" method="post">
    <label for="klantId">klantId:</label>
    <input type="text" id = "klantId" name="klantId"><br/>
    <label for="artId">artId:</label>
    <input type="text" id = "artId" name="artId"><br/>
    <label for="verkOrdDatum">verkOrdDatum:</label>
    <input type="text" id = "verkOrdDatum" name="verkOrdDatum"><br/>
    <label for="verkOrdBestAantal">verkOrdBestAantal:</label>
    <input type="text" id = "verkOrdBestAantal" name="verkOrdBestAantal"><br/>
    <label for="verkOrdStatus">verkOrdStatus:</label>
    <input type="text" id = "verkOrdStatus" name="verkOrdStatus"><br/>

    <input type="submit">
</form>
</body>
</html>
<?php

require_once "databaseConn.php";


?>


<!doctype html>
<html>
<head>
    <title>Create artikelen</title>
</head>
<body>
<h1>create Artikelen</h1>
<form action="createArtikelen2.php" method="post">
    <label for="artOmschrijving">artOmschrijving:</label>
    <input type="text" id = "artOmschrijving" name="artOmschrijving"><br/>
    <label for="artInkoop">artInkoop:</label>
    <input type="text" id = "artInkoop" name="artInkoop"><br/>
    <label for="artVerkoop">artVerkoop:</label>
    <input type="text" id = "artVerkoop" name="artVerkoop"><br/>
    <label for="artVoorraad">artVoorraad:</label>
    <input type="text" id = "artVoorraad" name="artVoorraad"><br/>
    <label for="artMinVoorraad">artMinVoorraad:</label>
    <input type="text" id = "artMinVoorraad" name="artMinVoorraad"><br/>
    <label for="artMaxVoorraad">artMaxVoorraad:</label>
    <input type="text" id = "artMaxVoorraad" name="artMaxVoorraad"><br/>
    <label for="artLocatie">artLocatie:</label>
    <input type="text" id = "artLocatie" name="artLocatie"><br/>
    <label for="levId">levId:</label>
    <input type="text" id = "levId" name="levId"><br/>
    <input type="submit">
</form>
</body>
</html>
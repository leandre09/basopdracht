<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bas", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


//$servername = "localhost";
//$dbname = "bas";
//$username = "root";
//$password = "";
//
//try {
//    $conn = new PDO(
//        "mysql:host=$servername;dbname=$dbname", $username, $password);
//    echo "connectie is gelukt";
//} catch (PDOExeption $e) {
//    echo "Connectie mislukt <br/>" . $e->getMessage();
//}
//
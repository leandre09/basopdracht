<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1>search student formulier 2</h1>
<?php
require "Student.php";
require "schoolConnect.php";
$studentid=$_POST["studentIDVak"];
$student1 =new Student();
$student1 ->searchStudent($student1);
?>

<a href="schoolmenu.php">Terug naar het hoofdmenu</a>

</body>
</html>
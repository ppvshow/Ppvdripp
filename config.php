<?php

$conn = new COM('ADODB.Connection');
$dbName = $_SERVER["SERVER_ROOT"] . "my web.accdb";
echo $dbName;

 if (!file_exists($dbName)) {
    die("Could not find database file.");
 }

$conn->Open("DRIVER={Microsoft Access Driver (*.accdb)}; DBQ=$dbName");

echo $dbName;
$conn->close;

?>
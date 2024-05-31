<?php
$dbName = $_SERVER["SYSTEM_ROOT"] . "HockeyPool.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
else
{
echo "Using " . $dbName . " database.";
}

$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");

echo "Connection Request Sent";

$sql  = "SELECT * FROM PoolTeams";
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $teamIdent        = $row["ID"];
    $teamName         = $row["TeamName"];
}
?>



Return to Visual Studio and set up a data connection using your ODBC data source. Within the 'Server Explorer' pane (left hand side of screen), right-click 'Data Connections', then click 'Add Connection…'



$dbName = $_SERVER["DOCUMENT_ROOT"] . "products\products.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");



<?php 
$dbName = $_SERVER["DOCUMENT_ROOT"] . "access_db/newDB.mdb";
echo $dbName."<br />";
if (!file_exists($dbName)) {
die("Could not find database file.<br />".$dbName);
}
try {
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb,*.accdb)};Dbq=$dbName");
} catch(PDOException $e) {
echo "Error: ".$e->getMessage()."<br />";
}
?>




<?php
$dbName = $_SERVER["SYSTEM_ROOT"] . "HockeyPool.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
else
{
echo "Using " . $dbName . " database.";
}

$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");

echo "Connection Request Sent";

$sql  = "SELECT * FROM PoolTeams";
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $teamIdent        = $row["ID"];
    $teamName         = $row["TeamName"];
}
?>




<?php
$bits = 8 * PHP_INT_SIZE;
echo "(Info: This script is running as $bits-bit.)\r\n\r\n";
$dbName = "HockeyPool.mdb";

$dbh = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=HockeyPool.mdb");

echo "Request Sent";
$dbh = new PDO($connStr);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM PoolTeams";
$sth = $dbh->prepare($sql);
$sth->execute();

while ($row = $sth->fetch()) {
    echo $row['PoolTeamName'] . "\r\n";
}
?>




<?php

$conn = new COM('ADODB.Connection');
$dbName = $_SERVER["SERVER_ROOT"] . "HockeyPool.mdb";
echo $dbName;

 if (!file_exists($dbName)) {
    die("Could not find database file.");
 }

conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName");

echo $dbName;
$conn->close;

?>
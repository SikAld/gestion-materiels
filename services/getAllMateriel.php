<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../libs/myLib.php");

$connection = getMysqlConnect();
$result = execQuery($connection, "SELECT * FROM materiel");
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>
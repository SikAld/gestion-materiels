<?php


include("../libs/myLib.php");

$connection = getMysqlConnect();
$result = execQuery($connection, "SELECT * FROM materiel");
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>
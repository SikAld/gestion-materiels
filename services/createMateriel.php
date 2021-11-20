<?php

include("../libs/myLib.php");

$data = json_decode(file_get_contents("php://input"), TRUE);



if($data['designation'] != "" && $data['designation'] !=null){

    $connection = getMysqlConnect(); 

    $designation = $data['designation'];

    $sql = "INSERT INTO materiel (materiel_designation, materiel_status_id) VALUES ('".$designation."', 1)";

    $result = execQuery($connection, $sql);

    print_r($result->fetchAll())
}


?>
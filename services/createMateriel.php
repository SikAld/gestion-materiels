<?php

//TODO Gestion des autorisation 

// Chargement de la librairie custom
include("../libs/myLib.php");


//Récupération des données en provenance d'Axios (Bah ouais, il envoi du JSON )
$data = json_decode(file_get_contents("php://input"), TRUE);


//Check si les données nécessaires à la requête sont là 
if($data['designation'] != "" && $data['designation'] !=null){

    //Connexion à la BDD
    $connection = getMysqlConnect(); 

    // On récupére les données de form
    $designation = $data['designation'];

    //Execution de la requête
    $result = execQuery($connection, "INSERT INTO materiel (materiel_designation, materiel_status_id) VALUES ('".$designation."', 1)");


    //C'est une insertion pas besoin de renvoyer des trucs on gérera les erreurs avec le code HTTP
}


?>
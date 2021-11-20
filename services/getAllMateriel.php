<?php
//TODO Gestion des autorisation 
// On récupère la librairie Custom
include("../libs/myLib.php");

//Connexion à la BDD
$connection = getMysqlConnect();
//Exectution de la requête
$result = execQuery($connection, "SELECT * FROM materiel");

//renvoi des données au format JSON 
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>
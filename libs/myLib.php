<?php

//Permet l'ouverture d'une connexion à une base de données
fucntion getMysqlConnect(){
  $connection = NULL;
	try
	{
		$cfg = parse_ini_file("myLib-config.ini", true);
		$mode = $cfg['mode']['actual_mode'];

		$host = $cfg['myslq_cfg_'.$mode]['host'];
		$user = $cfg['myslq_cfg_'.$mode]['user'];
		$pass = $cfg['myslq_cfg_'.$mode]['pass'];
		$dbname = $cfg['myslq_cfg_'.$mode]['dbname'];

		$connection = new PDO('mysql:host='.$hoste.';dbname='.$dbname.';charset=utf8mb4', $user, $pass);
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	return $connection;
}


fucntion execQuery($connection, $sqlString){
	return $connection->query($sqlString);
}

function debugSQLReturn($obj){
	foreach ($obj as $row) {
		echo "<hr/>";
		foreach($row as $key =>$field){
			echo $key." : ".$field;
		}
	}
}
//Fonction afficherTab
//Permet d'afficher les valeur du tableau
//passé en paramètre
function afficherTab($tableau){
	foreach($tableau as $elementTableau){
		echo $elementTableau."  ";
	}
	echo "<br/>";
	}

//Permet de générer un tableau
//rempli de valeur aléatoire compirsent entre
// $min et $max contenant $taille éléments
function generate($taille, $min, $max){
	$tab = array();
	for($i = 0;$i < $taille; $i++){
		$tab[$i] = rand($min,$max);
	}
	return $tab;
}

//fonction permettant de comparer
// chaque valeur à un indice
// des deux tableaux passé en parametre
function compareTab($tab1, $tab2){
	$nbParcour = 0;
	$compteur = 0;
	$nbT1 = count($tab1);
	$nbT2 = count($tab2);
	if($nbT1 < $nbT2){
		$nbParcour = $nbT1;
	}else{
		$nbParcour = $nbT2;
	}

	for($i = 0; $i < $nbParcour; $i++){
		if($tab1[$i] == $tab2[$i]){
			$compteur++;
		}
	}
	echo "Le premier tableau contient : ".$nbT1." valeur(s)<br/>";
	echo "Le second tableau contient : ".$nbT2." valeur(s)<br/>";
	echo "Sur les ".$nbParcour." vérifiée(s), ".$compteur." sont identique(s)<br/>";
	return $compteur;
}

<?php

$Artists = getAllArtists();
$Titles = getAllTitles();
$Directors = getAllDirectors();


$ArtistsUnique = [];

for($cpt= 0; $cpt<count($Artists); $cpt++) {
	array_push($ArtistsUnique, $Artists[$cpt]['Artist']);
}
$ArtistsUnique = array_unique($ArtistsUnique);

$DirectorsUnique = [];

for($cpt= 0; $cpt<count($Artists); $cpt++) {
	array_push($DirectorsUnique, $Directors[$cpt]['Director']);	
}
$DirectorsUnique = array_unique($DirectorsUnique);

/*
echo '<pre>';
var_dump($ArtistsUnique);
echo '</pre>';
*/
/*--------------------------------------*/

function getAllArtists() {
	
	$sql = 'SELECT Artist FROM Clip';

	return queryAll($sql);
}

function getAllTitles() {
	
	$sql = 'SELECT Title FROM Clip';

	return queryAll($sql);
}

function getAllDirectors() {
	
	$sql = 'SELECT Director FROM Clip';

	return queryAll($sql);
}


/*-----------------database--------------------*/

function getPDOConnection() {
	$pdo = new PDO('mysql:host=localhost;dbname=musicvideo','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
	$pdo -> exec('SET NAMES UTF8');
	
	return $pdo;
}


function queryAll($sql, array $params = []) {
	$query = executeQuery($sql, $params);
	return $query->FetchAll();
}


function queryOne($sql, array $params = []) {
	$query = executeQuery($sql, $params);
	return $query->Fetch();
}


function queryAction($sql, array $params = []) {
	executeQuery($sql, $params);
} 


function executeQuery($sql, array $params = []) {
	$pdo = getPDOConnection();
	$query = $pdo -> prepare($sql);
	$query -> execute($params);
	return $query;
} 

include 'more.phtml';

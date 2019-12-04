<?php


if (!empty($_GET['Artist'])) {
	$Artist = $_GET['Artist'];
	$clips = getAllArtist($Artist);
	
}
else if (!empty($_GET['Title'])) {
	$Title = $_GET['Title'];
	$clips = getAllTitle($Title);
	
}
else if (!empty($_GET['Director'])) {
	$Director = $_GET['Director'];
	$clips = getAllDirector($Director);
}

/*--------------------------------------*/

function getAllArtist($Artist) {
	
	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Artist=?';

	return queryAll($sql,[$Artist]);
}

function getAllTitle($Title) {
	
	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Title=?';

	return queryAll($sql,[$Title]);
}

function getAllDirector($Director) {
	
	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Director=?';

	return queryAll($sql,[$Director]);
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

include 'mv.phtml';

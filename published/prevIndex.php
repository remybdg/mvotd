<?php


$id = $_GET['clipId'];

$clips = getAllClips();
$clips= sizeof($clips);

//var_dump($id);

$clip = getOneClip($id);

$prevClip = getPrevClip($id, $clips);


/*--------------------------------------*/

function getAllClips() {
	
	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM clip';

	return queryAll($sql);
}

function getOneClip ($id) {
	
	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM clip WHERE Id=? ' ;

	return QueryOne($sql, [$id]);
}


function getPrevClip($id, $clips) {
	if ( $id < 2) {
		$prevClip = $clips;
		return $prevClip;
		var_dump("0, ",$prevClip);
	}
	$prevClip = $id - 1 ;
	return $prevClip;
}


/*-----------------database--------------------*/

function getPDOConnection() {
	$pdo = new PDO('mysql:host=sql24;dbname=poc78091','poc78091','lunchbox',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
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

include 'index.phtml';

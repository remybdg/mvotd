<?php

class Database {
		const DB_HOST = 'localhost';
		const DB_NAME = 'musicvideo';
		const DB_USER = 'root';
		const DB_PASSWORD = '';
		
		
	function getPDOConnection() {
		$pdo = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' .self::DB_NAME, self::DB_USER, self::DB_PASSWORD,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

		$pdo -> exec('SET NAMES UTF8');
		
		return $pdo;
	}
	
	function queryAll($sql, array $params = []) {
		$query = $this->executeQuery($sql, $params);
		return $query->FetchAll();
	}


	function queryOne($sql, array $params = []) {
		$query = $this->executeQuery($sql, $params);
		return $query->Fetch();
	}


	function queryAction($sql, array $params = []) {
		$this->executeQuery($sql, $params);
	} 


	function executeQuery($sql, array $params = []) {
		$pdo = $this->getPDOConnection();
		$query = $pdo -> prepare($sql);
		$query -> execute($params);
		//var_dump($params);
		return $query;
	} 
	
	
}









/*
function getPDOConnection() {
	$pdo = new PDO('mysql:host=localhost;dbname=blog','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

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
	var_dump($params);
	return $query;
} 
*/
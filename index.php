<?php


include 'autoload.php';

$page = "home";

//si il y a une clé "p" et qu'elle a une valeurs dans l'url
if(array_key_exists("p", $_GET) && isset($_GET["p"])) {
	
	$page = $_GET["p"];
	
}

// Router

switch($page) {
	case "home":
		$controller = new HomeController();

		$controller->index();
		break;
		
	case "more":
		$controller = new MoreController();

		// si valeur de recherche presente dans l'url
		if ( !empty($_GET['Artist']) || !empty($_GET['Title']) || !empty($_GET['Director']) ) {
			$controller->showSearchResult();
			break;
		}

		// sinon on lance la page de recherche
		$controller->showSearchFields();		
		break;	

	defaut:
		var_dump("page $page introuvable");
	break;		
}











// $clips = getAllClips();
// $clips= sizeof($clips);

// $day = dayCount();

// $id = ($day % $clips) +1;

// //var_dump($id);

// $clip = getOneClip($id);

// $prevClip = getPrevClip($id, $clips);

/*--------------------------------------*/

// function getAllClips() {
	
// 	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip';

// 	return queryAll($sql);
// }

// function getOneClip ($id) {
	
// 	$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Id=? ' ;

// 	return QueryOne($sql, [$id]);
// }

// function dayCount() {

// 	$date0 = date_create("2019-01-01");

// 	$currentDate = time();

// 	$currentDate = date("Y-m-d", $currentDate);
	
// 	$currentDate = date_create($currentDate);
	
// 	$diff = date_diff($date0, $currentDate );

// 	$diff = ($diff->format("%a"));
	
// 	//var_dump($diff);

// 	return $diff;
// }

// function getPrevClip($id, $clips) {
// 	if ( $id < 2) {
// 		$prevClip = $clips;
// 		return $prevClip;
// 	}
// 	$prevClip = $id - 1 ;
// 	return $prevClip;
// }

/*-----------------database--------------------*/

// function getPDOConnection() {
// 	$pdo = new PDO('mysql:host=localhost;dbname=musicvideo','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

// 	$pdo -> exec('SET NAMES UTF8');
	
// 	return $pdo;
// }


// function queryAll($sql, array $params = []) {
// 	$query = executeQuery($sql, $params);
// 	return $query->FetchAll();
// }


// function queryOne($sql, array $params = []) {
// 	$query = executeQuery($sql, $params);
// 	return $query->Fetch();
// }


// function queryAction($sql, array $params = []) {
// 	executeQuery($sql, $params);
// } 


// function executeQuery($sql, array $params = []) {
// 	$pdo = getPDOConnection();
// 	$query = $pdo -> prepare($sql);
// 	$query -> execute($params);
// 	return $query;
// } 

// include 'index.phtml';

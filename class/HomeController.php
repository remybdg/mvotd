<?php

include 'class/ClipModel.php';

class HomeController {

	public function Index() {

		// si l'url transmet un id de clip, on le récupère
		if (!empty($_GET)) {
			$id = $_GET['clipId'];
		}

		$clipModel = new ClipModel;
		// on récupere le nombre de clips dans la bdd
		$clips = $clipModel->getAllClips();
		$clips= sizeof($clips);
		
		// si pas d'id dans l'url, page d'accueil, on veut afficher le clip du jour
		// on va generer un id different chaque jour dans la plage du nombre de clips dans la bdd
		if (!isset($id)) {
			// calcul de la date du jour par rapport à une date repère
			$day = $this->dayCount();

			// on prend le modulo (qui est compris entre 0 et $clips - 1) +1 pour correspondre au index de la table
			$id = ($day % $clips) +1;
		}
		
		//selection du clip en fonction de l'id
		$clip = $clipModel->getOneClip($id);
		
		// definition de clip precedent pout le lien 'previous'
		$prevClip = $clipModel->getPrevClip($id, $clips);


		include 'views/home.phtml';

	}


	function dayCount() {

		$date0 = date_create("2019-01-01");
	
		$currentDate = time();
	
		$currentDate = date("Y-m-d", $currentDate);
		
		$currentDate = date_create($currentDate);
		
		$diff = date_diff($date0, $currentDate );
	
		$diff = ($diff->format("%a"));
		
		//var_dump($diff);
	
		return $diff;
	}
	

}
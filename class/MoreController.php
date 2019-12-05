<?php


include 'class/ClipModel.php';

class MoreController extends AbstractModel{

	
	public function showSearchFields() {

		$clipModel = new ClipModel;
		$Artists = $clipModel->getAllArtists();
		$Titles = $clipModel->getAllTitles();
		$Directors = $clipModel->getAllDirectors();

		include 'views/more.phtml';

	}

	public function showSearchResult() {
		
		$clipModel = new ClipModel;

		if (!empty($_GET['Artist'])) {
			$Artist = $_GET['Artist'];
			$clips = $clipModel->getAllByArtist($Artist);
		}
		else if (!empty($_GET['Title'])) {
			$Title = $_GET['Title'];
			$clips = $clipModel->getAllByTitle($Title);
		}
		else if (!empty($_GET['Director'])) {
			$Director = $_GET['Director'];
			$clips = $clipModel->getAllByDirector($Director);
		}

		include 'views/result.phtml';
	}

}

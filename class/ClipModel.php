<?php


require_once 'AbstractModel.php';
include_once 'Database.php';



class Clipmodel extends AbstractModel{

	
	
	function getAllClips() {
	
		$sql = 'SELECT Id, Title, Artist, Director, Year, Link FROM Clip';
		
		return $this->db->queryAll($sql);
	}
	
	function getOneClip ($id) {
		
		$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Id=? ' ;
	
		return $this->db->QueryOne($sql, [$id]);
	}

	function getPrevClip($id, $clips) {

		if ( $id < 2) {
			$prevClip = $clips;
			return $prevClip;
		}
		$prevClip = $id - 1 ;
		return $prevClip;
	}

	function getAllArtists() {
	
		$sql = 'SELECT DISTINCT Artist FROM Clip';
	
		return $this->db->queryAll($sql);
	}
	
	function getAllTitles() {
		
		$sql = 'SELECT DISTINCT Title, Id FROM Clip';
	
		return $this->db->queryAll($sql);
	}
	
	function getAllDirectors() {
		
		$sql = 'SELECT DISTINCT Director FROM Clip';
	
		return $this->db->queryAll($sql);
	}

	function getAllByArtist($Artist) {
	
		$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Artist="'.$Artist.'"';
		var_dump($sql);
		return $this->db->queryAll($sql);
	}
	
	function getAllByTitle($Title) {
		
		$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Title="'.$Title.'"';
	
		return $this->db->queryAll($sql);
	}
	
	function getAllByDirector($Director) {
		
		$sql = 'SELECT Id,Title,Artist ,Director ,Year, Link FROM Clip WHERE Director="'.$Director.'"';
	
		return $this->db->queryAll($sql);
	}

}

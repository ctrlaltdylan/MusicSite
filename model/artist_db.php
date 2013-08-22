<?php
	include 'database.php';

	function get_Artists(){
		global $db;
		$Artists = $db->query('SELECT * FROM Artist;');
		return $Artists;
	}

	function get_artistName($Artist_ID) {
		global $db;
		$query = $db->prepare("SELECT artistName FROM Artist WHERE Artist_ID = '$Artist_ID';");
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                
                
                $artistName = $query->fetch();
                //for testing
                //echo var_dump($artistName);
                return $artistName;
	}


?>
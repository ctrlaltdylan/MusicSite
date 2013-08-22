<?php
	include 'database.php';

	function get_Venues(){
		global $db;
		$Venues = $db->query('SELECT * FROM Venue;');
		return $Venues;
	}
        
        function get_venueName($Venue_ID){
                global $db;
                $query = $db->prepare("SELECT venueName FROM Venue WHERE Venue_ID = '$Venue_ID';");
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                
                $nameVenue = $query->fetch();
                return $nameVenue;
        }

?>
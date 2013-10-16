<?php
	include 'database.php';

	function get_Promoters(){
		global $db;
		$Promoters = $db->query('SELECT * FROM Promoter;');
		return $Promoters;
	}
        
        
        function get_promoterName($Promoter_ID){
                global $db;
                $query = $db->prepare("SELECT promoterName FROM Promoter WHERE Promoter_ID = '$Promoter_ID';");
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                
                $promoterName = $query->fetch();
                return $promoterName;
        }
        
        
?>
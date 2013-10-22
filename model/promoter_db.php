<?php
	include 'database.php';

	function get_Promoters(){
		global $db;
		$Promoters = $db->query('SELECT * FROM Promoter;');
		return $Promoters;
	}
        
        
        function get_Promoter_info($Offer){
            global $db;
            $query = $db->prepare("SELECT Promoter_ID FROM Offer WHERE Offer_ID = '$Offer';");
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            $Promoter_ID = $query->fetch();
            
            $Promoter = $db->query("SELECT * FROM Promoter WHERE Promoter_ID = '$Promoter_ID'");
            return $Promoter;
        }
        
	function get_promoterName($Promoter_ID) {
		global $db;
		$query = $db->prepare("SELECT promoterName FROM Promoter WHERE Promoter_ID = '$Promoter_ID';");
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                
                $promoterRow = $query->fetch();
                $promoterName = $promoterRow['promoterName'];
                return $promoterName;
	}
?>
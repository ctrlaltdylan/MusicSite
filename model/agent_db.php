<?php


    function get_Agent_Offers($Agent_ID) {
        
            global $db;
            $Offers = $db->query("SELECT * FROM Offer WHERE Agent_ID = '$Agent_ID' and offerStatus = 'Pending';");
            return $Offers;
    }
    
    function get_Agents(){
		global $db;
		$Agents = $db->query('SELECT * FROM Agent;');
		return $Agents;
    }
    
    function get_agentacceptedOffers($Agent_ID) {
        global $db;
	$acceptedOffers = $db->query("SELECT * FROM Offer WHERE Agent_ID = $Agent_ID AND offerStatus = 'Accepted';");
	return $acceptedOffers->fetchAll(PDO::FETCH_ASSOC);
    }
       
    function get_agentrejectedOffers($Agent_ID) {
	global $db;
	$rejectedOffers = $db->query("SELECT * FROM Offer WHERE Agent_ID = $Agent_ID AND offerStatus = 'Rejected';");
	return $rejectedOffers->fetchAll(PDO::FETCH_ASSOC);
    }
    
	function get_agentName($Agent_ID) {
        global $db;
        $query = $db->prepare("SELECT agentName FROM Agent WHERE Agent_ID = '$Agent_ID';");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();

        $agentRow = $query->fetch();
        $agentName = $agentRow['agentName'];

        return $agentName;
    }
?>

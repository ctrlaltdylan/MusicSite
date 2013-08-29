<?php

    function submit_counter_Offer($Offer_ID, $counterOfferStatus, $Artist_ID, $Agent_ID, $Venue_ID, $counterOfferDate, $counterOfferGuarantee, $counterOfferBonus, $counterOfferHotel, $counterOfferTechnical, $counterOfferMediaSupport, $counterOfferSellableCap, $counterOfferAgeLimit, $counterOfferEventType, $counterOfferGATicket1, $counterOfferGATIcket2, $counterOfferLoadIn, $counterOfferDoors, $counterOfferSetTime, $counterOfferSetLength, $counterOfferCurfew){
	//Write to Database
                global $db;
		$Columns = "Offer_ID, counterOfferStatus, Artist_ID, Agent_ID, Venue_ID, counterOfferDate, counterOfferGuarantee, counterOfferBonus, counterOfferHotel, counterOfferTechnical, counterOfferMediaSupport, counterOfferSellableCap, counterOfferAgeLimit, counterOfferEventType, counterOfferGATicket1, counterOfferGATIcket2, counterOfferLoadIn, counterOfferDoors, counterOfferSetTime, counterOfferSetLength, counterOfferCurfew";
		
		$insert_query = "INSERT INTO CounterOffer ($Columns) VALUES ($Offer_ID, '$counterOfferStatus', $Artist_ID, $Agent_ID, $Venue_ID, $counterOfferDate, '$counterOfferGuarantee', '$counterOfferBonus', '$counterOfferHotel', '$counterOfferTechnical', '$counterOfferMediaSupport', '$counterOfferSellableCap', '$counterOfferAgeLimit', '$counterOfferEventType', '$counterOfferGATicket1', '$counterOfferGATIcket2', '$counterOfferLoadIn', '$counterOfferDoors', '$counterOfferSetTime', '$counterOfferSetLength', '$counterOfferCurfew');" ;

                $insert_into_CounterOffer = $db->exec($insert_query);
        }
        
    function accept_counter_offer($CounterOffer_ID){
        global $db;
        $accepted_CounterOffer = $db->exec("UPDATE CounterOffer SET counterOfferStatus = 'Accepted' WHERE CounterOffer_ID = '$CounterOffer_ID';");
        return $accepted_CounterOffer;

    }
    
   function reject_counter_offer($CounterOffer_ID){
        global $db;
        $rejected_CounterOffer = $db->exec("UPDATE CounterOffer SET counterOfferStatus = 'Rejected' WHERE CounterOffer_ID = '$CounterOffer_ID';");
        return $rejected_CounterOffer;

    }
    /////////////////////////////////////////////////////////////////
    /////////Agent Specific Counter Offer Database Functions/////////
    /////////////////////////////////////////////////////////////////
        function get_counter_Offers($Agent_ID) {
            global $db;
            $query = $db->prepare("SELECT * FROM CounterOffer WHERE Agent_ID = $Agent_ID AND counterOfferStatus = 'Pending' ORDER BY counterOfferTimeStamp DESC;");
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            
            //Eliminating redundant Counter Offers for the same Offer. The newest Counter Offer for an Offer is kept in the array $CounterOffers
            if ($query){
                $found_CounterOffers = array();
                foreach ($query as $row){
                    if (!in_array($row['Offer_ID'], $found_CounterOffers)){
                        $CounterOffers[] = $row;
                        $found_CounterOffers[] = $row['Offer_ID'];
                    }
                }
            }
            
            //just testing values
            //echo var_dump($CounterOffers);
            
            return $CounterOffers;
    }

        function get_counter_Offer($CounterOffer_ID) {
            global $db;
            $row = $db->query("SELECT * FROM CounterOffer WHERE CounterOffer_ID = $CounterOffer_ID;");
            $CounterOffer = $row->fetch();
            return $CounterOffer;
    }

?>

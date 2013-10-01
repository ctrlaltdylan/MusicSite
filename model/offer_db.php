<?php
	

	function get_Offers($Promoter_ID) {
		global $db;
		$Offers = $db->query("SELECT * FROM Offer WHERE Promoter_ID = $Promoter_ID AND offerStatus = 'Pending';");
		return $Offers->fetchAll(PDO::FETCH_ASSOC);
	}
        
        function get_Offer($Offer_ID) {
		global $db;
                
		$query = $db->query("SELECT * FROM Offer WHERE Offer_ID = $Offer_ID;");
                $Offer = $query->fetch();
                //$Offer = $row->mysql_fetch_array();
		return $Offer;
	}
        
        
        function get_acceptedOffers($Promoter_ID) {
		global $db;
		$acceptedOffers = $db->query("SELECT * FROM Offer WHERE Promoter_ID = $Promoter_ID AND offerStatus = 'Accepted';");
		return $acceptedOffers->fetchAll(PDO::FETCH_ASSOC);
	}
       
        function get_rejectedOffers($Promoter_ID) {
		global $db;
		$rejectedOffers = $db->query("SELECT * FROM Offer WHERE Promoter_ID = $Promoter_ID AND offerStatus = 'Rejected';");
		return $rejectedOffers->fetchAll(PDO::FETCH_ASSOC);
	}
        
        
	function insert_Offers($Values){
	//Write to Database
                global $db;
		$Columns = "Artist_ID, Venue_ID, offerDate, offerStatus, offerGuarantee, offerBonus, offerHotel, offerTechnical, offerMediaSupport, offerSellableCap, offerAgeLimit, offerEventType, offerGATicket1, offerGATIcket2, offerLoadIn, offerDoors, offerSetTime, offerSetLength, offerCurfew"; 
		
		$insert_query = "INSERT INTO Offer ($Columns) VALUES ($Values);" ;

                $insert_into_Offer = $db->exec($insert_query);
        }

        function get_Location($Venue_ID) {
                global $db;
                $Location = $db->query("SELECT venueLocation FROM Venue WHERE Venue_ID = '$Venue_ID';");
                return $Location;
        }
        
        function get_Locations() {
                global $db;
                $Locations = $db->query("SELECT venueLocation FROM Venue;");
                return $Locations;
        }
        
        function accept_Offer($Offer_ID) {
                global $db;
                $accepted_Offer = $db->exec("UPDATE Offer SET offerStatus = 'Accepted' WHERE Offer_ID = $Offer_ID;");
                return $accepted_Offer;
        }
        
        function reject_Offer($Offer_ID) {
                global $db;
                $rejected_Offer = $db->exec("UPDATE Offer SET offerStatus = 'Rejected' WHERE Offer_ID = $Offer_ID;");
        }

        
        function submit_offer($Artist_ID, $Agent_ID, $Venue_ID, $Promoter_ID, $offerDate, $offerStatus, $offerGuarantee, $offerBonus, $offerHotel, $offerTechnical, $offerMediaSupport, $offerSellableCap, $offerAgeLimit, $offerEventType, $offerGATicket1 , $offerGATIcket2, $offerLoadIn , $offerDoors , $offerSetTime , $offerSetLength , $offerCurfew){
                //Write to Database
                global $db;
		
		$Columns = "Artist_ID, Agent_ID, Venue_ID, Promoter_ID, offerDate, offerStatus, offerGuarantee, offerBonus, offerHotel, offerTechnical, offerMediaSupport, offerSellableCap, offerAgeLimit, offerEventType, offerGATicket1, offerGATIcket2, offerLoadIn, offerDoors, offerSetTime, offerSetLength, offerCurfew"; //,offerGuarantee"; //, offerBonus, offerHotel, offerTechnical, offerMediaSupport, offerSellableCap, offerAgeLimit";
		$Values = "'$Artist_ID', '$Agent_ID', '$Venue_ID', '$Promoter_ID', '$offerDate', '$offerStatus', '$offerGuarantee','$offerBonus','$offerHotel','$offerTechnical','$offerMediaSupport','$offerSellableCap', '$offerAgeLimit', '$offerEventType','$offerGATicket1', '$offerGATIcket2', '$offerLoadIn', '$offerDoors','$offerSetTime', '$offerSetLength','$offerCurfew'";//,'$offerGuarantee'";

		$insert_query = "INSERT INTO Offer ($Columns) VALUES ($Values);" ;


                $insert_into_Offer = $db->exec($insert_query);

		if($insert_into_Offer){
			echo 'Great success, the offer has been written to the database';
		} else {
			echo 'Nope, write not successful';
		}
        }
        
        function artistName_to_Artist_ID($artistName){
                global $db;
            //Grab the artistName from POST and convert it to an Artist_ID
		$Artist_select = $db->query("SELECT Artist_ID FROM Artist WHERE artistName = '$artistName';");
		$Artist_row = $Artist_select->fetch();
		$Artist_ID = $Artist_row['Artist_ID'];
                return $Artist_ID;
        }
        
        function venueName_to_Venue_ID($venueName){
                global $db;
                $Venue_query = "SELECT * FROM Venue WHERE venueName = '$venueName';";
		$Venue_select = $db->query($Venue_query);
		$Venue_row = $Venue_select->fetch();
		$Venue_ID = $Venue_row['Venue_ID'];
                return $Venue_ID;
        }
        
        function generate_contract($Offer_ID){
                global $db;
                
		$query = $db->query("SELECT * FROM Offer WHERE Offer_ID = $Offer_ID;");
                $Offer = $query->fetch();
                
		return $Offer;
            
        }
        
        
?>
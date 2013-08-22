<?php
                $Offer_ID = $_POST['Offer_ID'];
                
                $Agent_ID = $_POST['Agent_ID'];

                $artistName = $_POST['artistName'];
		
		$venueName = $_POST['venueName'];
                
                $Promoter_ID = $_POST['Promoter_ID'];
                
		// Date
		$counterOfferDate = $_POST['Date'];
		
		// Status (Always 'Pending' upon submission)
		$counterOfferStatus = "Pending";
		
		// Garauntee
		$counterOfferGuarantee = $_POST['Guarantee'];
		
                
		// Bonus
		$counterOfferBonus = $_POST['Bonus'];
                
		// Hotel
		$counterOfferHotel = $_POST['Hotel'];
                
		// Technical
		$counterOfferTechnical = $_POST['Technical'];
                
		// Media Support
		$counterOfferMediaSupport = $_POST['Media_Support'];
                
		// Sellable Cap
		$counterOfferSellableCap = $_POST['Sellable_Cap'];

		// Age_Limi
		$counterOfferAgeLimit = $_POST['Age_Limit'];

		// Event Type
		$counterOfferEventType = $_POST['Event_Type'];

		//GA Ticket 1
		$counterOfferGATicket1 = $_POST['GA_Ticket1'];

		//GA Ticket 2
		$counterOfferGATIcket2 = $_POST['GA_Ticket2'];

		//Load In
		$counterOfferLoadIn = $_POST['Load_In'];

		//Doors
		$counterOfferDoors = $_POST['Doors'];

		//Set Time
		$counterOfferSetTime = $_POST['Set_Time'];

		//Set Lenght
		$counterOfferSetLength = $_POST['Set_Length'];

		// Curfew
		$counterOfferCurfew = $_POST['Curfew'];
?>

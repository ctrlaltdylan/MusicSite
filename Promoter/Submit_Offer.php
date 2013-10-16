<?php
	// ChomePHP logging
	include 'ChromePhp.php';
	ChromePhp::log('Hello console!');
	ChromePhp::log($_SERVER);
	ChromePhp::warn('something went wrong!');

		include '../model/database.php';
	

		$artistNameame = $_POST['artistName'];

		//Grab the artistName from POST and convert it to an Artist_ID
		$Artist_query = "SELECT * FROM Artist WHERE artistName = '$Artist_Name';";
		$Artist_select = $db->query($Artist_query);
		$Artist_row = $Artist_select->fetch();
		$Artist_ID = $Artist_row['Artist_ID'];
		//$Artist_ID = mysql_real_escape_string($Artist_ID);

		//Grab the venueName from POST and convert it to a Venue_ID
		$Venue_Name = $_POST['venueName'];

		$Venue_query = "SELECT * FROM Venue WHERE venueName = '$Venue_Name';";
		$Venue_select = $db->query($Venue_query);
		$Venue_row = $Venue_select->fetch();
		$Venue_ID = $Venue_row['Venue_ID'];
		//$Venue_ID = mysql_real_escape_string($Venue_ID);

		// Date
		$offerDate = $_POST['Date'];
		//$offerDate = mysql_real_escape_string($offerDate);

		// Status (Always 'Pending' upon submission)
		$offerStatus = 'Pending';
		//$offerStatus = mysql_real_escape_string($offerStatus);

		// Garauntee
		$offerGuarantee = $_POST['Guarantee'];
		//$offerGuarantee = mysql_real_escape_string($offerGuarantee);

		// Bonus
		$offerBonus = $_POST['Bonus'];

		// Hotel
		$offerHotel = $_POST['Hotel'];

		// Technical
		$offerTechnical = $_POST['Technical'];

		// Media Support
		$offerMediaSupport = $_POST['Media_Support'];

		// Sellable Cap
		$offerSellableCap = $_POST['Sellable_Cap'];

		// Age_Limit
		$offerAgeLimit = $_POST['Age_Limit'];

		// Event Type
		$offerEventType = $_POST['Event_Type'];

		//GA Ticket 1
		$offerGATicket1 = $_POST['GA_Ticket1'];

		//GA Ticket 2
		$offerGATIcket2 = $_POST['GA_Ticket2'];

		//Load In
		$offerLoadIn = $_POST['Load_In'];

		//Doors
		$offerDoors = $_POST['Doors'];

		//Set Time
		$offerSetTime = $_POST['Set_Time'];

		//Set Lenght
		$offerSetLength = $_POST['Set_Length'];

		// Curfew
		$offerCurfew = $_POST['Curfew'];



		echo "<p>Artist ID : $Artist_ID </p>";
		echo "<p>Venue ID : $Venue_ID </p>";
		echo "<p>offer Date : $offerDate </p>";
		echo "<p>offer Status : $offerStatus </p>";
		echo "<p>offer Guarantee : $offerGuarantee </p>";


		//Write to Database
		$Columns = "Artist_ID, Venue_ID, offerDate, offerStatus, offerGuarantee, offerBonus, offerHotel, offerTechnical, offerMediaSupport, offerSellableCap, offerAgeLimit, offerEventType, offerGATicket1, offerGATIcket2, offerLoadIn, offerDoors, offerSetTime, offerSetLength, offerCurfew"; //,offerGuarantee"; //, offerBonus, offerHotel, offerTechnical, offerMediaSupport, offerSellableCap, offerAgeLimit";
		$Values = "'$Artist_ID', '$Venue_ID', '$offerDate', '$offerStatus', '$offerGuarantee','$offerBonus','$offerHotel','$offerTechnical','$offerMediaSupport','$offerSellableCap', '$offerAgeLimit', '$offerEventType','$offerGATicket1', '$offerGATIcket2', '$offerLoadIn', '$offerDoors','$offerSetTime', '$offerSetLength','$offerCurfew'";//,'$offerGuarantee'";

		$insert_query = "INSERT INTO Offer ($Columns) VALUES ($Values);" ;

		echo "<p> $insert_query</p>";

	$insert_into_Offer = $db->exec($insert_query);

			if($insert_into_Offer){
				echo 'Great success, the offer has been written to the database';
			} else {
				echo 'Nope, write not successful';
			}

		ChromePhp::log($Artist_Name);
		ChromePhp::log($Artist_query);
		ChromePhp::loc($Artist_ID);







?>
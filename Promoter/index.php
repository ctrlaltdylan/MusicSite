<?php 
		include '../model/database.php';
		include '../model/artist_db.php';
		include '../model/offer_db.php';
                include '../model/venue_db.php';
                include '../model/promoter_db.php';
                include '../model/counter_offer_db.php';
                include '../model/agent_db.php';
                include 'offer_validation.php';
                session_start();
		
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];

} else {
    $action = 'list_offers';
}

if ($action === 'list_offers') {
    // Get Offer data
    
    if (!isset($_SESSION['Promoter_ID'])){
        echo ' $_SESSION[Promoter_ID] is not set. ';
        echo $_SESSION['user_name']; //this proves that SESSION is in fact working
    } else{
        echo $_SESSION['Promoter_ID'];
        $Promoter_ID = $_SESSION['Promoter_ID'];
    }
    
    
    if (get_Offers($Promoter_ID) == 0){
        echo ' Sorry there are no offers corresponding with this ID ';
    } else {
        $Offers = get_Offers($Promoter_ID);
    }
    
    if (get_acceptedOffers($Promoter_ID) == 0){
        echo ' Sorry there are no accepted offers corresponding with this ID ';
    } else {
        $acceptedOffers = get_acceptedOffers($Promoter_ID);
    }   
    
    if (get_rejectedOffers($Promoter_ID) == 0){
        echo ' Sorry there are no rejected offers corresponding with this ID ';
    } else {
        $rejectedOffers = get_rejectedOffers($Promoter_ID);
    } 
    
    
    $Locations = get_Locations();

    // Display the Offer list
    include 'offer_list.php';

} elseif ($action == 'offer_form') {
    
    if (!isset($_SESSION['Promoter_ID'])){
        echo ' $_SESSION[Promoter_ID] is not set. ';
        echo $_SESSION['user_name']; //this proves that SESSION is in fact working
    } else{
        $Promoter_ID = $_SESSION['Promoter_ID'];
    }
	//get data from database
    $Artists = get_Artists();
    $Venues = get_Venues();
    $Agents = get_Agents();

    // Display the Offer list
    include 'offer_form.php';


} elseif ($action == 'submit_offer') {
    
    $Promoter_ID = $_SESSION['Promoter_ID'];

    include 'offer_POST_data.php';

    $Artist_ID = artistName_to_Artist_ID($artistName);
    $Venue_ID = venueName_to_Venue_ID($venueName); 
    
    ## Validating the user inputted values before writing to the database
    
    #if (offer_validation($Artist_ID, $Agent_ID, $Venue_ID, $Promoter_ID, $offerDate, $offerStatus, $offerGuarantee, $offerBonus, $offerHotel, $offerTechnical, $offerMediaSupport, $offerSellableCap, $offerAgeLimit, $offerEventType, $offerGATicket1 , $offerGATIcket2, $offerLoadIn , $offerDoors , $offerSetTime , $offerSetLength , $offerCurfew) === True) {
    $submitoffer = submit_offer($Artist_ID, $Agent_ID, $Venue_ID, $Promoter_ID, $offerDate, $offerStatus, $offerGuarantee, $offerBonus, $offerHotel, $offerTechnical, $offerMediaSupport, $offerSellableCap, $offerAgeLimit, $offerEventType, $offerGATicket1 , $offerGATIcket2, $offerLoadIn , $offerDoors , $offerSetTime , $offerSetLength , $offerCurfew);
    #} else {
     #   echo $errors;
    #}
    
    $Offers = get_Offers($Promoter_ID);
    $acceptedOffers = get_acceptedOffers($Promoter_ID);
    $rejectedOffers = get_rejectedOffers($Promoter_ID);
    
    include 'offer_list.php';
        
}elseif($action === 'accept_offer'){
    
    if (!isset($_POST['Offer_ID'])){
    } else {
        $Offer_ID = $_POST['Offer_ID'];
    }
    
    $Accepted = accept_Offer($Offer_ID);
    
    //$Locations = get_Locations();
    $Promoter_ID = $_SESSION['Promoter_ID'];
    $Offers = get_Offers($Promoter_ID);
    
    include 'offer_list.php';

} elseif($action === 'reject_offer'){
    $Offer_ID = $_POST['Offer_ID'];
    reject_Offer($Offer_ID);
    
    $Promoter_ID = $_SESSION['Promoter_ID'];
    $Offers = get_Offers($Promoter_ID);
    //$Locations = get_Locations();
    include 'offer_list.php';

} elseif($action === 'counter_offer'){
    
    $Promoter_ID = $_SESSION['Promoter_ID'];
    $Artists = get_Artists();
    $Venues = get_Venues();
    $Promoters = get_Promoters();    
    
    $Offer_ID = $_POST['Offer_ID'];
    $Offer = get_Offer($Offer_ID);
    
    
    include 'counter_offer.php';
    
} elseif( $action === 'submit_counter_offer') {
    $Promoter_ID = $_SESSION['Promoter_ID'];
    

    include 'counter_offer_POST_data.php';
    
    $Artist_ID = artistName_to_Artist_ID($artistName);
    $Venue_ID = venueName_to_Venue_ID($venueName); 
    echo $Agent_ID;
    $submitCounterOffer = submit_counter_Offer($Offer_ID, $counterOfferStatus, $Artist_ID, $Agent_ID, $Venue_ID, $counterOfferDate, $counterOfferGuarantee, $counterOfferBonus, $counterOfferHotel, $counterOfferTechnical, $counterOfferMediaSupport, $counterOfferSellableCap, $counterOfferAgeLimit, $counterOfferEventType, $counterOfferGATicket1, $counterOfferGATIcket2, $counterOfferLoadIn, $counterOfferDoors, $counterOfferSetTime, $counterOfferCurfew);
    include 'offer_list.php';
    
} elseif( $action === 'view_calendar'){
    
    $Promoter_ID = $_SESSION['Promoter_ID'];
    
    $Offers = get_Offers($Promoter_ID);
    
    include 'view_calendar.php';
    
    
} elseif ( $action === 'generate_contract'){
    
    $Promoter_ID = $_SESSION['Promoter_ID'];
    
    $Offer_ID = $_POST['Offer_ID'];
    $Offer = get_Offer($Offer_ID);
    include 'generate_contract.php';
    
} else {
    echo 'fuckkk';
}

?>
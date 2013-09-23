<?php

    #### Offer Submission Validation (Agent) ####
    
    # This file will be processed before an offer is submitted to the database
    # If one of the tests fail, the function will return FALSE. 
    # If none of the tests fail, the function will return a TRUE and the index.php will continue processing

function offer_validation($Artist_ID, $Agent_ID, $Venue_ID, $Promoter_ID, $offerDate, $offerStatus, $offerGuarantee, $offerBonus, $offerHotel, $offerTechnical, $offerMediaSupport, $offerSellableCap, $offerAgeLimit, $offerEventType, $offerGATicket1 , $offerGATIcket2, $offerLoadIn , $offerDoors , $offerSetTime , $offerSetLength , $offerCurfew) {
    ### Checking if key variables are empty ###
    if (!isset($Artist_ID)){
        $errors[] = 'Artist_ID is not set';
        return False;
    } elseif (!isset($Agent_ID)) {
        $errors[] = 'Agent_ID is not set';
        return False;
    } elseif (!isset($Venue_ID)) {
        $errors[] = 'Venue ID is not set';
        return False;
    } elseif (!isset($Promoter_ID)) {
        $errors[] = 'Promoter_ID is not set';
        return False;
    } elseif (!isset($offerDate)) {
        $errors[] = 'The offer date is not set';
        return False;
    } elseif (!isset($offerStatus)) {
        $errors[] = 'Agent_ID is not set';
        return False;
    }
    
    ### Validating field data types ###
    
    if (!is_integer($Artist_ID)){
        $errors[] = "Artist_ID variable is not an integer";
        return False;
    } elseif (!is_integer($Agent_ID)){
        $errors[] = "Agent_ID variable is not an integer";
        return False;
    } elseif (!is_integer($Venue_ID)){
        $errors[] = "Venue_ID variable is not an integer";
        return False;
    } elseif (!is_integer($Promoter_ID)){
        $errors[] = "Promoter_ID variable is not an integer";
        return False;
    } elseif (!is_($Agent_ID)){
        $errors[] = "Agent_ID variable is not an integer";
        return False;
    }
}
?>

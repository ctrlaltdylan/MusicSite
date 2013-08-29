<?php


    function get_Agent_Offers($Agent_ID) {
        
            global $db;
            $Offers = $db->query("SELECT * FROM Offer WHERE Agent_ID = $Agent_ID and offerStatus = 'Pending';");
            return $Offers;
    }
    

?>

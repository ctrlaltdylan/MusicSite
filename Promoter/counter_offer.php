<?php 
    include '../header.php';        
?>

<div id = 'container'>
    <h3>Submit a Counter Offer</h3>
    <div id = "form-wrapper">
            <form method="post" action="index.php" id="submit_counter_offer">
            <!-- hidden input data to direct the Offer Submit action-->
            <input type="hidden" name="action" value="submit_counter_offer" />
            <input type = "hidden" id ="Promoter_ID" name ="Promoter_ID" value="<?php echo $Promoter_ID; ?>">
            <input type = "hidden" id ="Offer_ID" name ="Offer_ID" value="<?php echo $Offer_ID; ?>">
            <input type = "hidden" id ="Agent_ID" name ="Agent_ID" value="<?php echo $Offer['Agent_ID']; ?>">
            
                <table border ="1">
                    <tr>
                        <th> </th>
                        <th>Offered</th>
                        <th>Counter Offer</th>
                    </tr>
                    <tr>    
                        <td>
                            <b>For Artist</b>
                        </td>
                            <td>
                                <?php echo $Offer['Artist_ID'];?>
                            </td>
                            <td>
                            <select name = 'artistName' id = 'artistName'>
                                    <?php foreach ($Artists as $Artist) { ?>
                                    <!-- This mess of code is to grab the Artist's Artist_ID from the artistName value-->
                                    <option value = <?php echo "'". $Artist['artistName'] . "'"; ?> > <?php echo $Artist['artistName']; ?> </option>
                                    <?php } ?>
                            </select>
                            </td>
                     </tr>
                     <tr>
                         <td>
                             <b>For Date</b>
                         </td>
                         <td>
                             <?php echo $Offer['offerDate'];?>
                         </td>
                         <td>
                             <input type="date" name = "Date" id = "Date" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Guarantee</b>
                         </td>
                         <td>
                             <?php echo $Offer['offerGuarantee']; ?>
                         </td>
                         <td>
                             <input type = "text" id = "Guarantee" name = "Guarantee" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Bonus</b>
                         </td>
                         <td>
                             <?php echo $Offer['offerBonus']; ?>
                         </td>
                         <td>
                             <input type = "text" id = "Bonus" name = "Bonus" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Hotel</td>
                         </td>
                         <td>
                             <?php echo $Offer['offerHotel']; ?>
                         </td>
                         <td>
                             <input type = "text" id = "Hotel" name = "Hotel" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Technical</b>
                         </td>
                         <td>
                             <?php echo $Offer['offerTechnical']; ?>
                         </td>
                         <td>
                             <input type = "text" id = "Technical" name = "Technical" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Media Support</b>
                         </td>
                         <td>
                             <?php echo $Offer['offerMediaSupport']; ?>
                         </td>
                         <td>
                             <input type = "text" id = "Media_Support" name = "Media_Support" />
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Venue</b>
                         </td>
                         <td>
                             <?php echo $Offer['Venue_ID']; ?>
                         </td>
                         <td>
                             <select name = 'venueName' id = 'venueName'>
                                <?php foreach ($Venues as $Venue) { ?>
                                <option value = <?php $venueName = $Venue['venueName']; echo "'". $venueName . "'"; ?> > <?php echo $Venue['venueName']; ?> </option>
                                <?php } ?>
                            </select>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <b>Location</b>
                         </td>
                         <td>
                             <!--Location Data needs to go here from Venue ID-->
                         </td>
                         <td>
                             <select name = 'venueLocation' id = 'venueLocation'>
                                <?php foreach ($Venues as $Venue) { ?>
                                <option value = "<?php echo $Venue['venueLocation']; ?>" > <?php echo $Venue['venueLocation']; ?> </option>
                                <?php } ?>
                            </select>
                         </td>
                     </tr>
                     <tr>
                        <td>
                            <b>Sellable Cap</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerSellableCap']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Sellable_Cap" name = "Sellable_Cap" />
                        </td>
                     </tr>
                    
                    <tr>
                        <td>
                            <b>Age Limit</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerSellableCap']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Age_Limit" name = "Age_Limit" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Event Type</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerEventType']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Event_Type" name = "Event_Type" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>GA Ticket 1</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerGATicket1']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "GA_Ticket1" name = "GA_Ticket1" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>GA Ticket 2</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerGATicket2']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "GA_Ticket2" name = "GA_Ticket2" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Load in</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerLoadIn']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Load_In" name = "Load_In" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Doors</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerDoors']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Doors" name = "Doors" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Set Time</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerSetTime']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Set_Time" name = "Set_Time" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Set Length</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerSetLength']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Set_Length" name = "Set_Length" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Curfew</b>
                        </td>
                        <td>
                            <?php echo $Offer['offerCurfew']; ?>
                        </td>
                        <td>
                            <input type = "text" id = "Curfew" name = "Curfew" />
                        </td>
                    </tr>
                </table>
            
            <input type='submit' value = "Submit Counter Offer">
            </form>
    </div>
</div>


<?php include '../footer.php'; ?>

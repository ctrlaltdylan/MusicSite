<?php include '../header.php'; 
?>

<div id = 'container'>

    <h3>Current Counter Offers</h3>
    <table border="1">
    <tr>
            <th>Offer ID</th>
            <th>For Artist</th>
            <th>Venue</th>
            <th>Counter Offer Status</th>
            <th>Counter Offer Time Stamp</th>
    </tr>
    <?php foreach ($CounterOffers as $CounterOffer){?>

    <tr>
            <td><?php echo $CounterOffer['Offer_ID']; ?></td>
                <?php $artistName = get_artistName($CounterOffer['Artist_ID']); ?>
            <td><?php echo $artistName['artistName']; ?></td>
            
            <?php $venueName = get_venueName($CounterOffer['Venue_ID']); ?>
            <td><?php echo $venueName['venueName']; ?></td>
            <td><?php echo $CounterOffer['counterOfferStatus']; ?></td>
            <td><?php echo $CounterOffer['counterOfferTimeStamp']; ?></td>
            
            <td><form action = "." method = "post">
                    <input type = "hidden" name = "action" value = "accept_counter_offer" />
                    <input type = "hidden" name = "CounterOffer_ID" value ="<?php echo $CounterOffer['CounterOffer_ID']; ?>" />
                    <input type ="submit" value ="Accept">
                </form>
            </td>
            <td><form action = "." method = "post">
                    <input type = "hidden" name = "action" value = "reject_counter_offer" />
                    <input type = "hidden" name = "CounterOffer_ID" value ="<?php echo $CounterOffer['CounterOffer_ID']; ?>" />
                    <input type ="submit" value ="Reject">
                </form>
            </td>
            <td>
                <form action = "." method ="post">
                    <input type ="hidden" name="action" value="counter_offer" />
                    <input type ="hidden" name ="CounterOffer_ID" id = "CounterOffer_ID" value="<?php echo $CounterOffer['CounterOffer_ID']; ?>" />
                    <input type ="submit" value ="Counter Offer">
                </form>
            </td>
    <?php } ?>
    </tr>
    </table>

</div>

<?php include '../footer.php'; ?>

<?php include '../header.php'; 
?>

<div id = 'container'>

			<h3>Current Offers</h3>
			<table>
			<tr>
				<th>Offer ID</th>
				<th>For Artist</th>
				<th>Venue</th>
				<th>Offer Status</th>
			</tr>
                        <?php foreach ($Offers as $Offer){?>
                         
                        <tr>
                                <td><?php echo $Offer['Offer_ID']; ?></td>
                                <td><?php echo $Offer['Artist_ID']; ?></td>
                                <td><?php echo $Offer['Venue_ID']; ?></td>
                                <td><?php echo $Offer['offerStatus']; ?></td>
                                <td><form action = "." method = "post">
                                        <input type = "hidden" name = "action" value = "accept_offer" />
                                        <input type = "hidden" name = "Offer_ID" value ="<?php echo $Offer['Offer_ID']; ?>" />
                                        <input type ="submit" value ="Accept">
                                    </form>
                                </td>
                                <td><form action = "." method = "post">
                                        <input type = "hidden" name = "action" value = "reject_offer" />
                                        <input type = "hidden" name = "Offer_ID" value ="<?php echo $Offer['Offer_ID']; ?>" />
                                        <input type ="submit" value ="Reject">
                                    </form>
                                </td>
                                <td>
                                    <form action = "." method ="post">
                                        <input type ="hidden" name="action" value="counter_offer" />
                                        <input type ="hidden" name ="Offer_ID" id = "Offer_ID" value="<?php echo $Offer['Offer_ID']; ?>" />
                                        <input type ="submit" value ="Counter Offer">
                                    </form>
                                </td>
                        <?php } ?>
                        </tr>
			</table>

</div>

<?php include '../footer.php'; ?>
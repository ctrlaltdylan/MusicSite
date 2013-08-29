
<?php include '../header.php'; 
?>

<div id = 'container'>

    <form action="index.php" method="post">
        <input type="hidden" name="action" id="action" value="view_counter_offers"/>
        <input type="submit" name="submit" value="View Counter Offers"/>
    </form>
			<h3>Current Offers</h3>
			<table border ="1">
			<tr>
				<th>Offer ID</th>
				<th>For Artist</th>
                                <th>Promoter</th>
				<th>Venue</th>
				<th>Offer Status</th>
			</tr>
                        <?php foreach ($Offers as $Offer){?>
                         
                        <tr>
                                <td><?php echo $Offer['Offer_ID']; ?></td>
                                
                                <?php $artistName = get_artistName($Offer['Artist_ID']); ?>
                                <td><?php echo $artistName['artistName']; ?></td>
                                 
                                <?php $promoterName = get_promoterName($Offer['Promoter_ID']); ?>
                                <td><?php echo $promoterName['promoterName']; ?></td>
                                
                                <?php $venueName = get_venueName($Offer['Venue_ID']); ?>
                                <td><?php echo $venueName['venueName']; ?></td>
                                <td><?php echo $Offer['offerStatus']; ?></td>
                        
                        <?php } ?>
                        </tr>
			</table>
                        
                        <p><a href=".?action=offer_form">Create an Offer</a></p>

</div>

<?php include '../footer.php'; ?>


<div id = 'container'>
			<h3>Current Offers</h3>
			<table>
			<tr>
				<th>Offer ID</th>
				<th>For Artist</th>
				<th>Venue</th>
				<th>Location</th>
			</tr>

			<?php 
			$Offers = $db->query('SELECT * FROM Offer;');
			foreach ($Offers as $Offer) { 
			?>
			<tr>
				<td><?php echo $Offer['Offer_ID']; ?></td>
				<td><?php echo Artist_ID_to_Artist_Name($Offer['Artist_ID']); ?></td>
				<td><?php echo $Offer['Venue_ID']; ?></td>

			</tr>
			<?php } ?>
			</table>
			
</div>
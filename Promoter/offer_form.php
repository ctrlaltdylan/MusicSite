<?php 
	include '../header.php';
	// ChomePHP logging
        if (empty($Venues)){
            echo ' Venues is empty ';
        }
        
?>

		<div id = 'container'>
			<h3>Submit an offer for an Artist</h3>
			<div id = "form-wrapper">
				<form method='post' action='index.php' id ='insert_offer'>
					<table border ="1">
						<tr><td>Artist Requested : </td>
                                                <td>
                                                    <select name = 'artistName' id = 'artistName'>
							<?php foreach ($Artists as $Artist) { ?>
							<!-- This mess of code is to grab the Artist's Artist_ID from the artistName value-->
							<option value = <?php echo "'". $Artist['artistName'] . "'"; ?> > <?php echo $Artist['artistName']; ?> </option>
							<?php } ?>
                                                    </select>
                                                </td>
						</tr>
                                                
                                                <!-- hidden input data to direct the Offer Submit action-->
                                                <input type="hidden" name="action" value="submit_offer" />
                                                
						<!-- ***** Date ******* -->
                                        <tr>
						<td><label>Date : </label></td>
                                                <td><input type="date" name = "Date" id = "Date" /></td>
                                        </tr>

						<!-- ***** Guarantee ******* -->
                                        <tr>
						<td><label>Guarantee : </label></td>
                                                <td><input type = "text" id = "Guarantee" name = "Guarantee" /> </td>
                                        </tr>
						<!-- ***** Bonus ******* -->
                                        <tr>
						<td><label>Bonus : </td> 
                                                <td><input type = "text" id = "Bonus" name = "Bonus" /> </td>
                                        </tr>

						<!-- ***** Hotel ******* -->
                                        <tr>
						<td><label>Hotel : </td>
                                                <td><input type = "text" id = "Hotel" name = "Hotel" /> </td>
                                        </tr>

						<!-- ***** Technical ******* -->
                                        <tr>
						<td><label>Technical : </td> 
                                                <td><input type = "text" id = "Technical" name = "Technical" /> </td>
                                        </tr>

						<!-- ***** Media Support ******* -->
                                        <tr>
						<td><label>Media Support : </td> 
                                                <td><input type = "text" id = "Media_Support" name = "Media_Support" /> </td>
                                        </tr>

						<!-- ***** Venue ******* -->
                                        <tr>
                                            <td><label>Venue : </label></td>
                                            <td>
							<select name = 'venueName' id = 'venueName'>
								<?php foreach ($Venues as $Venue) { ?>
								<option value = <?php $venueName = $Venue['venueName']; echo "'". $venueName . "'"; ?> > <?php echo $Venue['venueName']; ?> </option>
								<?php } ?>
                                                        </select>
                                            </td>
                                        </tr>

						<!-- ***** Location ******* -->
                                        <tr>
						<td><label>Location : </label></td>
                                                <td>
							<select name = 'venueLocation' id = 'venueLocation'>
								<?php foreach ($Venues as $Venue) { ?>
								<option value = "<?php echo $Venue['venueLocation']; ?>" > <?php echo $Venue['venueLocation']; ?> </option>
								<?php } ?>
                                                        </select>
                                                </td>
                                        </tr>

						<!-- ***** Sellable Cap ******* -->
                                        <tr>
						<td><label>Sellable Cap : </label></td> 
                                                <td><input type = "text" id = "Sellable_Cap" name = "Sellable_Cap" /> </td>
                                        </tr>

						<!-- ***** Age Limit ******* -->
                                        <tr>
						<td><label>Age Limit : </label></td>
                                                <td><input type = "text" id = "Age_Limit" name = "Age_Limit" /></td>
                                        </tr>

						<!-- ***** Event Type ******* -->
                                        <tr>
						<td><label>Event Type : </label></td>
                                                <td><input type = "text" id = "Event_Type" name = "Event_Type" /></td>
                                        </tr>
                                                

						<!-- ***** GA Ticket 1 ******* -->
                                        <tr>
						<td><label>GA Ticket 1 : </label></td>
                                                <td><input type = "text" id = "GA_Ticket1" name = "GA_Ticket1" /> </td>
                                        </tr>

						<!-- ***** GA Ticket 2 ******* -->
                                        <tr>
						<td><label>GA Ticket 2 : </label></td>
                                                <td><input type = "text" id = "GA_Ticket2" name = "GA_Ticket2" /> </td>
                                        </tr>

						<!-- ***** Load in ******* -->
                                        <tr>
						<td><label>Load in  : </label></td>
                                                <td><input type = "text" id = "Load_In" name = "Load_In" /> </td>
                                        </tr>

						<!-- ***** Doors ******* -->
                                        <tr>
						<td><label>Doors : </label></td>
                                                <td><input type = "text" id = "Doors" name = "Doors" /> </td>
                                        </tr>

						<!-- ***** Set Time ******* -->
                                        <tr>
						<td><label>Set Time : </label></td>
                                                <td><input type = "text" id = "Set_Time" name = "Set_Time" /> </td>
                                        </tr>

						<!-- ***** Set Length ******* -->
                                        <tr>
						<td><label>Set Length : </label></td>
                                                <td><input type = "text" id = "Set_Length" name = "Set_Length" /> </td>
                                        </tr>

						<!-- ***** Curfew ******* -->
                                        <tr>
						<td><label>Curfew : </label></td>
                                                <td><input type = "text" id = "Curfew" name = "Curfew" /> </td>
                                        </tr>

						<!-- ***** Promoter ******* -->
                                        <tr>
						<td><label>Agent : </label></td>
                                                <td>
							<select name = 'Agent_ID' id = 'Agent_ID'>
								<?php foreach ($Agents as $Agent) { ?>
								<option value = <?php echo "'". $Agent['Agent_ID'] . "'"; ?> > <?php echo $Agent['Agent_ID']; ?> </option>
								<?php } ?>
                                                        </select>
                                                </td>
                                        </tr>

						<!-- ***** Contact ******* -->      
                                        <tr>
						<td><label>Contact : </label></td>
                                                <td><input type = "text" id = "Contact" name = "Contact" /> </td>
                                        </tr>		

					</table>
                                    
                                     <input type='submit' value = "Submit Offer">
				</form>
			</div>
                        
                        
                        <p><a href=".?action=show_offers">Offer List</a></p>

                </div>


         


<?php include '../footer.php'; ?>
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
					<ul>
						<li><label>Artist Requested : </label>
						<select name = 'artistName' id = 'artistName'>
							<?php foreach ($Artists as $Artist) { ?>
							<!-- This mess of code is to grab the Artist's Artist_ID from the artistName value-->
							<option value = <?php echo "'". $Artist['artistName'] . "'"; ?> > <?php echo $Artist['artistName']; ?> </option>
							<?php } ?>
						</select>
						</li>
                                                
                                                <!-- hidden input data to direct the Offer Submit action-->
                                                <input type="hidden" name="action" value="submit_offer" />
                                                
						<!-- ***** Date ******* -->
						<li><label>Date : </label> <input type="date" name = "Date" id = "Date" /></li>


						<!-- ***** Guarantee ******* -->
						<li><label>Guarantee : </label> <input type = "text" id = "Guarantee" name = "Guarantee" /> </li>

						<!-- ***** Bonus ******* -->
						<li><label>Bonus : </label> <input type = "text" id = "Bonus" name = "Bonus" /> </li>

						<!-- ***** Hotel ******* -->
						<li><label>Hotel : </label> <input type = "text" id = "Hotel" name = "Hotel" /> </li>

						<!-- ***** Technical ******* -->
						<li><label>Technical : </label> <input type = "text" id = "Technical" name = "Technical" /> </li>

						<!-- ***** Media Support ******* -->
						<li><label>Media Support : </label> <input type = "text" id = "Media_Support" name = "Media_Support" /> </li>

						<!-- ***** Venue ******* -->
						<li><label>Venue : </label>
							<select name = 'venueName' id = 'venueName'>
								<?php foreach ($Venues as $Venue) { ?>
								<option value = <?php $venueName = $Venue['venueName']; echo "'". $venueName . "'"; ?> > <?php echo $Venue['venueName']; ?> </option>
								<?php } ?>
							</select></li>

						<!-- ***** Location ******* -->
						<li><label>Location : </label>
							<select name = 'venueLocation' id = 'venueLocation'>
								<?php foreach ($Venues as $Venue) { ?>
								<option value = "<?php echo $Venue['venueLocation']; ?>" > <?php echo $Venue['venueLocation']; ?> </option>
								<?php } ?>
						</select></li>

						<!-- ***** Sellable Cap ******* -->
						<li><label>Sellable Cap : </label> <input type = "text" id = "Sellable_Cap" name = "Sellable_Cap" /> </li>

						<!-- ***** Age Limit ******* -->
						<li><label>Age Limit : </label> <input type = "text" id = "Age_Limit" name = "Age_Limit" /> </li>

						<!-- ***** Event Type ******* -->
						<li><label>Event Type : </label> <input type = "text" id = "Event_Type" name = "Event_Type" /> </li>

						<!-- ***** GA Ticket 1 ******* -->
						<li><label>GA Ticket 1 : </label> <input type = "text" id = "GA_Ticket1" name = "GA_Ticket1" /> </li>

						<!-- ***** GA Ticket 2 ******* -->
						<li><label>GA Ticket 2 : </label> <input type = "text" id = "GA_Ticket2" name = "GA_Ticket2" /> </li>

						<!-- ***** Load in ******* -->
						<li><label>Load in  : </label> <input type = "text" id = "Load_In" name = "Load_In" /> </li>

						<!-- ***** Doors ******* -->
						<li><label>Doors : </label> <input type = "text" id = "Doors" name = "Doors" /> </li>

						<!-- ***** Set Time ******* -->
						<li><label>Set Time : </label> <input type = "text" id = "Set_Time" name = "Set_Time" /> </li>

						<!-- ***** Set Length ******* -->
						<li><label>Set Length : </label> <input type = "text" id = "Set_Length" name = "Set_Length" /> </li>

						<!-- ***** Curfew ******* -->
						<li><label>Curfew : </label> <input type = "text" id = "Curfew" name = "Curfew" /> </li>

						<!-- ***** Promoter ******* -->
						<li><label>Promoter : </label>
							<select name = 'Promoter_ID' id = 'Promoter_ID'>
								<?php foreach ($Promoters as $Promoter) { ?>
								<option value = <?php echo "'". $Promoter['Promoter_ID'] . "'"; ?> > <?php echo $Promoter['Promoter_ID']; ?> </option>
								<?php } ?>
						</select></li>

						<!-- ***** Contact ******* -->
						<li><label>Contact : </label> <input type = "text" id = "Contact" name = "Contact" /> </li>

						<input type='submit' value = "Submit Offer">

					</ul>
				</form>
			</div>
                        
                        
                        <p><a href=".?action=show_offers">Offer List</a></p>

                </div>


         


<?php include '../footer.php'; ?>
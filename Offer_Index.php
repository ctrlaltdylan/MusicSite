<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type ="text/css" href="css/main.css">
	<link rel="stylesheet" type ="text/css" href="css/normalize.css">
</head>
<body>
	<?php 
	include 'header.php';
	?>
		<?php
			include 'helpers/database.php';
		?>


		<div id = 'container'>

		<table border = '1'>
			<tr>
				<th>Offer ID</th>
				<th>Agent ID</th>
				<th>Promoter ID</th>
				<th>Offer Status</th>
			</tr>
		<?php
			$Offers = $db->query('SELECT * FROM Offer';);

			foreach ($Offers as $Offer) { ?>
			<tr>
				<td><?php echo $Offer['Offer_ID']; ?></td>
				<td><?php echo $Offer['Agent_ID']; ?></td>
				<td><?php echo $Offer['Promoter_ID']; ?></td>
				<td><?php echo $Offer['offerStatus']; ?></td>
			</tr>
			<?php } ?>

		</table>

		</div>


	<?php
	include 'footer.php'
	?>
</body>
</html>
<?php
	$dsn = 'mysql:host=localhost;dbname=MusicSite';
	$username = 'worker';
	$password = 'Drop.The.Bass';
	try {
		$db = new PDO ($dsn, $username, $password);	
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "<p>Error Message: $error_message </p>";
	}
	
?>
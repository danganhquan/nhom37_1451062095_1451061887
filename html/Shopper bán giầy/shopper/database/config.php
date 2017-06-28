<?php 

	$connect = mysqli_connect("localhost","root","","shoes_db");

	if (!$connect) {
		die(mysqli_connect_error());
	}
?>
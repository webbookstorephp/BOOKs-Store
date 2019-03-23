<?php
	$conn = mysqli_connect("localhost", "root","","test123");
	// kiem tra ket noi loi
	if(!$conn){
		die(mysqli_connect_error());
	} else {
		mysqli_set_charset($conn, 'utf8');
	}
 ?>
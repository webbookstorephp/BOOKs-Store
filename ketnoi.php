<?php
	$conn = mysqli_connect("localhost", "root","","websach_online");
	// kiem tra ket noi loi
	if(!$conn){
		die(mysqli_connect_error());
	} else {
		mysqli_set_charset($conn, 'utf8');
	}
 ?>
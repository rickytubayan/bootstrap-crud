<?php

	$SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DB_NAME= "master-crud-db";

	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DB_NAME);

	if (!$conn) {
		echo "No Database Connection";
	}

?>

  
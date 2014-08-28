<?php
	include "db.inc.php";

	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];


	$order = "UPDATE data_employees SET name='$name', address='$address' WHERE employees_number = '$id'";
	mysql_query($order);
	header("location:edit.php");
?>

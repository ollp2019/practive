<?php
	include 'connect.php'; 
	$id = $_GET['id'];
	$data = mysqli_query($conn ,"DELETE FROM user where id = $id");
	header('location:index.php')
 ?>
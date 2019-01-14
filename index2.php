<?php 
	include 'connect.php';
	$ten = $_POST['ten'];
	$tuoi = $_POST['tuoi'];
	echo "INSERT INTO user (id , name, tuoi ) VALUES (null ,'$ten', '$tuoi')";
	$data = mysqli_query($conn ,"INSERT INTO user (id ,name, tuoi ) VALUES (null ,'$ten', '$tuoi')");
	// chuyn huong ve index
	header('Location:index.php');
 ?>
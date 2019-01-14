<?php 
// $con = mysqli_connect('ten dia chi' , 'ten tai khoan' ,'mat khau' ,'ten database');
	$conn = mysqli_connect('localhost' , 'root' ,'' ,'vd1');
	if ($conn->connect_error) {
	    die("Đã lỗi : " . $conn->connect_error);
	} 
	echo "ko loi  <br>";
 ?>
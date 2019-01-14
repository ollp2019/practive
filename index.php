<?php 
	
	// goi laij noi dung tu file khac
	include 'connect.php';
	// if(isset($_POST['save'])){
	// 	$ten = $_POST['ten'];
	// 	$tuoi = $_POST['tuoi'];
	// 	echo "INSERT INTO user (id , name, tuoi ) VALUES (null ,'$ten', '$tuoi')";
	// 	$data = mysqli_query($conn ,"INSERT INTO user (id ,name, tuoi ) VALUES (null ,'$ten', '$tuoi')");
	// 	// chuyn huong ve index
	// 	header('Location:index.php');
	// }
	//truy van
	// $data = mysqli_query($conn ,'SELECT * FROM user');
	$data = $conn->query('SELECT * FROM user');

	while ($row = mysqli_fetch_assoc($data)) {
		 $a[] = $row; 
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div>
 		<!-- //truyen dia chi - get -->
		<!-- truyen khong qua dia chi post -->
		<form action="index2.php" method="get">
		<input type="text" name="ten">
		<input type="text" name="tuoi">
		<button type="submit" name="save">Gui</button>
		</form>
	</div>
 	<table border="1">
 		<tr>
 			<td>id</td>
 			<td>Ten</td>
 			<td>Tuoi</td>
 			<td></td>
 		</tr>
 		<!-- foreach nhu for nhuwng lap ko can chi so -->
 		<?php foreach ($a as  $value) : ?>
 			<tr>
 				<td><?php echo $value['id'] ?></td>
 				<td><?php echo $value['name'] ?></td>
 				<td><?php echo $value['tuoi'] ?></td>
 				<td><a href="xoa.php?id=<?php echo $value['id']; ?>">Xoa</a></td>
 				<td><a href="sua.php?id=<?php echo $value['id']; ?>">Sua</a></td>
 			</tr>
 		<?php endforeach ?>
 	</table>
 </body>
 </html>
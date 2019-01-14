<?php 
	include 'connect.php';
	if(isset($_GET['save'])){
		$id = $_GET['id'];
		$ten = $_GET['ten'];
		$tuoi = $_GET['tuoi'];
		echo "UPDATE user SET name=$ten, tuoi=$tuoi WHERE id=$id";
		$data = mysqli_query($conn ,"UPDATE user SET name='$ten', tuoi=$tuoi WHERE id=$id ");
		// chuyn huong ve index
		header('Location:index.php');
	}
	$id = $_GET['id'];
	$data = mysqli_query($conn ,"SELECT * FROM user where id = $id");
	$row = mysqli_fetch_assoc($data);

 ?>
 <form method="GET"  action="">
  	<input type="text" name ="ten" value="<?php echo $row['name']; ?>"> 	
 	<input type="text" name="tuoi" value="<?php echo $row['tuoi']; ?>">
 	<input type="text" name="id" hidden value="<?php echo $row['id']; ?>">
 	<button type="submit" name="save">Sua</button>
 </form>
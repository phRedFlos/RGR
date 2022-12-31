<?php include("includes/header.php"); ?>

<?php
$booking = mysqli_query($con, "SELECT * FROM `booking`");
$booking = mysqli_fetch_all($booking)
?>


<table>
	<tr>
		<th> id </th>
		<th> cust_name </th>
		<th> concert_id </th>
		<th> plece </th>
		<th> tel_namb </th>
		<th> email </th>
		<th> create_date </th>
	</tr>
	<?php
	foreach ($booking as $item) {
		echo '
		<tr>
		<td> '.$item[0].' </td>
		<td> '.$item[1].' </td>
		<td> '.$item[2].' </td>
		<td> '.$item[3].' </td>
		<td> '.$item[4].' </td>
		<td> '.$item[5].' </td>
		<td> '.$item[6].' </td>
		</tr>
		';
	}   
	?>
</table>


<h1>Бронювання</h1>
<form action="bookingadmin.php" method="post">
	<p>ID (для зміни і видалення)</p>
	<input type="text" name="id">
	<p>Номер вистави</p>
	<input type="text" name="concert_id">
	<p>Повне ім'я</p>
	<input type="text" name="cust_name">
	<p>Номер телефону</p>
	<input type="text" name="tel_namb" >
	<p>Номер місця</p>
	<input type="text" name="place" >
	<p>E-mail</p>
	<input type="email" name="email" >
	<button type="submit" name= "add">Додати</button>	
	<button type="submit" name= "update">Змінити</button>
	<button type="submit" name= "delete">Видалити</button>
</form>		

<?php
if(isset($_POST["add"])){
	$cust_name = $_POST['cust_name'];
	$email = $_POST['email'];
	$tel_namb = $_POST['tel_namb'];
	$place = $_POST['place'];
	$concert_id = $_POST['concert_id'];
$sql ="INSERT INTO booking (concert_id, cust_name, tel_namb, place, email) VALUES ('$concert_id', '$cust_name', '$tel_namb', '$place', '$email')";
	$result=mysqli_query($con, $sql);
	if($result){
		$message = "Successfully Created";
	} else {
		$message = "Failed";
	}
}else {}
?>


<?php

	if(isset($_POST["update"])){
		$cust_name = $_POST['cust_name'];
		$tel_namb = $_POST['tel_namb'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		$place = $_POST['place'];
	$concert_id = $_POST['concert_id'];
		$sql ="UPDATE booking SET cust_name = '$cust_name', tel_namb = '$tel_namb', email = '$email', place = '$place', concert_id = '$concert_id' WHERE id = '$id'";
		mysqli_query($con, $sql);
		
	}else {}

?> 

<?php

	if(isset($_POST["delete"])){
		$id = $_POST['id'];
		$sql = "DELETE FROM booking WHERE `booking`.`id` = '$id'";
		mysqli_query($con, $sql);
		
	}else {}

?> 

<?php include("includes/footer.php"); ?>




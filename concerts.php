<?php include("includes/header.php"); ?>

<?php
$concerts = mysqli_query($con, "SELECT * FROM `concerts`");
$concerts = mysqli_fetch_all($concerts)
?>


<table>
	<tr>
		<th> id </th>
		<th> title </th>
		<th> description </th>
		<th> concert_date </th>
		<th> baseptice </th>
	</tr>
	<?php
	foreach ($concerts as $item) {
		echo '
		<tr>
		<td> '.$item[0].' </td>
		<td> '.$item[1].' </td>
		<td> '.$item[2].' </td>
		<td> '.$item[3].' </td>
		<td> '.$item[4].' </td>
		</tr>
		';
	}   
	?>
</table>


<h1>Концерти</h1>
<form action="concerts.php" method="post">
	<p>ID (для зміни і видалення)</p>
	<input type="text" name="id">
	<p>Назва</p>
	<input type="text" name="title">
	<p>Опис</p>
	<input type="text" name="description" >
	<p>Дата</p>
	<input type="text" name="concert_date" value="yyyy-mm-dd hh:mm:ss">
	<p>Ціна</p>
	<input type="text" name="baseprice" >
	<button type="submit" name= "add">Додати</button>	
	<button type="submit" name= "update">Змінити</button>
	<button type="submit" name= "delete">Видалити</button>
</form>		

<?php
if(isset($_POST["add"])){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$concert_date = $_POST['concert_date'];
	$baseprice = $_POST['baseprice'];
	$sql ="INSERT INTO concerts (title, concert_date, description, baseprice) VALUES ('$title', '$concert_date', '$description', '$baseprice')";
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
		$title = $_POST['title'];
		$concert_date = $_POST['concert_date'];
		$description = $_POST['description'];
		$id = $_POST['id'];
		$baseprice = $_POST['baseprice'];
		$sql ="UPDATE concerts SET title = '$title', concert_date = '$concert_date',baseprice= '$baseprice', description = '$description' WHERE id = '$id'";
		mysqli_query($con, $sql);
		
	}else {}

?> 

<?php

	if(isset($_POST["delete"])){
		$id = $_POST['id'];
		$sql = "DELETE FROM concerts WHERE `concerts`.`id` = '$id'";
		mysqli_query($con, $sql);
		
	}else {}

?> 



<?php include("includes/footer.php"); ?>




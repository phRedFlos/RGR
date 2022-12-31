<?php require_once("includes/connection.php"); ?>
<?php
$booking = mysqli_query($con, "SELECT * FROM `booking`");
$booking = mysqli_fetch_all($booking)
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="css/style1.css" media="screen" rel="stylesheet">
	<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<style>
		html, body{
			height: 100%;
		}
		div.wrapper{
			display: flex;
			flex-direction: column;
			min-height: 100%;
		}
		div.content{
			flex: 1 0 auto;
		}

		footer.footer{
			flex: 0 0 auto;
			background-color: #BDBDBD;
			text-align: center;
			height:40px;

		}

	</style>
</head>
<body>
	<div class="wrapper">

		<div class="content">
			<header class="header">
				<h1>Театр</h1>
			</header>

			<ul >
				<li><a href="home.php">Головна</a></li>
				<li><a href="all.php">Вистави</a></li>
				<li><a href="login.php">Аккаунт</a></li>
				<li><a href="admin.php">Admin</a></li>
			</ul>

			<center><h5 >   </h5></center>
			<div class="container mlogin">
				<center><h2 >Нашi Новинки</h2></center>
				<?php
				$concert1 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '1'");
				$concert1 = mysqli_fetch_assoc($concert1);?>
				<div class="gallery">
					<a target="_blank" href="1.php">
						<img src="1.jpg" alt="Cinque Terre" width="600" height="400">
					</a>
					<div class="desc"><?php echo($concert1["title"]); ?></div>
				</div>
				<?php
				$concert2 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '2'");
				$concert2 = mysqli_fetch_assoc($concert2);?>
				<div class="gallery">
					<a target="_blank" href="2.php">
						<img src="2.jpg" alt="Forest" width="600" height="400">
					</a>
					<div class="desc"><?php echo($concert2["title"]); ?></div>
				</div>
				<?php
				$concert3 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '3'");
				$concert3 = mysqli_fetch_assoc($concert3);?>
				<div class="gallery">
					<a target="_blank" href="3.php">
						<img src="3.jpg" alt="Northern Lights" width="600" height="400">
					</a>
					<div class="desc"><?php echo($concert3["title"]); ?></div>
				</div>
				<?php
				$concert4 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '4'");
				$concert4 = mysqli_fetch_assoc($concert4);?>
				<div class="gallery">
					<a target="_blank" href="4.php">
						<img src="4.png" alt="Mountains" width="600" height="400">
					</a>
					<div class="desc"><?php echo($concert4["title"]); ?></div>
				</div>
			</div>
			<h5></h5>
			<footer class="footer">
				<h4> </h4>
			</footer>
		</div>
	</body>
	</html>
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
		.leftimg {
			float:left; /* Выравнивание по левому краю */
			margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
		}
		.rightimg  {
			float: right; /* Выравнивание по правому краю  */ 
			margin: 7px 0 7px 7px; /* Отступы вокруг картинки */
		}

		.button{
			border: solid 1px #000000;
			background: #404040;
			background: -webkit-gradient(linear, left top, leftbottom, from(#faa51a), to(#f47a20));
			background: -moz-linear-gradient(top,  #faa51a, #f47a20);
			filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
			color: #fff;
			font-size: 22px;
			font-weight: 500;
			font-family: "Source Sans Pro", sans-serif;
			padding: 10px 17px;
			float: left;
			cursor: pointer;
		}

		.button:hover{
			transform: scale(1.1);
			box-shadow: 0px 17px 20px -6px rgba(36, 52, 70, 0.36);
			background: #575757;
			background: -webkit-gradient(linear, left top, leftbottom, from(#f88e11), to(#f06015));
			background: -moz-linear-gradient(top,  #f88e11, #f06015);
			filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
		}
		div.dfg {
			width: 320px;
			padding: 10px;
			border: 0.5px solid #ced6e0;
			box-shadow: 0px 10px 20px -13px rgba(32, 56, 117, 0.35);
			margin: 0;
		}
		div.qq{
			font-size: 16px;
			font-weight: 1000;
			font-family: "Source Sans Pro", sans-serif;
		}
		div.q1{
			font-size: 20px;
			font-weight: 500;
			font-style: italic;
			font-family: "Source Sans Pro", sans-serif;
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
			<center><h2 >Всі Вистави</h2></center>

			<?php
			$concert1 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '1'");
			$concert1 = mysqli_fetch_assoc($concert1);?>

			<div class="gallery1">
				<a target="_blank" href="1.php">
					<img src="1.jpg" alt="Cinque Terre" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert1["title"]); ?></div>
			</div>
			<?php
			$concert2 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '2'");
			$concert2 = mysqli_fetch_assoc($concert2);?>
			<div class="gallery1">
				<a target="_blank" href="2.php">
					<img src="2.jpg" alt="Forest" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert2["title"]); ?></div>
			</div>
			<?php
			$concert3 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '3'");
			$concert3 = mysqli_fetch_assoc($concert3);?>
			<div class="gallery1">
				<a target="_blank" href="3.php">
					<img src="3.jpg" alt="Northern Lights" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert3["title"]); ?></div>
			</div>
			<?php
			$concert4 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '4'");
			$concert4 = mysqli_fetch_assoc($concert4);?>
			<div class="gallery1">
				<a target="_blank" href="4.php">
					<img src="4.png" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert4["title"]); ?></div>
			</div>
			<?php
			$concert5 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '5'");
			$concert5 = mysqli_fetch_assoc($concert5);?>
			<div class="gallery1">
				<a target="_blank" href="5.php">
					<img src="5.png" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert5["title"]); ?></div>
			</div>
			<?php
			$concert6 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '6'");
			$concert6 = mysqli_fetch_assoc($concert6);?>
			<div class="gallery1">
				<a target="_blank" href="6.php">
					<img src="6.png" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert6["title"]); ?></div>
			</div>
			<?php
			$concert7 = mysqli_query($con, "SELECT title FROM concerts WHERE id = '7'");
			$concert7 = mysqli_fetch_assoc($concert7);?>
			<div class="gallery1">
				<a target="_blank" href="7.php">
					<img src="7.png" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc"><?php echo($concert7["title"]); ?></div>
			</div>

		</div>
		<h5></h5>
		<footer class="footer">
			<h4> </h4>
		</footer>
	</div>
</body>
</html>
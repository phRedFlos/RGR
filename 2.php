
<?php require_once("includes/connection.php"); ?>
<?php
$concerts = mysqli_query($con, "SELECT * FROM `concerts`");
$concerts = mysqli_fetch_all($concerts)
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
 text-decoration: none;
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

.dqq {
  width: 1050px;
  padding: 10px;
  border: 0.5px solid #ced6e0;
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


</style>
</head>
<body>

	<div class="header">
  <h1>Театр</h1>
</div>

	<ul >
  <li><a href="home.php">Головна</a></li>
  <li><a href="all.php">Вистави</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>

<?php
$concert = mysqli_query($con, "SELECT title FROM concerts WHERE id = '2'");
$concert = mysqli_fetch_assoc($concert);

$condesc = mysqli_query($con, "SELECT description FROM concerts WHERE id = '2'");
$condesc = mysqli_fetch_assoc($condesc);

$condate = mysqli_query($con, "SELECT concert_date FROM concerts WHERE id = '2'");
$condate = mysqli_fetch_assoc($condate);

$conprice = mysqli_query($con, "SELECT baseprice FROM concerts WHERE id = '2'");
$conprice = mysqli_fetch_assoc($conprice);
?>

<h1><?php echo($concert["title"]); ?> </h1>
  <p ><img  width = 600 px height= auto src="21.jpg" class="rightimg">
    <p class="dqq" align="justify">
   <?php echo($condesc["description"]); ?> 
   </p>
 </p>


<div class="dfg" > <div class="qq" > Дата: </div> 
<div class="q1"> <?php echo($condate["concert_date"]); ?> </div>
 <div class="qq" > Ціна:</div>
 <div class="q1" > <?php echo($conprice["baseprice"]); ?></div> 
 <a type="submit" class="button" href="booking.php?concert_id=2">Замовити квиток</a></div>

<div class="footer">
  <h4> </h4>
</div>

</body>
</html>
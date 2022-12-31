
<?php require_once("includes/connection.php"); ?>
<?php

$concert_id = $_GET['concert_id'];
$cust_name = $_GET['name'];

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
  background:  #fff;
  margin: 170px auto 0;
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

body {
   background: #BDBDBD;
   font-family: 'Open Sans', sans-serif;
   
	}
.aaa{
	color: #777;
	text-align: center;
	font-weight: 300;
   border: 1px dashed #777;
   margin-top: 13px;
}

</style>
</head>
<body>

<?php
$concert = mysqli_query($con, "SELECT title FROM concerts WHERE id = '$concert_id'");
$concert = mysqli_fetch_assoc($concert);

$condate = mysqli_query($con, "SELECT concert_date FROM concerts WHERE id = '$concert_id'");
$condate = mysqli_fetch_assoc($condate);

$conprice = mysqli_query($con, "SELECT baseprice FROM concerts WHERE id = '$concert_id'");
$conprice = mysqli_fetch_assoc($conprice);




$name = mysqli_query($con, "SELECT place FROM booking WHERE cust_name = '$cust_name'");
$name = mysqli_fetch_assoc($name); ?>

<div class="dfg" > 
<h1 class="aaa" >Квиток </h1>
<div class="qq" > Назва: </div> 
<div class="q1"> <?php echo($concert["title"]); ?> </div>

<div class="qq" > Дата/Час:</div>
<div class="q1" > <?php echo($condate["concert_date"]); ?></div> 

<div class="qq" > Ціна: </div> 
<div class="q1"> <?php echo($conprice["baseprice"]); ?></div>

<div class="qq" > Номер місця:</div>
<div class="q1" > <?php echo($name["place"]); ?></div> 

<div class="qq" > Ім'я: </div> 
<div class="q1"> <?php echo($cust_name); ?> </div>
<div class="q1"> ......................................................... </div>
</div>


</body>
</html>
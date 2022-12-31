<?php include("includes/header.php"); ?>

<?php
$booking = mysqli_query($con, "SELECT * FROM `booking`");
$booking = mysqli_fetch_all($booking);
$concert_id = $_GET['concert_id'];
?>
	<style>
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
</style>

<div class="container mregister">
  <div id="login">
    <h1>Бронювання</h1>
    <form action="booking.php?concert_id=<?=$concert_id?>" id="registerform" method="post"name="registerform">
      <p><label for="user_login">Повне ім'я<br>
        <input class="input" id="cust_name" name="cust_name"size="32"  type="text" value="" required></label></p>
        <p><label for="user_pass">E-mail<br>
          <input class="input" id="email" name="email" size="32"type="email" value="" required></label></p>
          <p><label for="user_pass">Номер телефону<br>
            <input class="input" id="tel_namb" name="tel_namb"size="20" type="text" value="" required ></label></p>
            <p><label for="user_pass">Номер місця<br>
              <input class="input" id="place" name="place"size="32"   type="text" value="" required></label></p>
              <button type="submit" class="button" name= "add">Додати</button> 
<?php

if(isset($_POST["add"])){
$concert_id = $_GET['concert_id'];
$cust_name = $_POST['cust_name'];
$email = $_POST['email'];
$tel_namb = $_POST['tel_namb'];
$place = $_POST['place'];
$sql ="INSERT INTO booking ( cust_name,concert_id,  place,tel_namb, email) VALUES ( '$cust_name', '$concert_id','$place', '$tel_namb',  '$email')";
$result=mysqli_query($con, $sql);
  if($result){
    print("Успішно! Перейдіть до сплати.") ;
    ?> <div> <a type="submit" class="button" href="payy.php?concert_id=<?= $concert_id?> &name=<?=$cust_name?>">Оплатити</a></div>     <?php
  } else {
    print("Failed");
  }

}else {}
?>
            </form>
          </div>
        </div>


<?php include("includes/footer.php"); ?>
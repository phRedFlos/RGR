
<?php include("includes/header.php"); ?>
<?php 
$concert_id = $_GET['concert_id'];
$cust_name = $_GET['name'];
 ?>

<div class="container mregister">
  <div id="login">
    <h1>Оплата</h1>
    <form action="payy.php?concert_id=<?= $concert_id?>&name=<?=$cust_name?>" id="registerform" method="post"name="registerform">
      <p><label for="user_login">Номер карти<br>
        <input class="input" id="full_name" name="number"size="32"  type="text" value="" required></label></p>
          <p><label for="user_pass">Термін дії<br>
            <input class="input" id="username" name="date"size="20" type="text" value="MM/PP" required></label></p>
            <p><label for="user_pass">СVV<br>
              <input class="input" id="password" name="CVV"size="32"   type="password" value="" required></label></p>
              <p class="submit"><input class="button" id="register" name= "add" type="submit" value="Підвердити"></p>
<?php include("includes/footer.php"); ?>

<?php 
if(isset($_POST["add"])){
$number = $_POST['number'];
$date = $_POST['date'];
$CVV = $_POST['CVV'];

  if(strlen($number)== 16 && strlen($CVV)==3 && strlen($date)==5 ){
    print("Успішно! Отримайте квиток.") ;
    ?>  <a type="submit" class="button" href="ticket.php?concert_id=<?= $concert_id?>&name=<?=$cust_name?>">Отримати</a></div>     <?php
  } else {
    print("Помилка, спробуйте ще раз!");
  }
  }else {}
 ?> 
            </form>
          </div>
        </div>

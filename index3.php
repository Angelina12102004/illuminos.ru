<?php
	session_start();
	include "connect.php";

	$sql = "SELECT * FROM `products` WHERE `count` > 0 ORDER BY `created_at` DESC LIMIT 5";
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

	$data = "";
	while($row = $result->fetch_assoc())
		$data .= sprintf('
			<div class="slide col">
				<img src="%s" alt="" />
				<h3><a href="product.php?id=%s">%s</a></h3>
			</div>
		', $row["path"], $row["product_id"], $row["name"]);

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>фильмы</title>
	<link rel="stylesheet" href="style.css">
	<script src=" scripts/filter.js"></script>
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
</head>
<body>

<div class="obsh"|>
<div class="tar_blok" >
          <div class="tar_blok_mini" >
            
      <img src="./images/basic.png" alt=" ">
      <button><a href="./basic.php">basic</a></button>
          </div>  
          
          <div class="tar_blok_mini" >
            <img src="./images/premium.png" alt=" ">
            <button><a href="./premium.php">premium </a></button>
                </div>  
                
          <div class="tar_blok_mini" >
            <img src="./images/VIP.png" alt=" ">
            <button><a href="./VIP.php">VIP </a> </button>
                </div>    
         </div>
         <div>
  <!-- 
  <div class="obsh">
 <div class="tarif">
  <div class="basic">
 <img src="./images/basic.png" alt="" >
     <button>basic</button>
  <div> 
  <div class="premium">
  <img src="./images/premium.png" alt="" >
     <button>premium</button>
  <div> 

  <div class="VIP"> 
     <img src="./images/VIP.png" alt="" >
     <button>VIP</button>
  <div> 
    <div>
<div>
  <div> -->
	<script src="scripts/slider.js"></script>
	<div class="footer">
      <div class="footer_menu">
        <div class="footer_menu1">
          <li>
            <a href="">about us</a>
          </li>
          <li>
            <a href="">blog </a>     
          </li>
          <li>
            <a href="">returns</a>
          </li>
          <li>
            <a href="">order status </a>
          </li>
</div>

<div class="footer_menu2">   
  <li>
    <a href="">How it works?</a>
  </li>
  <li>
    <a href="">our promises </a>     
  </li>
  <li>
    <a href="">FAQ</a>
  </li>
</div>

<div class="footer_menu3">
  <li>
    <a href="">дружба 12 </a>
  </li>
  <li>
    <a href="">+7 937 47 57 127</a>     
  </li>
  <li>
    <a href="">a12102004@yandex.ru</a>
  </li>
</div>

<div class="footer_icons"> 
  <li>
    <a href=""> 
      <img src="./images/Facebook.png" alt=""> </a>
  </li>
  <li>
    <a href="">  <img src="./images/Instagram.png" alt=""></a>     
  </li>
  <li>
    <a href="">  <img src="./images/twitter.png" alt=""></a>
  </li>
    <li>
    <a href="">  <img src="./images/Youtube.png" alt=""></a>
  </li>
</div>
      </div>
      <div class="footer_logo">
 <button>find a movie </button>

        
      </div>

		<body>
		

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/app.js"></script>
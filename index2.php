
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
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>магазин</title>
</head>
<body>
 <div class="kabinka">

 <div class="footer_logo">
 <button> <a href="./index3.php"> Выбрать тариф </a></button>

        
      </div>
    <div class="intro" id="intro">
    </div><!-- /.intro -->
<BR><br><BR><br><BR><br>
   <!-- блок с личной инфой -->
<h2 class="section__tite">Личная информация</h2>
<div class="d2"> 
<div class="d1"></div>
<div class="d3"> <h3 class="section__tite">Имя:</h3>
Ангелина
<h3 class="section__tite">Пол:</h3>
Зверева
<h3 class="section__tite">E-mail:</h3>
a12102004@yandex.ru</div>
</div>
<div class="movies"> 
История просмотра 
        </div>
<div class="movies_foto"> 
          <img src="./images/1.png" alt="">
          <img src="./images/2.png" alt="">
          <img src="./images/3.png" alt="">
          <img src="./images/4.png" alt="">
          <img src="./images/5.png" alt="">
          <img src="./images/6.png" alt="">

                  </div>

                  <div class="movies"> 
 Сохранённое:
        </div>
<div class="movies_foto"> 
         
          <img src="./images/4.png" alt="">
          <img src="./images/1.png" alt="">
          <img src="./images/2.png" alt=""> 
          <img src="./images/5.png" alt="">
          <img src="./images/6.png" alt=""> 
          <img src="./images/3.png" alt="">

                  </div>

    <!-- подвал сайта -->
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
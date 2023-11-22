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
	<title>комп s</title>
	<link rel="stylesheet" href="style.css">
	<script src=" scripts/filter.js"></script>
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
</head>
<body>
  <div class="obsh">
  <!--   блоки -->

  <div class="blok">
  <div class="Illuminos">
    <h1> Illuminos  </h1>
    <h2> Soviet cinema: eternity in every frame!  </h2>
    <button> <a href="./catalog.php">watch a movie </a></button>
  </div>
  <div class="Illuminos2">
  <img src="./images/image1.png">
  </div>
 </div>
  <div class="best_glav" >
      the best soviet films
     </div>
    <div class="best">
      <div class="best_foto"> 
<img src="./images/image2.png" alt="">

      </div>

 <div class="best_text"> 
  <h1>Spring on Zarechnaya Street
  (1956) </h1>
  <h2>
    Love for an evening school teacher transforms a steelworker drummer. Musical classics by Marlena Khutsieva
  </h2>
  <button> <a href="./catalog.php">watch a movie </a></button>
      </div>
      </div>
      <div class="best2">
   <div class="best_text2"> 
    <h1>Ladies invite gentlemen</h1>
    <h2>
      The calling card of director Vladimir Menshov, “Moscow Doesn’t Believe in Tears,” became the third Soviet film to receive an Oscar film award.    </h2>
      <button> <a href="./catalog.php">watch a movie </a></button>
        </div><div class="best_foto2"> 
  <img src="./images/image3.png">
  
        </div>
        </div>
        <div class="movie" >
          movie categories
         </div>

         <div class="movie_blok" >
          <div class="movie_blok_mini" >
      <img src="./images/dramas.png" alt=" ">
      <button>dramas</button>
          </div>  
          
          <div class="movie_blok_mini" >
            <img src="./images/comedy.png" alt=" ">
            <button>comedy</button>
                </div>  
                
          <div class="movie_blok_mini" >
            <img src="./images/horror.png" alt=" ">
            <button>horror</button>
                </div>    
         </div>    
         
        <div class="movies"> 
movies for you
        </div>

        <div class="movies_foto"> 
          <img src="./images/1.png" alt="">
          <img src="./images/2.png" alt="">
          <img src="./images/3.png" alt="">
          <img src="./images/4.png" alt="">
          <img src="./images/5.png" alt="">
          <img src="./images/6.png" alt="">

                  </div>


<div class="poisk">
    <p>поиск сериала </p> 
    <form  method="post" action="search.php?go"  id="searchform"> 
      <input  type="text" name="name"> 
      <input  type="submit" name="submit" value="Search"> 
    </form> 
	</div> </div>
  <!--    подвал -->

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
      <button> <a href="./catalog.php">watch a movie </a></button>

        
      </div>

		<body>
		

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/app.js"></script>
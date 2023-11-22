<?php
	session_start();
	include "connect.php";

	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";

	$sql = "SELECT * FROM `categories`";
	$result = $connect->query($sql);
	$categories = "";
	while($row = $result->fetch_assoc())
		$categories .= sprintf('<option value="%s">%s</option>', $row["category"], $row["category"]);

	$sql = "SELECT * FROM `products` WHERE `count` > 0 ORDER BY `created_at` DESC";
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

	$data = "";
	while($row = $result->fetch_assoc())
		$data .= sprintf('  
			<div class="col">
				<img src="%s" alt="">
				<div class="row">
					<h3><a href="product.php?id=%s">%s</a></h3>
					<p>%s</p>
					<input type="hidden" value="%s" name="product_id">
					<input type="hidden" value="%s" name="year">
					<input type="hidden" value="%s" name="category">
				</div>
				%s
				%s
			</div>
		', $row["path"], $row["product_id"], $row["name"], $row["price"], $row["product_id"], $row["year"], $row["category"],
		($role == "admin") ? '
			<div class="row">
				<p><a href="update.php?id='.$row["product_id"].'" class="text-small">Редактировать</a></p>
				<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="controllers/delete_product.php?id='.$row["product_id"].'" class="text-small">Удалить</a></p>
			</div>
		' : '',
		($role != "guest") ? '<p class="text-right"><a href="controllers/add_cart.php?id='. $row["product_id"] .'" class="text-small">В корзину</a></p>' : '');

	if($data == "")
		$data = '<h3 class="text-center">Товары отсутствуют</h3>';

	include "header.php";
?>
	<main>
		<div class="obsh">
	<div class="blok">
  <div class="film">
    <h1> serials  </h1>
    <h2>“Soviet series are inspiration and passion that will transform your life into an unforgettable adventure!” </h2>
    <button>main</button>
  </div>
  <div class="film2">
  <img src="./images/image64.png">
  </div>
 </div>
		<div class="content">

			<div class="head" style="margin-bottom: 20px">Товары</div>
			<div class="row" style="margin-bottom: 20px">
			<div class="fil" >
				<select id="category" onchange="filter.filter('category', 'filter')">
					<option value disabled selected>Фильтрация по категориям</option>
					<?= $categories ?>
				</select></div>
			</div>

			<div class="row" id="products">
				<?= $data ?>
			</div>

		</div>
		<div>
	</main>

	<script>filter.products()</script>
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
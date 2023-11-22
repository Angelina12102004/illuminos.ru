<?php
	session_start();
	include "connect.php";
	
	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";
	$id = (isset($_GET["id"])) ? $_GET["id"] : 0;

	$sql = "SELECT * FROM `products` WHERE `count` > 0 AND `product_id`=". $id;
	if(!$result = $connect->query($sql))
		return die ("Ошибка получения данных: ". $connect->error);

	if(!$product = $result->fetch_assoc())
		return header("Location:index.php?message=Товар отсутствует");

	include "header.php";
?>

	<main>
		<div class="content">
		<div class="section__header">
		<div class="head" style="margin-bottom: 20px">О Проекте</div>
            </div>
			<div class="head"></div>
			<div class="product wrap">
				<div class="image">
					<img src="<?= $product["path"] ?>" alt="">
				  </div>
				<div class="text">
					<h3>Характеристики:</h3><br>
					<p>Название: <b><?= $product["name"] ?></b></p>
					<p>Описание: <b><?= $product["country"] ?></b></p>
          <p>Категория:<b><?= $product["category"] ?></b></p>
          <p>Режесер: <b><?= $product["model"] ?></b></p>
					<BR><BR><BR><BR>
					<div class="row">
						<h5>Оценка:</h5>
						<h5><?= $product["price"] ?></h5>
					</div>
          <div class="foto_tr">
            <img src="./images/foto_tr.png" alt="" >
</div>
        
					<?php
						if($role == "admin")
							echo '
								<div class="row">
									<p><a href="update.php?id='.$product["product_id"].'" class="text-small">Редактировать</a></p>
									<p><a onclick="return confirm(\'Вы действительно хотите удалить этот товар?\')" href="controllers/delete_product.php?id='.$product["product_id"].'" class="text-small">Удалить</a></p>
								</div>
							';

						if($role != "guest")
							echo '<a href="controllers/add_cart.php?id='. $product["product_id"] .'" ><div class="pr"><button>Купить</button></div></div>';
					?>
				</div>
			</div>

		</div>
	</main>
	

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
		
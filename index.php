<?php 
	require_once 'inc/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Каталог станций "Домотек"</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
	<style>
	<?php echo file_get_contents("css/style.css"); ?>
	</style>
</head>

<body>

<!--Меню-->
<nav class="navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Домотек</a>
    <ul class="nav nav-pills">
  		<li class="nav-item">
    	<a class="nav-link" href="#">Каталог</a>
  		</li>
  		<li class="nav-item">
   		<a class="nav-link" href="#status">Статус заказа</a>
  		</li>
  		<li class="nav-item">
   		<a class="nav-link" href="#contats">Контакты</a>
  		</li>
	</ul>
</nav>


<!--1 этаж: Товары -->
<section id="products" class="products">
	<p id="products" class="display-3">Каталог станций</p>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/Unilos_Astra_3.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Юнилос Астра 3</h5>
						<p class="card-text">Юнилос Астра 3 - локальное очистное сооружение, которое оптимально подойдёт для загородных домов. Данная система с 1 компрессором и электромагнитным клапаном</p>
						<p class="price text-danger">77900 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="77900" data-product="Юнилос Астра 3">Купить</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/Topas_5.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Топас 5</h5>
						<p class="card-text">Топас 5 - локальное очистное сооружение, которое оптимально подойдёт для загородных домов. Данная система не требует вызова ассенизационной машины</p>
						<p class="price text-danger">98300 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="98300" data-product="Топас 5">Купить</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/Ergobox_3.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Ergobox 3</h5>
						<p class="card-text">Ergobox 3 - жесткий бесшовный корпус станции биологической очистки гарантирует максимальную прочность и исключает деформацию даже при высоком уровне грунтовых вод.</p>
						<p class="price text-danger">58900 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="58900" data-product="Ergobox 3">Купить</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/KoloVesi_3.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Kolo Vesi 3</h5>
						<p class="card-text">Станция Kolo Vesi 3 предназначена для очистки хозяйственно-бытовых сточных вод, поступающих от пользователей. Подключение фановой трубы осуществляется на глубине до 600 мм от поверхности грунта.</p>
						<p class="price text-danger">133900 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="133900" data-product="Kolo Vesi 3">Купить</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/BioDeka_3.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">BioDeka 3</h5>
						<p class="card-text">Установка BioDeka 3 создана для переработки сточной воды при постоянном проживании от 3 до 150 человек (в зависимости от модели установки). Комплектуются аварийной сигнализацией.</p>
						<p class="price text-danger">78100 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="78100" data-product="BioDeka 3">Купить</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src='img/Termit_1.png' alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Термит-Профи 1,2</h5>
						<p class="card-text">Термит Профи 1,2 септик с почвенной доочисткой, все септики линейки профи - энергонезависимые, что делает их идеальным решением если в регионе проживания отсутствует стабильная электроэнергия. </p>
						<p class="price text-danger">23900 РУБ</p>
						<a href="#" class="btn btn-primary buy" data-price="23900" data-product="Термит-Профи 1,2">Купить</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--2 этаж: Статус заказа-->
<section id="status" class="floor2_status">
	<h2>Статус заказа</h2>
	<p>После консультации нашего менеджера Вы получили номер заказа, состоящий из цифр? Здесь Вы можете проверить статус заказа.</p>
	<!--Форма для проверки статуса заказа-->
		<form class="input_order" action="" method="GET">
		<input type="text" name="order_id" placeholder="15...">
		<button type="submit">Проверить</button>
		</form>
		<!-- Вывод статуса заказа -->
		<?php 
  			$server = "localhost";
			$login = "root";
			$pass = "";
			$name_db = "payment";

			$link = mysqli_connect($server, $login, $pass, $name_db);

			if ($link == False)
			{
				echo "Соединение не удалось";
			}
		?>
		<h2>Введите номер заказа
			<!-- <?php
			if(isset($_GET['order_id']))
			{
				$order_id = $_GET['order_id'];
				$results = mysqli_query($link,"SELECT * FROM order_status WHERE order_id = ". (int) $order_id);

				if (mysqli_num_rows($results) > 0)
				{
    				while($zakaz = mysqli_fetch_assoc($results))
    				{
        				echo $zakaz['status'];
    				}
				} else {
    				echo "Номер заказа введен некорректно. <br/>";
					echo "Если у вас есть вопросы, обращайтесь по телефону: +7 (347) 246 56 76";
				}
			} else
    			echo "Введите номер заказа"
  		?> -->
		</h2>
	<hr class="line">
</section>

<!--Модальное окно-->
<div class="modal fade" id="cart">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление заказа</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    	<div class="modal-body">
        	<form id="buy" action="telegram.php" method="post">
  				<div class="form-group">
    				<label for="name">Ваше имя</label>
    				<input type="name" name="name" class="form-control" id="name" placeholder="Введите Ваше имя" required="">
  	  			</div>
  				<div class="form-group">
    				<label for="phone">Номер телефона</label>
    				<input type="tel" name="phone" class="form-control" id="phone" placeholder="Введите номер телефона" required="">
  	  			</div>
  	  			<div class="form-group">
    				<label for="product">Выбранный товар</label>
    				<input type="text" name="product" class="form-control" id="product" readonly>
  	  			</div>
  	  			<div class="form-group">
    				<label for="price">Цена</label>
    				<input type="text" name="price" class="form-control" id="price" readonly>
  	  			</div>
  				<button type="submit" class="btn btn-primary" data-toggle="modal">Оформить заказ</button>
			</form>
    	</div>
    </div>
  </div>
</div>

<!--Футер-->

<div class="bottom">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-3">
      <h5 class="text-white h4">Телефон</h5>
      <p class="text-white">+7 (347) 258-81-75</p>
      <h5 class="text-white h4">Офис отдела продаж</h5>
      <p class="text-white">450078, г. Уфа, ул. Губайдулина 19 офис 105</p>
    </div>
  </div>
</div>
<nav class="navbar bottom navbar-dark bg-dark">
  <a id="contats" class="navbar-brand">Контакты</a>
    <form class="form-inline">
    	<button class="btn btn-outline-success navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
      	Связь с нами
    	</button>
  	</form>
</nav>

<!-- Copyright 
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Домотек
  </div>
   Copyright -->


<!--Скрипты-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>
</html>
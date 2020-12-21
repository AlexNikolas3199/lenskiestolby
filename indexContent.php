<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="theme-color" content="#306F9A" >
	<title>Ленский край</title>
 	<link rel="shortcut icon" href="logo1.png" type="image/png">
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
	<header>
		<div class="flex_center">
			<a href="index.php">
				<img class="logo" src="logo.png" alt="">
			</a>
			<nav>
				<a href="index.php">Главная</a>
				<a href="news.php">Новости</a>
				<a href="mapPage.php">Карта</a>
				<a href="travel.php">Объекты</a>
			</nav>
		</div>
		<div class="flex_center">
			<a href="#">Закладки</a>
			<img src="bookmark.png" alt="">
		</div>
		<div class="navButton">
			<div class="stick"></div>
			<div class="stick"></div>
			<div class="stick"></div>
		</div>
	</header>

	<div class="mobaNav goup">
			<a href="index.php">Главная</a>
			<a href="news.php">Новости</a>
			<a href="mapPage.php">Карта</a>
			<a href="travel.php">Объекты</a>
			<a href="#">Закладки</a>
	</div>
	<section class="firstsection">
		<div class="firstText">
			<h1>Ленские столбы — один из самых красивых мест в России</h1>
			<hr>
			<h2>Увидев их впервые, поражаешься их суровой и величественной красоте. Находится это чудо природы в одноименном природном парке Республики Саха (Якутия). Потрясающие скалы высотой от сорока до ста метров становятся все загадочнее и красивее с каждым годом благодаря особенностям местного климата.</h2>
		</div>
	</section>
	<main style="padding-top:0">
		<div class="aboutPlace">
			<div class="content">
				<h3><?=$title?></h3>
				<?=$text?>
				<div class="link">
					<a href="<?=$link?>">Открыть</a>
				</div>
			</div>
			<img src="ghost.png" alt="" class="ghost">
		</div>
	</main>
	<section>
		<div class="flex_center youtube">
			<iframe class='youtube' width="560" height="315" src="https://www.youtube.com/embed/rVJwmh6BO7c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</section>
	<section>	
		<div class="places">
			<h3>Места</h3>
			<div class="flex_center">
				<a href="mapPage.php" class="placeCard">
					<img src="Places.png" alt="">
					<p>Места</p>
				</a>
				<a href="mapPage.php" class="placeCard">
					<img src="Relax.png" alt="">
					<p>Отдых</p>
				</a>
				<a href="mapPage.php" class="placeCard">
					<img src="Bases.png" alt="">
					<p>Базы</p>
				</a>
				<a href="mapPage.php" class="placeCard">
					<img src="Routes.png" alt="">
					<p>Маршруты</p>
				</a>
			</div>
		</div>
	</section>
	<section>
		<div class="appsection">
			<p>Скачайте приложение!</p>
			<img src="goggleplay.png" alt="">
		</div>
	</section>
	<footer>
		<a href="index.php">
			<img class="logo" src="logo.png" alt="">
		</a>
		<nav>
			<a href="#">Поддержка</a>
			<a href="#">Конфиденциальность</a>
			<a href="#">Контакты</a>
		</nav>
	</footer>
	<script src="scroll-out.js"></script>
	<script>
		ScrollOut({
			targets: 'header ,.aboutPlace , .ghost , .link'
		})
		var btn = document.querySelector('.navButton')
		var nav = document.querySelector('.mobaNav')

		btn.onclick = function(){
			if(nav.classList.contains('goup')){
				nav.classList.remove('goup');
			}else{
				nav.classList.add('goup');
			}
		}
	</script>
</body>
</html>
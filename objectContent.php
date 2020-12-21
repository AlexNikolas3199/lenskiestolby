<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ленский край</title>
 	<link rel="shortcut icon" href="logo1.png" type="image/png">
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
	<header>
		<div class="flex_center">
			<a href="index.php">
				<img class="logo"src="logo.png" alt="">
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
	<main>
		<div style="width:40%" class="aboutPlace">
			<div class="content">
				<h3><?=$title?></h3>
				<?=$text?>
			</div>
		</div>
		<img src="<?=$img?>" alt="">
	</main>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="logo1.png" type="image/png">
	<title>Ленский край</title>
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
			<a href="index.html">Главная</a>
			<a href="news.php">Новости</a>
			<a href="mapPage.php">Карта</a>
			<a href="travel.php">Объекты</a>
			<a href="#">Закладки</a>
	</div>
	<main>
		<div style="flex-wrap: wrap;" class="flex_center">
		<a href="object.php?id=4"class="objectCard" style="background:linear-gradient(0deg,rgba(48,111,154, 0.8),rgba(0,0,0,0.4)40%),url(stolby.jpg);background-size:cover;background-position:center">
			<h3>Экологическая тропа “Ленские столбы”</h3>
			<hr>
			<p>Ленские столбы – обрывистые скалы высотой 100-300 метров – рельеф уникальной формы, в котором сочетаются природные особенности известняков, а также геологические процессы.
				</p>
		</a>
		<a href="object.php?id=3"class="objectCard" style="background:linear-gradient(0deg,rgba(48,111,154, 0.8),rgba(0,0,0,0.4)40%),url(tuculany.jpg);background-size:cover;background-position:center">
			<h3>Экологическая тропа “Тукулан Кысыл-Элэсин”</h3>
			<hr>
			<p>Только на средней Лене, в том числе на территории парка и ниже, встречается ландшафт развивающихся песков-тукуланов с элементами холодной северной пустыни.
				</p>
		</a>
		<a href="object.php?id=1"class="objectCard" style="background:linear-gradient(0deg,rgba(48,111,154, 0.8),rgba(0,0,0,0.4)40%),url(diring.jpg);background-size:cover;background-position:center">
			<h3>Экологическая тропа “Диринг-Юрях”</h3>
			<hr>
			<p>Диринг-Юрях (Глубокий ручей) – один из уникальных археологических памятников, находящихся на территории Национального парка «Ленские столбы».
				</p>
		</a>
		<a href="object.php?id=2"class="objectCard" style="background:linear-gradient(0deg,rgba(48,111,154, 0.8),rgba(0,0,0,0.4)40%),url(buotama.jpg);background-size:cover;background-position:center">
			<h3>Экологическая тропа “Пернатый мир Буотама”</h3>
			<hr>
			<p>Река Буотама – правый приток реки Лена – образует живописную долину с крутыми и отвесными склонами, изобилующими причудливыми скалами – столбами.
				</p>
		</a>
	</div>
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
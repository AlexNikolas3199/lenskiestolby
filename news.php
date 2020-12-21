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
		<div class="black dispNon"></div>
		<div class="opendNew dispNon">
			<div class="content">
				<div class="instaimg">
					<img src="" alt="">
				</div>
				<div class="instapost">
					<h3>Природный Парк Ленские Столбы</h3>
					<p class="insttext"></p>
				</div>
			</div>
		</div>
		<div class="cross dispNon">
			<img src="cross.png" alt="">
		</div>
		<div class="firstText inst">
			<h1>Новости</h1>
			<hr>
			<div class="flex_center_inst">
			</div>
		</div>
	</section>
	<script src="scroll-out.js"></script>
	<script>
		ScrollOut({
			targets: 'header'
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
// Кроссбраузерно создаём объект запроса
cross
var cross=document.querySelector('.cross');
var opendNew=document.querySelector('.opendNew');
var black=document.querySelector('.black');
var body=document.querySelector('body');
var instCont=document.querySelector('.flex_center_inst');
var insttext=document.querySelector('.insttext');
var instaimg=document.querySelector('.instaimg img');
var req = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject( 'Microsoft.XMLHTTP' );
// Открываем соединение
req.open( 'GET', 'https://lensk.herokuapp.com/news', true );
// Вешаем на объект запроса обработчик события readystatechange
req.onreadystatechange = function () {
	// readyState — это состояние запроса. Если он равен 4 (запрос выполнен), то…
	if ( req.readyState == 4 ) {
		// Проверяем, успешно ли выполнена загрузка документа
		if ( req.status == 200 ) {
			var allobject =JSON.parse(req.responseText)
			console.log(allobject);
			// Если да, то парсим текст ответа в DOM
			for(var i=0;i<allobject.medias.length;i++){
			let objectinsta =allobject.medias[i].avatar;
			var article =document.createElement('div');
			article.classList.add('instarticle');
			instCont.appendChild(article)
			var node = document.createElement('img');
			node.src = objectinsta;
			article.appendChild(node);
			}
			console.log(instCont.children);
			for(let j=0;j<instCont.children.length;j++){
				console.log(instCont.children[j]);
			instCont.children[j].onclick = function(){
			insttext.textContent=allobject.medias[j].text ;
			instaimg.src=allobject.medias[j].avatar ;
			console.log('faf')
			body.classList.add('over');
			opendNew.classList.remove('dispNon');
			black.classList.remove('dispNon');
			cross.classList.remove('dispNon')
			};	
		}
		cross.onclick = function(){
			opendNew.classList.add('dispNon');
			black.classList.add('dispNon');
			cross.classList.add('dispNon');
			body.classList.remove('over')
		}

		}
	}
};
// Отсылаем запрос
				
req.send( null );


	</script>
</body>
</html>
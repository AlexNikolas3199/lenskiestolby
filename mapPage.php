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
	<script type="text/javascript">
    let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
	  let vh = window.innerHeight * 0.01;
	  document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
	</script>
	<header>
		<div class="flex_center">
			<a href="index.php">
				<img class="logo"src="logo.png" alt="">
			</a>
			<nav>
				<a href="index.php">Главная</a>
				<a href="news.php">Новости</a>
				<a href="mapPage.php">Map</a>
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
			<a href="#">Новости</a>
			<a href="mapPage.php">Карта</a>
			<a href="travel.php">Объекты</a>
			<a href="#">Заклдки</a>
	</div>
	<div class="formButton">Иконки</div>
	<form action=""name="test" class="checkboxes goleft">
		<label for="0">
			<input id="0" name="filter" onclick="doSomething()" value='dangerzone' type="checkbox">
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Danger</div>
		</label>
		<label for="1">
			<input id="1"checked=true name="filter" onclick="doSomething()" value='bison' type="checkbox">
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Bison</div>
		</label>
		<label for="2">
			<input id="2" type="checkbox" checked=true name="filter" onclick="doSomething()" value='lookout'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Lookout</div>
		</label>
		<label for="3">
			<input id="3" type="checkbox" checked=true name="filter" onclick="doSomething()" value='hut'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Bases</div>
		</label>
		<label for="4">
			<input id="4" type="checkbox" checked=true name="filter" onclick="doSomething()" value='sand'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Sand</div>
		</label>
		<label for="5">
			<input id="5" type="checkbox" checked=true name="filter" onclick="doSomething()" value='toilet'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Toilet</div>
		</label>
		<label for="6">
			<input id="6" type="checkbox" checked=true name="filter" onclick="doSomething()" value='canopy'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Canopy</div>
		</label>
		<label for="7">
			<input id="7" type="checkbox" checked=true name="filter" onclick="doSomething()" value='shower'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Shower</div>
		</label>
		<label for="8">
			<input id="8" type="checkbox" checked=true name="filter" onclick="doSomething()" value='wash'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Wash</div>
		</label>
		<label for="9">
			<input id="9" type="checkbox" checked=true name="filter" onclick="doSomething()" value='guide'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Guide</div>
		</label>
		<label for="10">
			<input id="10" type="checkbox" checked=true name="filter" onclick="doSomething()" value='people'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">People</div>
		</label>
		<label for="11">
			<input id="11" type="checkbox" checked=true name="filter" onclick="doSomething()"value='inspector'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Inspector</div>
		</label>
		<label for="12">
			<input id="12" type="checkbox" checked=true name="filter" onclick="doSomething()"value='stairs'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Stairs</div>
		</label>
		<label for="13">
			<input id="13" type="checkbox" checked=true name="filter" onclick="doSomething()"value='parking'>
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Parking</div>
		</label>
		<label for="14">
			<input id="14" type="checkbox" checked=true name="filter" onclick="doSomething()"value="uraha">
			<div class="switcher">
				<div></div>
			</div>
			<div class="formtext">Uraha</div>
		</label>
	</form>
    <div id="map"></div>
    <script src="./node_modules/@google/markerclustererplus/dist/markerclustererplus.min.js"></script>
    <script src="./map.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZEUZfEjLcmNK4LvFNnztP6cBWS4MyLAQ&callback=initMap"
      async
      defer
    ></script>
	<script src="scroll-out.js"></script>
	<script>
		ScrollOut({
			targets: 'header'
		})
		var btn = document.querySelector('.navButton')
		var btnform = document.querySelector('.formButton')
		var nav = document.querySelector('.mobaNav')
		var form = document.querySelector('.checkboxes')

		btn.onclick = function(){
			if(nav.classList.contains('goup')){
				nav.classList.remove('goup');
			}else{
				nav.classList.add('goup');
			}
		}
		btnform.onclick = function(){
			if(form.classList.contains('goleft')){
				form.classList.remove('goleft');
			}else{
				form.classList.add('goleft');
			}
		}
	</script>
</body>
</html>
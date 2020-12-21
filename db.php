<?php
function get_products() {
  return [
    '1' => [
      'title' => 'Экологическая тропа “Диринг-Юрях”',
      'text1' => '<p>Диринг-Юрях (Глубокий ручей) – один из уникальных археологических памятников, находящихся на территории Национального парка «Ленские столбы».
				</p>
				<p>В 1982-1983 годах были обнаружены пять погребений в каменных ящиках, в которых были захоронены мужчины и мальчики. Погребения в каменных ящиках характерны для зон степей и лесостепей. В таежной зоне подобные захоронения встречаются впервые. Во всех погребениях был обнаружен разнообразный инвентарь из камня, кости и рога. Вероятно, могильник представлял собой не просто кладбище. А родовое святлище, а также являлся храмовым местом, где совершались таинства поклонения духам предков, разнообразные ритуальные церемонии.</p>',
		'link' => 'object.php?id=1',
		'img' => 'diring.jpg'
    ],

    '2' => [
      'title' => 'Экологическая тропа “Пернатый мир Буотама”',
      'text1' => '<p>Река Буотама – правый приток реки Лена – образует живописную долину с крутыми и отвесными склонами, изобилующими причудливыми скалами – столбами. Река протяженностью 418 километров протекает по девственной тайге Центральной Якутии.</p>
		<p>По берегам реки были найдены стоянки первобытных людей, промышлявших охотой на мамонтов и бизонов около 40 тысяч лет назад. </p>
	<p>Фантастические дворцы и замки, чистейшая вода и воздух, отсутствие сложных препятствий привлекают путешественников на уникальный сплав по Буотаме.  
         Ниже устья реки Харя-Юрях Буотама течет в окружении живописных утесов, не уступающих по красоте знаменитым Ленским столбам. 2006 года в устье реки были завезены и размещены для реакклиматизации из Канады 30 бизонов. Они доставлены в питомник, который находится в устье реки Буотама. По сути, бизоны возвратились в родные места, где обитали их далекие предки.</p>',
		'link' => 'object.php?id=2',
		'img' => 'buotama.jpg'
    ],

    '3' => [
      'title' => 'Экологическая тропа “Тукулан Кысыл-Элэсин”',
      'text1' => '<p>Только на средней Лене, в том числе на территории парка и ниже, встречается ландшафт развивающихся песков-тукуланов с элементами холодной северной пустыни. Перемахнув через гребень бархана, песок ссыпается по его крутому подветренному склону, засыпая все на своем пути. Много сваленных деревьев, особенно на крутом склоне. Пояс отмерших деревьев на крутом склоне имеет наклон до 5-10° по направлению движения песка.</p><p>Тукулан Саамыс Кумага имеет длину около 5 км, ширину в самой широкой части около 850-900 метров. Состоит из гряд, валов и котловин выдувания, имеющих глубину до 20 метров.</p>',
		'link' => 'object.php?id=3',
		'img' => 'tuculany.jpg'
    ],

    '4' => [
      'title' => 'Экологическая тропа “Ленские столбы”',
      'text1' => '<p>Ленские столбы – обрывистые скалы высотой 100-300 метров – рельеф уникальной формы, в котором сочетаются природные особенности известняков, а также последующие геологические и геоморфологические процессы.</p><p>Здесь, на Ленских столбах, наглядно, лучше, чем где-либо на нашей планете, можно увидеть окаменевшие останки первых организмов с раковиной – свидетельство переломного события в развитии органического мира на Земле.</p><p>На территории Ленских столбах были обнаружены многочисленные наскальные писаницы, выполненные желтой минеральной краской древними жителями этих мест. Эти символические изображения животных, фрагменты древнетюркского рунического письма, композиции с изображением человека.</p>',
		'link' => 'object.php?id=4',
		'img' => 'stolby.jpg'
    ]
  ];
}

function get_product_attribute($id, $attr) {
  $products = get_products();
  $result = $products[$id][$attr] ?? null;
  return $result;
}

function get_product_title($id) {
  return get_product_attribute($id, 'title');
}

function get_img_url1($id) {
  return get_product_attribute($id, 'url1');
}
function get_img_url2($id) {
  return get_product_attribute($id, 'url2');
}
function get_text1($id) {
  return get_product_attribute($id, 'text1');
}
function get_text2($id) {
  return get_product_attribute($id, 'text2');
}
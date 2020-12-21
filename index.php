<?php
	require("db.php");

	$id = rand(1 , 4) ;
	$title = get_product_title($id);
	$text = get_text1($id);
	$link = get_product_attribute($id, 'link');
	require("indexContent.php");
?>
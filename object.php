<?php
	require("db.php");

	$id = $_GET["id"];
	$title = get_product_title($id);
	$text = get_text1($id);
	$img =  get_product_attribute($id, 'img');
	require("objectContent.php");
?>
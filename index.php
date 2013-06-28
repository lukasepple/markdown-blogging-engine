<?php
require_once("system/config.php");
require_once("system/php-markdown/markdown.php");
require_once("system/classes.php");
if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}
$posts = new Posts();
if(isset($_GET['q'])){
	$query = rawurldecode(trim($_GET['q']));
	if(file_exists(POST_DIR . "/" . $query)){
		$post = new Post($query);
		require_once("template/".TEMPLATE."/header.php");
		require_once("template/".TEMPLATE."/single.php");
		require_once("template/".TEMPLATE."/footer.php");
	}else{
		header("HTTP/1.0 404 Not Found");
		require_once("template/".TEMPLATE."/header.php");
		require_once("template/".TEMPLATE."/404.php");
		require_once("template/".TEMPLATE."/footer.php");
	}
}else{ 
	require_once("template/".TEMPLATE."/header.php");
   	require_once("template/".TEMPLATE."/home.php");
   	require_once("template/".TEMPLATE."/footer.php");
}
?>

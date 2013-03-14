<?php
require("includer.php");
$post = new Post($_GET['q']);
$posts = posts();
if(isset($_GET['q'])){
	require_once("layout/header.php");
	require_once("layout/single.php");
	require_once("layout/footer.php");
}else{ 
	require_once("layout/header.php");
        require_once("layout/home.php");
        require_once("layout/footer.php");
}
?>
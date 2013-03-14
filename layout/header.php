<!Doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php 
			if(!empty($post->title))
				echo $post->title;
			else
				echo BLOG_NAME; 
			?></title>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>layout/main.css" txpe="text/css"/>	
	</head>
	<body>
		<header>
			<h1><?php echo BLOG_NAME; ?></h1>
		</header>
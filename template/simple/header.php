<!Doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php 
			if(isset($post)){
				echo $post->title;
			}else{
				echo BLOG_NAME;
			} 
			?></title>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>template/simple/main.css" txpe="text/css"/>	
	</head>
	<body>
		<header>
			<img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(MAIL)); ?>" alt="avatar" id="avatar" />
			<h1><?php echo BLOG_NAME; ?></h1>
			<a href="https://twitter.com/<?php echo TWITTER; ?>"><?php echo "@".TWITTER; ?></a>
		</header>
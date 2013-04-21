<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Blog-Settings</title>
		<link rel="stylesheet" href="system/settings.css" />
	</head>
	<body>
<?php
require_once("system/config.php");
if(isset($_POST['password'], $_POST['submit']) and !isset($_POST['base_url'], $_POST['blog_name'], $_POST['template'], $_POST['twitter'], $_POST['mail'])){
	if($_POST['password'] == BLOG_PASSWORD and !empty($_POST['password'])){ ?>
	<h1>Settings</h1>
	<form id="main" action="settings.php" method="post">
		<input type="hidden" value="<?php echo $_POST['password'] ?>" name="password" />
		<h2>Main configuration</h2>
		Blog Name <br />
		<input type="text" name="blog_name" placeholder="Blog-Name" size="40" value="<?php echo BLOG_NAME; ?>" /><br />
		<?php
		 $base = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$base .= "s";}
		 $base .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $base .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $base .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 $base = str_replace("settings.php", "", $base);
		?>
		<input type="hidden" name="base_url" placeholder="Where is your installion located?" value="<?php echo $base; ?>" />
		Template <br />
		<input type="text" name="template" placeholder="The Template you use (folder name)" size="40" value="<?php echo TEMPLATE; ?>" />
		<h2>Meta</h2>
		Twitter account<br />
		<input type="text" name="twitter" placeholder="Your Twitter account" size="40" value="<?php echo TWITTER; ?>" /><br />
		Your E-Mail<br />
		<input type="email" name="mail" placeholder="Your E-Mail" size="40" value="<?php echo MAIL; ?>" /><br />
		<h2>Password</h2>
		<input type="password" name="new_password" value="<?php echo BLOG_PASSWORD; ?>"/><br />
		<input type="submit" name="submit" value="&#10004;" />
	</form>
<?php 
	exit("</body></html>");
	}else{ 
		$error = "False password"; 
	}
}elseif(isset( $_POST['base_url'], $_POST['blog_name'], $_POST['template'], $_POST['twitter'], $_POST['mail'], $_POST['password'], $_POST['submit'], $_POST['new_password']) and $_POST['password'] == BLOG_PASSWORD and !empty($_POST['password'])){
	//Got Data
	file_put_contents("system/config.php", "<?php //Where are your posts\ndefine(\"POST_DIR\", \"posts\");\n//Where is your installation located\ndefine(\"BASE_URL\", \"".$_POST['base_url'] ."\");\n//Your blog's name\ndefine(\"BLOG_NAME\", \"". $_POST['blog_name'] ."\");\n//Your Template\ndefine(\"TEMPLATE\", \"". $_POST['template']."\");\n//Password for settings.php\ndefine(\"BLOG_PASSWORD\", \"". $_POST['new_password'] ."\");\n//Twitter account\ndefine(\"TWITTER\", \"". $_POST['twitter']."\");\n//Mail\ndefine(\"MAIL\", \"". $_POST['mail']."\");\n?>");
	exit("<h1>Oh yeah! Settings changed</h1><a href=\"./\">Go home</a></body></html>");
}
?>
<form action="./settings.php" method="post" id="home">
	<div class="error"><?php echo $error; ?></div><br/>
	<input type="password" name="password" placeholder="Enter your Blog password" size="40"/>
	<input type="submit" name="submit" value="&#10004;" />
</form>
</body>
</html>
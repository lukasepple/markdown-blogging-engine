<?php
// Include required files
$system_path = "system";
$configuration = "config.php";

try {
	if(file_exists($system_path."/".$configuration)) {
		require_once($system_path."/".$configuration);
	} else {
		throw new Exception("Die Konfigurationen des Systems wurden noch nicht angepasst.\nBitte bennen Sie die Datei <code>config.sample</code> im Systempfad um.");
	}

	require_once($system_path."/php-markdown/markdown.php");
	require_once($system_path."/classes.php");

	// Set the inital page if get is empty
	if(!isset($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}

	// Generate new Posts Object from Classes
	$posts = new mbe\core\classes\Posts();
	if(isset($_GET['q'])){
		$query = str_replace('.', '', rawurldecode(trim($_GET['q']))) . ".md";
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
} catch(Exception $e) {
	echo "<font color='red'>".nl2br($e->getMessage()."\n")."</font>";
	echo "<i><sup>".date(DATE_RFC822)."</sup></i>";
}
?>

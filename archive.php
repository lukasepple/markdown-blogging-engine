<?php
require_once("system/config.php");
require_once("system/php-markdown/markdown.php");
require_once("system/classes.php");

$posts = new Posts();

require_once("template/".TEMPLATE."/header.php");

require_once("template/".TEMPLATE."/archive.php");

require_once("template/".TEMPLATE."/footer.php");

?>

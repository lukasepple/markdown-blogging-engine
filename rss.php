<?php
	header("Content-type: application/rss+xml");
	require_once("./system/config.php");
	require_once("./system/php-markdown/markdown.php");
	require_once("./system/classes.php");
	$posts = new Posts();
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	$pageURL =  str_replace("rss.php", "", $pageURL);
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
?>

<rss version="2.0">
	<channel>
    		<title><?php echo BLOG_NAME; ?></title>
    		<link><?php echo $pageURL; ?></link>
    		<description>-</description>
    		<language>de-de</language>
    		<copyright><?php echo TWITTER; ?></copyright>
    		<pubDate><?php echo date("r"); ?></pubDate>
			<?php 
			foreach($posts->get_all() as $postinfo){ ?>
				<item>
				      <title><?php echo $postinfo->title; ?></title>
				      <description><![CDATA[<?php echo $postinfo->content; ?>]]></description>
				      <link><?php echo $postinfo->url; ?></link>
				      <author><?php echo TWITTER; ?></author>
				      <guid><?php echo $postinfo->url; ?></guid>
				      <pubDate><?php echo date_format($postinfo->timestamp, "r"); ?></pubDate>
				 </item>
				 <?php } ?>
			
	
	</channel>
</rss>

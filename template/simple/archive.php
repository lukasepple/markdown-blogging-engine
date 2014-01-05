<main>
<h2>Archive</h2>
<?php
	foreach($posts->get_archive() as $postinfo){
		echo "<li><a href='". $postinfo->url. "'>". $postinfo->title ."</a></li>\n";
	}
?>
</main>

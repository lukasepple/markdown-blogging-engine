<main>
	<?php
foreach($posts->get_all() as $postinfo){
	echo "<h2>".$postinfo->title."</h2>";
	echo $postinfo->content;
	echo "<a href='". $postinfo->url ."'>Read this Post&rarr;</a>";
}
?>
</main>
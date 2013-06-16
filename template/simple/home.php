<main>
	<?php
foreach($posts->get_all($page, 10) as $postinfo){
	echo "<h2>".$postinfo->title."</h2>";
	echo $postinfo->content;
	echo "<a href='". $postinfo->url ."'>Read this Post&rarr;</a>";
}
echo "<p>";
if($page != 1){
	echo "<a href=\"./?page=". ($page - 1) ."\">Newer</a> &ndash; ";
}
echo "<a href='./?page=". ($page + 1) ."'>Older</a>";
echo "</p>";
?>
</main>
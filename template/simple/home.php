<main>
	<?php
foreach($posts->get_all($page, 10) as $postinfo){
	echo "<h2>".$postinfo->title."</h2>";
	echo $postinfo->content;
	echo "<a href='". $postinfo->url ."'>Read this Post&rarr;</a>";
}
echo "<p>";

// Count files in folder for no "older" when page(n) = items
$countFI = new FilesystemIterator(__DIR__."./../../posts");
$countPage = iterator_count($countFI);

$newer = false;
if($page != 1){
	$newer = true;
	echo "<a href=\"./?page=". ($page - 1) ."\">Newer</a>";
}

if($countPage > $page || $page == 1) {
	if($newer) echo '&ndash;';
	echo "<a href='./?page=". ($page + 1) ."'>Older</a>";
	echo "</p>";
}

?>
</main>
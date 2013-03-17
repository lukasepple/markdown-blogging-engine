<?php
foreach($posts as $post){
	echo $post->content;
	echo "<a class='bigbutton' href='". $post->url ."'>Read this Post&rarr;</a>";
}
?>
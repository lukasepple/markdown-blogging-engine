<?php
foreach($posts as $post){
	echo $post->content;
	echo "<a href='". $post->url ."'>Permalink</a>";
}
?>
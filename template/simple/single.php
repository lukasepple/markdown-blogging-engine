<main>
	<?php echo "<h2>".$post->title."</h2>"; echo $post->content; ?>
	<a href="<?php echo BASE_URL; ?>">&larr;Back to all entries</a><br>
	<a href="mailto:<?php echo MAIL; ?>?subject=reply%20to%20<?php echo $post->url; ?>">Reply</a>
</main>
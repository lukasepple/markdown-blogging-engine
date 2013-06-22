<?php
class Post{
	function __construct($filename){
		$file = file(POST_DIR . "/" . $filename);
		//Getting the metadata
		$this->title = str_replace("\n", "", $file[0]);
		$this->date = str_replace("\n", "", substr($file[1], 2));
		$this->timestamp = date_create_from_format("Y-m-d H:i", $this->date);
		$this->url = BASE_URL.rawurlencode(substr($filename, 0, -3));
		//Empty it!
		$file[0] = "";
		$file[1] = "";
		//Content
		$markdown = implode($file);
		$this->source = $markdown;
		$this->content = Markdown($markdown);
	}
}
class Posts{
	function get_all($page, $page_max_posts){
		$posts = array();
		//Now handle $posts
		$dir = scandir(POST_DIR,1);
		$count = 0;
		foreach($dir as $filename){
			if(substr($filename,0,1) != "."){
				$post = new Post($filename);
				$all_posts[$post->date] = clone $post;
				$post = null;
				$count = $count + 1;
				
			}
		}
		krsort($all_posts);
		
		$i = 0;
		foreach($all_posts as $key => $post){
			$posts_numberd[$i] = $post;
			$i = $i + 1;
		}
		unset($all_posts);
		$all_posts = $posts_numberd;
		unset($posts_numberd);
		
		$pages_count = ceil($count % $page_max_posts);
		$first = ($page - 1) * $page_max_posts;
		$last = $first + $page_max_posts;
		foreach($all_posts as $num => $post){
			if($num >= $first && $num < $last){
				$posts[$post->date] = $post;
			}
		}
		return $posts;
	}
	public function get($filename){
		return new Post($filename);
	}
}

?>

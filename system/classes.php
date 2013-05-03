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
	function get_all(){
		$posts = array();
		//Now handle $posts
		$dir = scandir(POST_DIR,1);
		$i = 0;
		foreach($dir as $filename){
			if(substr($filename,0,1) != "."){
            	$post = new Post($filename);
                $posts[$post->date] = clone $post;
                $post = null;
                $i += 1;
			}
		}
		krsort($posts);
		return $posts;
	}
	public function get($filename){
		return new Post($filename);
	}
}

?>

<?php
class Post{
	public $title = "";
	public $date = "";
	public $category = "";
	public $content = "";
	public $source = "";
	public $url = BASE_URL;
	function __construct($filename){
		$file = file(POST_DIR . "/" . $filename);
		//Getting the metadata
		$this->title = substr($file[1], 7);
		$this->category = substr($file[2], 10);
		$this->date = substr($filename, 0,10);
		$this->url = BASE_URL.substr($filename, 0, 4)."/".substr($filename, 5, 2)."/".substr($filename, 8, 2)."/".substr($filename, 11, -3);
		$file[0] = "";
		$file[1] = "";
		$file[2] = "";
		$file[3] = "";
		//Content
		$markdown = implode($file);
		$this->source = $markdown;
		$this->content = Markdown($markdown);
	}
}
function posts(){
	$posts = array();
	//Now handle $posts
	$i = 0;
        $handle = opendir(POST_DIR);
        while(false !== ($filename = readdir($handle))){
		if(substr($filename,0,1) != "."){
                       	$post = new Post($filename);
                       	$posts[$i] = clone $post;
                       	$post = null;
                       	$i += 1;
		}
       	}
	closedir($handle);
	return $posts;
}

?>
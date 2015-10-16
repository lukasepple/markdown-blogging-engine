<?php
namespace mbe\core\classes;
class Posts {
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
			if($post->timestamp <= time()){
				$posts_numberd[$i] = $post;
				$i = $i + 1;
			}
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
	public function get_archive(){
		// Returns all posts
		$posts = array();
		$dir = scandir(POST_DIR,1);
		foreach($dir as $filename){
			if(substr($filename,0,1) != "."){
				$post = new mbe\core\classes\Post($filename);
				$posts[$post->date] = clone $post;
				$post = null;
			}
		}
		krsort($posts);
		return $posts;
	}
}
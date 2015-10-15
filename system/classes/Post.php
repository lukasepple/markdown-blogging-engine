<?php
namespace mbe\core\classes;
class Post {
	function __construct($filename){
		$file = file(POST_DIR . "/" . $filename);
		//Getting the metadata
		$this->title = str_replace("\n", "", $file[0]);
		$this->date = str_replace("\n", "", substr($file[1], 2));
		
		$components_of_date = explode("-", $this->date); //Explode to divide month and year
		//DIvide hour, minutes, day
		$components_of_date[3] = substr($components_of_date[2], 3,2); //Get hour
		$components_of_date[4] = substr($components_of_date[2], 6,7); //Get minutes
		$components_of_date[2] = substr($components_of_date[2], 0,2); //Get day
		$this->timestamp = mktime($components_of_date[3], $components_of_date[4], 0, $components_of_date[1], $components_of_date[2], $components_of_date[0]);
		$this->url = BASE_URL.rawurlencode(substr($filename, 0, -3));
		$this->filename = $filename;
		//Empty it!
		$file[0] = "";
		$file[1] = "";
		//Content
		$markdown = implode($file);
		$this->source = $markdown;
		$this->content = Markdown($markdown);
	}
}
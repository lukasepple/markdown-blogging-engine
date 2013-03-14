# markdown-blogging-engine
A simple file based blogging system. By [@lukasepple](http://twitter.com/lukasepple), ask your Questions at Twitter.
## Installation
* Upload everything to your server
* edit `system/config.php`
	* change `BASE_URL` to the Base url of your installation
	* change `BLOG_NAME`
	* If you want locate your post otherwhere and change `POST_DIR`
## Add a post
* place a file in your `POST_DIR`
* naming convention: 2012-24-24-my-title.md
* Then write:

	---
	title: My title
	category: Only one supported!
	---
	My awesome Content	
# markdown-blogging-engine
A simple file based blogging system. By [@lukasepple](http://twitter.com/lukasepple), ask your Questions at Twitter.
## Installation
* Upload everything to your server
* edit `system/config.php`
	* change `BASE_URL` to the Base url of your installation
	* change `BLOG_NAME`
	* If you want locate your post otherwhere and change `POST_DIR`
	* Your `TEMPLATE` is the name of the folder, like `simple`
	* `TWITTER`and `MAIL`are clear, aren't they.
* edit `.htaccess`
	* change `RewriteBase` to `RewriteBase /path/to/your/blog`

__a `install.php` is comming soon!__
## Add a post
* place a file in your `POST_DIR`
* naming convention: my-title.md
* Then write:    

```markdown
Title
- 9999-12-12
my awesome content
```
# markdown-blogging-engine
A simple file based blogging system. By [@lukasepple](http://twitter.com/lukasepple), ask your Questions at Twitter.
## Installation
* Upload everything to your server
* Open `settings.php` in your Browser log in with '42' (**Change the password, too!**) or:
* edit `system/config.php`
	* change `BASE_URL` to the Base url of your installation
	* change `BLOG_NAME`
	* If you want locate your post otherwhere and change `POST_DIR`
	* Your `TEMPLATE` is the name of the folder, like `simple`
	* `TWITTER`and `MAIL`are clear, aren't they.
	* Edit `BLOG_PASSWORD` also, otherwise somebody could change your settings
* edit `.htaccess`
	* change `RewriteBase` to `RewriteBase /path/to/your/blog`

## Add a post
* place a file in your `POST_DIR`
* naming convention: my-title.md
* Then write:    

```markdown
Title
- YYYY-MM-TT hh:mm
my awesome content
```

## Create own templates
[I wrote some documentation!](https://github.com/lukasepple/markdown-blogging-engine/wiki)

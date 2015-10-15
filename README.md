# MBE - Modification
A simple file based blogging system.
Core by Lukas Epple, modifications by Dennis Heinrich

## Installation
* Upload everything to your server
* move `system/config.sample.php` to `system/config.php`
* edit `system/config.php`
	* change your timezone
	* change `BASE_URL` to the Base url of your installation
	* change `BLOG_NAME`
	* If you want locate your post otherwhere and change `POST_DIR`
	* Your `TEMPLATE` is the name of the folder, like `simple`
	* `TWITTER`and `MAIL`are clear, aren't they.
* move `htaccess.txt` to `.htaccess`
* edit `.htaccess`
	* change `RewriteBase` to `RewriteBase /path/to/your/blog`

## Create own templates
[I wrote some documentation!](https://github.com/lukasepple/markdown-blogging-engine/wiki)
## lighttpd
[Config by markuman](https://github.com/lukasepple/markdown-blogging-engine/issues/2)

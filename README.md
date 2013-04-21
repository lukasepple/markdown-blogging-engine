# markdown-blogging-engine
![In action](https://d36tc8clsz1tk5.cloudfront.net/adn-uf-01/Xr/WU/Fk/XrWUFkXA72GNtqH13I_QtSpgPRqhZ-qlSirqlMVSczc?response-cache-control=public%2C%20max-age%3D7200%2C%20s-maxage%3D172800&response-content-disposition=inline%3B%20filename%2A%3DUTF-8%27%27Markdown%2520blogging%2520engine.png&Expires=1366552800&Signature=h845fQ0CJeiFgoQzMnGJzFaYlTvNYFKJs2wD3FPvqK28bvRxM-G6Nq~w02bS~IcFYzWUByouwyi~a57zyx359j4eNA7iYEf4PWON6MFCpmSP5anqOiS-Nu67EvNnqwnSqtdpRbTiXcFPlkGbc2MQgE7rVTmMH1S-ybr2tUwbCkE_&Key-Pair-Id=APKAIWNGPWT6YVKFBWJA)
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
- YYYY-MM-TT
my awesome content
```

## Create own templates
[I wrote some documentation!](https://github.com/lukasepple/markdown-blogging-engine/wiki)

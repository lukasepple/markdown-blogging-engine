# markdown-blogging-engine
![In action](https://d36tc8clsz1tk5.cloudfront.net/adn-uf-01/Xr/WU/Fk/XrWUFkXA72GNtqH13I_QtSpgPRqhZ-qlSirqlMVSczc?response-cache-control=public%2C%20max-age%3D7200%2C%20s-maxage%3D172800&response-content-disposition=inline%3B%20filename%2A%3DUTF-8%27%27Markdown%2520blogging%2520engine.png&Expires=1366390800&Signature=jY75oGjnu0SgRQwnqcrVVHlZ3XoGz1ccn5qwcMSbIRQPlE0L7zvOw1jdn7H4TyNNRjhbB9IKR9xr5nYWJv1zfHXDW3BW2D4SiI~6AMCKAER4xK8UrxOLf4NiwbqYynoWHauFKJciEsIOfCIdHI-Jf8EpzcFToSuWHE7mD~qLaAs_&Key-Pair-Id=APKAIWNGPWT6YVKFBWJA)
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
- YYYY-MM-TT
my awesome content
```

## Create own templates
[I wrote some documentation!](https://github.com/lukasepple/markdown-blogging-engine/wiki)

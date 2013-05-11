BoilerstrapWP
===============================

This is a naked Wordpress theme that you can use to create your own theme. By default it's based upon [HTML5 Boilerplate](http://html5boilerplate.com/). If you prefer to base it upon [Twitter Bootstrap](http://twitter.github.com/bootstrap/), you just need to comment/uncomment a few lines in styles.scss.
This naked theme is built upon [HTML5 Boilerplate for Wordpress](https://github.com/zencoder/html5-boilerplate-for-wordpress). It started as a fork, then as I was diverging from it more and more I decided to create a dedicated repository. Credits for most of the php code here doesn't go to me (Alex Muraro) but rather to the original theme's creator.
**BoilerstrapWP** uses [SASS](http://sass-lang.com/) for the stylesheets. There is a styles.scss file that takes care of importing the files it needs.

The purpose of this theme is to save you the time it takes to apply the HTML5 Boilerplate or the Twitter Bootstrap to WordPress.

The layout is based on Bruce Lawson's [Designing a Blog with HTML5](http://html5doctor.com/designing-a-blog-with-html5/)

Instead of using only DIVs for content layout, it uses HTML5 tags, including [header](http://html5doctor.com/the-header-element/), 
[footer](http://www.w3schools.com/html5/tag_footer.asp), 
[nav](http://www.w3schools.com/html5/tag_nav.asp), 
[article](http://www.w3schools.com/html5/tag_article.asp), 
and [section](http://html5doctor.com/the-section-element/).

It's a very bare layout, including only the base styles that come with the boilerplate (and the bootstrap) and required WordPress styles, so layout is up to you.

In functions.php I have registered a custom menu, activated post thumbnails, registered the sidebar.

As a bonus, cheatsheet.txt contains some useful snippets to make your development faster :D

Getting Started
---------------
1. Install Ruby on your systen if you haven't already. Once it's installed, install SASS (gem install sass).
2. Add the boilerpress folder to your wp-content/themes folder.
3. Decide if you're going to use HTML5 Boilerplate (in which case you're ready to go) or Twiteer Bootstrap (if so, visit styles.scss to see how to activate it).
3. Create a first version of your stylesheets by opening the command line, switching to the "styles" folder inside this theme, and finally by issuing the command "sass --watch styles.scss:styles.css --style compressed". This way each time you change any of the scss files, styles.scss will be overwritten.
4. Activate the theme. WP-Admin > Appearance > Themes
5. Add some of the "Root Files" to the root directory of your website (explained below).
6. Style away.

Root Files
----------

### 404 Page
If you use permanlinks (WP-Admin > Settings > Permalinks), then WordPress handles any 404s with the 404.php included in the theme. If you don't use permalinks, then add the 404.html file you find in the html5-boilerplate folder to the root of your site.

### crossdomain.xml
If you don't know what this is, you probably don't need it.
www.adobe.com/devnet/flashplayer/articles/cross_domain_policy.html

### robots.txt
Tells all search engines that they can read and index all pages. This is handled by WordPress so you shouldn't need to move this to the root.

Root Images
-----------
Included are default HTML5 boilerplate icons, change them with your own.

License
-------

The Unlicense (aka: public domain) http://unlicense.org

Made by
-------
Alessandro Muraro - [alexmuraro.me](http://www.alexmuraro.me)

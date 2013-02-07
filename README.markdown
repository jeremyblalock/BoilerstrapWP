Boilerpress
===============================

This theme is built upon [HTML5 Boilerplate for Wordpress](https://github.com/zencoder/html5-boilerplate-for-wordpress). It started as a fork, then as I was diverging from it more and more I decided to create a dedicated repository. Credits for most of the php code here doesn't go to me (Alex Muraro) but rather to the original theme's creator. This theme is built on the [HTML5 Boilerplate](http://html5boilerplate.com/) by Paul Irish and Divya Manian. 

Note: I have included a copy of the latest html5 repository for reference, but no theme files link to any of its content.

Boilerpress uses some opinionated settings you should be aware of: 
1. IE Box Model (padding does not change boxes' dimensions).
2. Lists have no margin
3. Some useful snippets have been added to functions.php (mainly for menus, featured images)
4. Javascript libraries' names have been changed, by removing the file version. This makes for easy copy/paste of new or different versions of the files, without having to rename.

The sole purpose of this theme is to save developers the time it takes to apply the HTML5 Boilerplate to WordPress. The "HTML5 Boilerplate" name is used with permission from Paul Irish.

The layout is based on Bruce Lawson's [Designing a Blog with HTML5](http://html5doctor.com/designing-a-blog-with-html5/)

Instead of using only DIVs for content layout, it uses new HTML5 tags, including [header](http://html5doctor.com/the-header-element/), 
[footer](http://www.w3schools.com/html5/tag_footer.asp), 
[nav](http://www.w3schools.com/html5/tag_nav.asp), 
[article](http://www.w3schools.com/html5/tag_article.asp), 
and [section](http://html5doctor.com/the-section-element/).

It's a very bare layout, including only the base styles that come with the boilerplate and required WordPress styles, so layout is up to you. Alternatively, you could apply the methods used here to other themes.

Getting Started
---------------
1. Add the boilerpress folder to your wp-content/themes folder.
2. Activate the theme. WP-Admin > Appearance > Themes
3. Add some of the "Root Files" to the root directory of your website (explained below).
4. Style away, knowing that you're building on a super solid base with HTML5 awesomeness.

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
Included are default HTML5 boilerplate icons

License
-------

The Unlicense (aka: public domain) http://unlicense.org

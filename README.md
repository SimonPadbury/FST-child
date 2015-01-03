FST-child
=========

### Starter child theme for FST

Version 1.0

-----

FST is a ZURB Foundation Starter Theme, for WordPress

Get FST here: [https://github.com/SimonPadbury/fst](https://github.com/SimonPadbury/fst)

-----

**FST-child** contains the minimum requirement for a child theme based off **FST**.

So far, all it has is an enqueue function for the linking the stylesheet `css/fst-child.css` *after* the stylesheets of **bst**.

-----

##Notes

(1.) You can't put your styles in this file (style.css). Put them in css/fst-child.css

(2.) Since downloads of BST Plus from GitHub will be in a folder named 'fst-master', therefore in the CSS comment header above I have put 'Template: fst-master'. If the BST Plus root folder has a different name, then you must make the SAME change to the Template line in the CSS comment above.

(3.) You can make this child theme your own by simply:

(a.) Change the name of the root folder
(b.) Change the name of the stylesheet css/fst-child.css
(c.) In functions.php, do a search-and-replace for these two terms:

     "fst-child" => "your-theme-name"
     "fst_child" => "your_theme_name"

(d.) Change the Theme Name in the CSS comment in this file (style.css)

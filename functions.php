<?php
/*
This child theme needs to instruct WordPress where to find the stylesheet, as below.

Notice that the 'add_action' line ends with '101'? This guarantees that the child stylesheet 
(bst-plus-child.css') is added to the webpage <head> AFTER the FST parent theme stylesheets.
(Because in the FST enqueue, the 'add_action' line ends with '100'.)
*/

function fst_child_enqueues() {

	wp_register_style('fst-child', get_bloginfo('stylesheet_directory') . '/css/fst-child.css', false, null);
	wp_enqueue_style('fst-child');

  /* Enqueue your own styles and scripts in here */

}
add_action('wp_enqueue_scripts', 'fst_child_enqueues', 101);

?>

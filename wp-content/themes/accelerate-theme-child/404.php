<?php
/*
* Template name: 404.php
* * The template for displaying error page
 *
 * This is the template that displays the 404 error page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wordpress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<div class= "ship"></div>
<span id ="error"> Aww...Looks like you are lost.... error 404! Page not found.
Find your way back home <a class = "gray" href="<?php echo home_url(); ?>">here</a>.</span>

<?php get_footer(); ?>
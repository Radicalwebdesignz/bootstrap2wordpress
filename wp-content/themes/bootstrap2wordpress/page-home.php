<?php
/**
 * The template for displaying home pages
 * Template Name: Home Page
 * This is the template that displays all Home pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php get_header(); ?>
	        
        <!-- HERO SECTION -->
        <?php get_template_part('content', 'hero'); ?>        

        <!-- OPT IN SECTION -->
        <?php get_template_part('content', 'optin'); ?>  

        <!-- BOOST YOUR INCOME -->
        <?php get_template_part('content', 'boost'); ?>  

        <!-- WHO BENEFITS -->
        <?php get_template_part('content', 'benefits'); ?>  

        <!-- COURSE FEATURES -->
        <?php get_template_part('content', 'coursefeatures'); ?> 
        
        <!-- PROJECT FEATURES -->
        <?php get_template_part('content', 'projectfeatures'); ?> 

        <!-- VIDEO FEATURETTE -->
        <?php get_template_part('content', 'videofeaturette'); ?> 
        
        <!-- INSTRUCTOR SECTION -->
        <?php get_template_part('content', 'instructor'); ?> 

        <!-- TESTIMONIALS -->
        <?php get_template_part('content', 'testimonials'); ?>

<?php get_footer(); ?>
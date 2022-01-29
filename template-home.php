<?php
/**
 * 
 * Template Name: Home page
 * 
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Bangladesh
 */

get_header(); 

?> 



    <main> 
         
         <!-- slider Area Start-->
             <?php get_template_part('/template-parts/slider-area') ?>     
         <!-- slider Area End-->
 
         <!-- We Trusted-Client Start-->
             <?php get_template_part( 'template-parts/partials/content', 'client', ); ?>
         <!-- We Trusted-Client End-->
 
         <!-- services Area Start-->
             <?php get_template_part( 'template-parts/partials/content', 'services', ); ?>
         <!-- services Area End-->
 
         <!-- Request Back Start -->
         <?php get_template_part('/template-parts/request_call') ?>     
         <!-- Request Back End -->
 
         <!-- Completed Cases Start -->
         <?php get_template_part('/template-parts/complete-case') ?>     
         <!-- Completed Cases end -->
         
         <!-- Team-profile Start -->
         <?php get_template_part( 'template-parts/partials/content', 'team', ); ?>
         <!-- Team-profile End-->
 
 
         <!-- Testimonial Start -->
         <?php get_template_part( 'template-parts/partials/content', 'testimonial', ); ?>
         <!-- Testimonial End -->
 
 
         <!-- Recent Area Start -->	
         <?php get_template_part( 'template-parts/partials/content', 'blog', ); ?>
         <!-- Recent Area End-->      
 
     </main>
   
    <?php get_footer( ) ?>
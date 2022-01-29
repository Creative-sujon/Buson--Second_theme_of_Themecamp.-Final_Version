<?php
/**
 * Template Name: Service page
 */

get_header(); 

?> 

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('/template-parts/slider-mini') ?>     
        <!-- slider Area End-->

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/partials/content', 'services', ); ?>
        <!-- Recent Area End-->


        <!-- Recent Area Start -->	
        <?php get_template_part( 'template-parts/partials/content', 'blog', ); ?>
        <!-- Recent Area End-->
    </main>
   
    <?php get_footer( ) ?>
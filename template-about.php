<?php
/**
 * Template Name: About page
 */

get_header(); 

?> 

    <main>

        
        <!-- slider Area Start-->
        <?php get_template_part('/template-parts/slider-mini') ?>     
        <!-- slider Area End-->

        <!-- We Trusted-Client Start-->
        <?php get_template_part( 'template-parts/partials/content', 'client', ); ?>
        <!-- We Trusted-Client End-->


        <!-- Testimonial Start -->
            <?php get_template_part( 'template-parts/partials/content', 'testimonial', ); ?>
        <!-- Testimonial End -->


        <!-- Recent Area Start -->	
            <?php get_template_part( 'template-parts/partials/content', 'blog', ); ?>
        <!-- Recent Area End-->


    </main>

    <?php get_footer( ) ?>
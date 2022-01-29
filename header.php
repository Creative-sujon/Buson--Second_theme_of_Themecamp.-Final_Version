<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Js_Bangladesh
 */
?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
        <?php wp_head();?>
   </head>

   <body <?php body_class();?>>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">

                                <?php

                                    $header_adress = get_field('header_adress', 'option');
                                    $header_email = get_field('header_email', 'option');

                                    // do something with $variable

                                ?>

                                    <ul>     
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $header_adress; ?></li>
                                        <li><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $header_email; ?>"><?php echo $header_email; ?></a> </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social"> 
                                        <?php
                                            $header_socials = get_field('header_socials', 'option');
                                            foreach($header_socials as $header_social){
                                        ?>
    
                                        <li><a target="_blank" href="<?php echo $header_social['header_social_links']; ?>"><i class=" <?php echo $header_social['header_socials_icon']; ?> "></i></a></li>
                                            
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <a href=" <?php site_url()?>">
                                        <?php
                                            the_custom_logo();
                                            if ( is_home() && ! is_front_page() ) : ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary'
                                    )
                                ) ?>
                                
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->


    </header>
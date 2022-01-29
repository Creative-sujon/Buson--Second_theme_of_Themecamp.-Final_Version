<?php
/**
 * The template for displaying the trusted-client
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Js_Bangladesh
 */

?>

<div class="we-trusted-area trusted-padding">
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-xl-7 col-lg-7">
                <div class="trusted-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/wetrusted.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">

                <?php 
                    
                    $client_title = get_field('client_title', 'option');
                    $client_description = get_field('client_description', 'option');
                    $client_button_url = get_field('client_button_url', 'option');
                    $client_button_value = get_field('client_button_value', 'option');

                    
                ?>

                <div class="trusted-caption">
                    <h2><?php echo $client_title; ?></h2>
                    <p><?php echo $client_description; ?></p>
                    <a href="<?php echo $client_button_url; ?>" class="btn trusted-btn"><?php echo $client_button_value; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
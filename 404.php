
<?php get_header( ) ?>

    <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/breadcumb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php WP_title( ) ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- slider Area End-->

        <div class="container my-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-not-found">
                        <h1> We are sorry, Nothing found here!  </h1>
                        <a href="<?php echo site_url();?>" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer( ) ?>
    




<?php get_header() ?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('assets/img/breadcumb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo esc_html__( 'Case Details', 'buson') ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Services Details Start -->
        <div class="services-details section-padding2">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-12">
                        <div class="s-detailsImg">
                            <img src="assets/img/gallery/services_details.jpg" alt="">
                        </div>
                    </div>
                    <div class="offset-xl-12">

                        <div class="s-details-caption">
                            <h2><?php the_title( ) ?></h2>
                            <p class="details-pera1"> <?php the_content();?> </p>
  
                            <!-- btn -->
                            <a href="#" class="btn red-btn">Contact now <i class="ti-angle-double-right"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>
    
    <?php get_footer( ) ?>
<?php get_header() ?>

        <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2> Blog </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">


                    <?php $args = array(
                        'post_type' => 'post',
                        'post_per_page' => 6
                    ); 
                    
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post();
                    ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3> <?php the_time( 'j' ) ?> </h3>
                                    <p><?php the_time( 'F' ) ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><a href="<?php the_permalink() ?>"> <?php the_title( ) ?> </a></h2>
                                </a>
                                <p>
                                    <?php
                                        $excerpt = get_the_excerpt(); 
                                            
                                        $excerpt = substr( $excerpt, 0, 250 ); // Only display first 250 characters of excerpt
                                        $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                        echo $result;  
                                    ?>
                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php the_author( ) ?> </a></li>
                                    <li><a href="#"> <i class="fa fa-comments"></i> <?php echo get_comments_number(). '&nbsp;' . 'Comments';?> </a></li>
                                </ul>
                            </div>
                        </article>

                        <?php 
                            }
                            wp_reset_postdata()
                        ?>



                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>

                           
                        </nav>
                    </div>
                </div>
                
                <div class="col-lg-1">
                </div>

                <div class="col-lg-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <?php get_footer( ) ?>



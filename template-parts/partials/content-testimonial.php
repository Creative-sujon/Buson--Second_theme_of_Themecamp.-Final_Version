            <div class="testimonial-area fix">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="h1-testimonial-active">

                                <?php
                                    $args = array(
                                        'post_type' => 'testimonials',
                                        'posts_per_page' => 3
                                    );
                                    $query = new WP_Query($args);
                                    while($query->have_posts()) {
                                        $query->the_post();

                                    $testimonial_rating = get_field('testimonial_rating');
                                    $testimonial_author = get_field('testimonial_author');
                                    $testimonial_institution = get_field('testimonial_institution');
                                ?>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial pt-65">
                                    <!-- Testimonial tittle -->
                                    <div class="testimonial-icon mb-45">
                                        <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption text-center">
                                        <p> <?php the_title() ?> </p>
                                        <!-- Rattion -->
                                        <div class="testimonial-ratting">
                                            <?php if($testimonial_rating){ ?>
                                            <span> <?php echo $testimonial_rating; ?> </span>
                                            <?php } ?>
                                        </div>
                                        <div class="rattiong-caption">
                                            <?php 
                                                    if($testimonial_author){

                                                ?>
                                            <span> <?php echo $testimonial_author; ?> <span> <?php } ?>-
                                                    <?php if ($testimonial_institution){ echo $testimonial_institution;} ?>
                                                </span> </span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
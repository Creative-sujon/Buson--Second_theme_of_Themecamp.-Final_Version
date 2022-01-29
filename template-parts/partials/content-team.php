        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'Teams',
                            'posts_per_page' => 4
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()) {
                            $query->the_post();
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                </div>
                                <div class="profile-caption">
                                
                                    <p><?php the_title(); ?></p>
                                    <h4>  <span><?php the_content() ?></span></h4>
                                </div>
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
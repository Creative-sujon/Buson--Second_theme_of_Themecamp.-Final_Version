

<div class="slider-area ">
    <div class="slider-active">

        <?php
                    $args = array(
                        'post_type' => 'slider',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post();

                        $slider_subtitle = get_field('slider_subtitle');
                        $slider_button_text = get_field('slider_button_text');

                    ?>
        <div class="single-slider slider-height d-flex align-items-center"
            style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="hero__caption">
                            
                            <?php
                                if($slider_subtitle) {
                            ?>
                            
                            <p><?php echo $slider_subtitle;?></p>
                            
                            <?php
                                }
                            ?>
                            <h1><?php the_title();?></h1>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="<?php echo($slider_button_text ['url']); ?>" target="_blank"
                                    class="btn hero-btn"><?php echo($slider_button_text ['title']); ?></a>

                            </div>
                        </div>
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
    <div class=" completed-active owl-carousel"> 

        
        <?php
            $args = array(
                'post_type' => 'cases',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            while($query->have_posts()) {
                $query->the_post(); 

        ?>

        <div class="single-cases-img">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            <!-- img hover caption -->
           <div class="single-cases-cap">
                <h4><a href="<?php the_permalink() ?>"><?php the_title( ) ?></a></h4>
                <?php the_content();?>
                <span> Advisor </span>
           </div>
        </div>
        
        <?php 
            }
            wp_reset_postdata();
        ?>

    </div>
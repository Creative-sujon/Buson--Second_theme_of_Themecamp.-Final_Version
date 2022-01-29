<?php get_header() ?>

      <!-- slider Area Start-->
      <div class="slider-area ">
         <!-- Mobile Menu -->
         <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri( ); ?>/assets/img/breadcumb.jpg');">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="hero-cap text-center">
                             <h2> Blog Details</h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- slider Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            

            <div class="col-lg-8 posts-list"> 
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/img/blog/single_blog_1.png" alt="">
                    </div>
                    <div class="blog_details">
                        <h2> <?php the_title( ) ?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user">
                            </i>
                                <?php
                                    $category = get_the_category(); 
                                    if(is_a($category, 'WP_Post')):
                                        echo $category[0]->cat_name;      
                                ?></a>
                                <?php
						        endif; ?>
                            </li>

                            <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(). '&nbsp;' . 'Comments';?></a></li>
                        </ul>
                        <p class="excert">
                            <?php the_excerpt() ?>
                        </p>
                        
                    </div>
                </div>
                <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">

                           <!-- Previous Post Info -->
                            <p> <?php echo esc_html__( 'Prev Post', 'buson') ?> </p>
                                <?php
                                    $prevPost= get_previous_post();
                                    if(is_a($prevPost, 'WP_Post')):
                                ?>
                                <a href="<?php echo get_permalink($prevPost->ID); ?>">
                                <h4><?php echo get_the_title($prevPost->ID); ?></h4></a>
                              <?php
						    endif; ?>

                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">

                            <!-- Next Post Info -->
                           <p> <?php echo esc_html__( 'Next Post', 'buson') ?> </p>
                                <?php
                                    $nextPost= get_next_post();
                                    if(is_a($nextPost, 'WP_Post')):
                                ?>
                                <a href="<?php echo get_permalink($nextPost->ID); ?>">
                                <h4><?php echo get_the_title($nextPost->ID); ?></h4></a>
                              <?php
						    endif; ?>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="<?php echo get_template_directory_uri( ); ?>/assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                  <div class="media align-items-center">
                    <?php 
                        $author_id = $post->post_author;
                        $author_name = get_the_author_meta('display_name', $author_id);
                        $author_desc = get_the_author_meta('user_description', $author_id);
                        $author_avatar = get_avatar_url($author_id);
                    ?>
                     <img src="<?php echo $author_avatar; ?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo $author_name; ?></h4>
                        </a>
                        <p><?php echo $author_desc ?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4><?php echo get_comments_number(). '&nbsp;' . 'Comments';?></h4>

                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="<?php echo get_template_directory_uri( )?>/assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comments-area">
                  <h4><?php echo get_comments_number(). '&nbsp;' . 'Comments';?></h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="<?php echo get_template_directory_uri( )?>/assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
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
   <!--================ Blog Area end =================-->


  

   <?php get_footer(   ) ?>
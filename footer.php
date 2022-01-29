<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href=" <?php site_url()?>">
                                    <?php
                                        the_custom_logo();
                                        if ( is_home() && ! is_front_page() ) : ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php 
                                        $blogdes = get_bloginfo('description');
                                            echo $blogdes;
                                    ?></p>
                               </div>
                            </div>
                            <!-- social -->

                            <div class="footer-social">
                                <?php
                                    $header_socials = get_field('header_socials', 'option');
                                    foreach($header_socials as $header_social){
                                ?>

                                <a target="_blank" href="<?php echo $header_social['header_social_links']; ?>"><i class="<?php echo $header_social['header_socials_icon']; ?>"></i></a>
                                
                                <?php } ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4><?php echo esc_html__( 'Company', 'buson'); ?></h4>
                               <ul>
                                    <div class="">
                                        <?php dynamic_sidebar('sidebar-2'); ?>
                                    </div>  
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4> <?php echo esc_html__('Services' ,'buson') ?> </h4>

                                <?php
                                    $args = array(
                                    'post_type' => 'services',
                                    'posts_per_page' => 6
                                    );

                                    $query = new WP_Query($args);
                                    while($query->have_posts()) {
                                    $query->the_post();  
                                ?>            
                               <ul>   
                                   <li><a href="#"><?php  echo the_title(); ?></a></li>
                               </ul>
                                <?php
                                    }
                                    wp_reset_postdata(); 
                                ?>
                                
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                                <?php
                                    $header_adress = get_field('header_adress', 'option');
                                    $header_email = get_field('header_email', 'option');
                                    $request_call_number = get_field('request_call_number', 'option');
                                    // do something with $variable
                                ?>
                               <ul>
                                <li><a href="tel:<?php echo $request_call_number; ?> "><?php echo $request_call_number; ?></a></li>
                                <li><a href="mail:<?php echo $header_email ?> "> <?php echo $header_email ?></a></li>
                                <li><a href=""><?php echo $header_adress; ?></a></li>                              
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
        <?php wp_footer();?>
    </body>
</html>
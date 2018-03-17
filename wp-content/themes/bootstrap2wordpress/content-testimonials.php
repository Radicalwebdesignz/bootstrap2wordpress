<?php 

    //Testimonials section template part - Referenced this in home-page.php
    
    //Getting data from custom fields - Testimonials section
    $testimonials_title = get_field('testimonials_title');
    //$author = get_field('author'); - We are getting it via the_field - get_fiels seems to not work in a loop of custom post
    
?>

		<!-- TESTIMONIALS -->
        <section id="kudos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h2><?php echo $testimonials_title; ?></h2>
                        
                        <!-- TESTIMONIAL -->
                        <div class="row testimonial">
                            
                            <?php $testimonialLoop = new WP_query(array('post_type'=>'testimonials', 'orderby'=>'post_id', 'order'=>'ASC')); ?>  


                            <?php while($testimonialLoop->have_posts()) : $testimonialLoop->the_post();?>
                            <div class="col-sm-4 pb-3">
                                <?php 
                                    if (has_post_thumbnail()) {
                                        //array(200,200) crops the image to 200 by 200
                                        the_post_thumbnail(array(200,200));
                                    }
                                ?>
                            </div>
                            <div class="col-sm-8 pb-3">
                                <blockquote>
                                    <?php the_content(); ?>
                                    <cite>&mdash; <?php the_field('author'); ?></cite>
                                </blockquote>
                            </div>
                        <?php endwhile; wp_reset_query();?>
                        <!-- wp_reset_query(); Resets the query - So that the query date is available to another new query -->
 
                        </div><!-- row -->
                    </div> <!-- col-sm-8 -->
                    <div class="col-sm-2"></div>
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- kudos -->
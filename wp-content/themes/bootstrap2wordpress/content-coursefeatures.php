<?php 

    //Courde Features section template part - Referenced this in home-page.php

    //Getting data from custom fields - Course Features section
    $features_section_image = get_field('features_section_image');
    $features_section_title = get_field('features_section_title');

?>

		<!-- COURSE FEATURES -->

        <section id="course-features">
            <div class="container">
            
                <div class="section-header">
                    <?php if( !empty($features_section_image) ) : ?>
                        <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                    <?php endif; ?>
                    <h2><?php echo $features_section_title; ?></h2>
                </div>
                
                <div class="row">
                    
                    <!-- Course features from custom post type course_feature -->
                    <?php $loop = new WP_query(array('post_type'=>'course_feature', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
                    
                    <?php while($loop->have_posts()) : $loop->the_post();?>
                        <div class="col-sm-2">
                            <i class="<?php the_field('course_feature_icon'); ?>"></i>
                            <h4><?php echo the_title(); ?></h4>
                        </div>
                    <?php endwhile; wp_reset_query();?>    
                    <!-- wp_reset_query(); Resets the query - So that the query date is available to another new query -->
                </div>
            </div>
        </section>
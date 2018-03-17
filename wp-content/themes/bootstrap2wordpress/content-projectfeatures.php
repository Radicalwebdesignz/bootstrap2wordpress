<?php 

    //Project Features section template part - Referenced this in home-page.php

    //Getting data from custom fields - Project section
    $project_feature_title = get_field('project_feature_title');
    $project_feature_body = get_field('project_feature_body');

?>

		<!-- PROJECT FEATURES -->
        <section id="project-features">
            <div class="container">
            
                <h2><?php echo $project_feature_title; ?></h2>
                <p class="lead"><?php echo $project_feature_body; ?></p>
                
                <div class="row">
                    
                    <?php $projectLoop = new WP_query(array('post_type'=>'project_feature', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
                    
                    <?php while($projectLoop->have_posts()) : $projectLoop->the_post();?>
                        <div class="col-sm-4">
                            <?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail');
                                }
                            ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    <?php endwhile; wp_reset_query();?>
                    <!-- wp_reset_query(); Resets the query - So that the query date is available to another new query --> 

                </div>
                
            </div>
        </section>
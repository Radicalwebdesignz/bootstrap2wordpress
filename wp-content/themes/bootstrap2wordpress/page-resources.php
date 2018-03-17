<?php 
    
    /*
        Template Name: Reosurces Page
     */
    get_header();

    //Get the url of the featured image from pages - resources page
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

?>

        <!-- FEATURED IMAGE -->
        <!-- Check if you have a image for featured image -->
        <?php if (has_post_thumbnail()) :?>
            <section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size:cover;" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title(); ?></h1>
            </section>
        <?php else :?> <!-- If no image, fallback to this image -->
            <section class="feature-image feature-image-default" data-type="background" data-speed="2">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </section>
        <?php endif; ?>
        

        <!-- MAIN CONTENT -->

        <div class="container">
            <div class="row" id="primary">
            
                <div id="content" class="col-sm-12">
                    
                    <!-- We cannot use variables created for custom fields to pull the custom fields data inside the loop, hence we can directly use the commands inside it or we can create variable inside the loop nad use them - Both codes shown below

                    <section class="main-content">
                        <?php while(have_posts()) : the_post();?>
                            <?php the_content(); ?>
                        <?php endwhile; ?> 
                        
                        <hr>
                        
                        <div class="resource-row clearfix">

                            <?php $resourcesLoop = new WP_query(array('post_type'=>'add_resources', 'orderby'=>'post_id', 'order'=>'ASC')); ?>

                            <?php while($resourcesLoop->have_posts()) : $resourcesLoop->the_post();?>
                                <div class="resource">

                                    <img src="<?php echo get_field('resources_image')['url']; ?>" alt="<?php echo get_field('resources_image')['alt']; ?>">
                                      
                                    <h3><a href="<?php the_field('resource_url'); ?>"><?php the_title(); ?></a></h3>

                                    <?php the_content(); ?>

                                    <?php if (!empty(the_field('button_text'))) : ?>
                                        <a href="<?php the_field('resource_url'); ?>" class="btn btn-success"><?php the_field('button_text')?></a>
                                    <?php endif; ?>   

                                </div>
                            <?php endwhile; wp_reset_query();?>

                        </div>
                    </section>
                    -->
                    
                    <!-- OR -->

                    <section class="main-content">
                        <?php while(have_posts()) : the_post();?>
                            <?php the_content(); ?>
                        <?php endwhile; ?> 
                        
                        <hr>
                        
                        <div class="resource-row clearfix">

                            <?php $resourcesLoop = new WP_query(array('post_type'=>'add_resources', 'orderby'=>'post_id', 'order'=>'ASC')); ?>

                            <?php while($resourcesLoop->have_posts()) : $resourcesLoop->the_post();?>
                                <div class="resource">
                                    <?php 

                                        //Get the custom fields resources value 
                                        $resources_image = get_field('resources_image');
                                        $resource_url = get_field('resource_url');
                                        $add_button = get_field('add_button');
                                        $button_text = get_field('button_text');

                                    ?>
                                    <img src="<?php echo $resources_image['url']; ?>" alt="<?php echo $resources_image['alt']; ?>">
                                      
                                    <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>

                                    <?php the_content(); ?>
                                    
                                    <?php if (!empty($button_text)) : ?>
                                        <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                                    <?php endif; ?>   

                                </div>
                            <?php endwhile; wp_reset_query();?>

                        </div>
                    </section>
                    
                </div><!-- content -->
                        
            </div><!-- primary -->
        </div><!-- container -->

<?php get_footer(); ?>
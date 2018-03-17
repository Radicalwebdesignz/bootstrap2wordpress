<?php 

    //Who Benefits section template part - Referenced this in home-page.php

    //Getting data from custom fields - Benefits section
    $section_image = get_field('section_image');
    $section_title = get_field('section_title');
    $section_body = get_field('section_body');

?>


        <!-- WHO BENEFITS -->
        
        <section id="who-benefits">
            <div class="container">
                
                <div class="section-header">
                    <?php if( !empty($section_image) ) : ?>
                        <img src="<?php echo $section_image['url']?>" alt="<?php echo $section_image['alt']?>">
                    <?php endif; ?>
                    <h2><?php echo $section_title;?></h2>
                </div>
                
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                    
                        <p><?php echo $section_body;?></p>

                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>
        </section>

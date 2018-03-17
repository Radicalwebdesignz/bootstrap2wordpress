<?php 

	//Video Featurette section template part - Referenced this in home-page.php

    //Getting data from custom fields - Video section
    $video_section_title = get_field('video_section_title');
    $upload_video = get_field('upload_video');
?>

        <!-- VIDEO FEATURETTE -->

        <section id="featurette">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h2><?php echo $video_section_title ; ?></h2>
                        
                            <?php if (!empty($upload_video)) :?>
                                <iframe width="560" height="315" src="<?php echo $upload_video; ?>" frameborder="0" allowfullscreen></iframe>
                            <?php else :?>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>    
                            <?php endif; ?>
                        
                    </div>
                    <div class="col-sm-2"></div>
                </div>        
            </div>
        </section>
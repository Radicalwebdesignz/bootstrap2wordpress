<?php 
	
	//HERO section template part - Referenced this in home-page.php

    //Getting data from custom fields - Hero section
    $Prelaunch_price = get_post_meta(14, 'Prelaunch_price', true);
    $Launch_price = get_post_meta(14, 'Launch_price', true);
    $Final_price = get_post_meta(14, 'Final_price', true);
    $optin_btn_url = get_post_meta(14, 'optin_btn_url', true);
    $optin_btn_text = get_post_meta(14, 'optin_btn_text', true);

?>

	        
        <!-- HERO SECTION -->
        <section id="hero" data-type="background" data-speed="5">
            <article>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                        </div>
                        <div class="col-sm-7 hero-text">
                            <h1><?php bloginfo('name')?></h1>
                            <p class="lead">
                                <?php bloginfo('description');?>
                            </p>
                            <div id="price-timeline">
                                <div class="price active">
                                    <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                                    <span><?php echo $Prelaunch_price;?></span>
                                </div>
                                <div class="price">
                                    <h4>Launch Price <small>Coming soon!</small></h4>
                                    <span><?php echo $Launch_price;?></span>
                                </div>
                                <div class="price">
                                    <h4>Final Price <small>Coming soon!</small></h4>
                                    <span><?php echo $Final_price;?></span>
                                </div>
                            </div>
                            <p><a class="btn btn-lg btn-danger" href="<?php echo $optin_btn_url;?>" role="button"><?php echo $optin_btn_text;?></a></p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

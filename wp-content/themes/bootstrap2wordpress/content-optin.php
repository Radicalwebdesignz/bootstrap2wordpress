<?php 

	//Optin section template part - Referenced this in home-page.php
    
    //Getting data from custom fields - Optin section
    $optin_text = get_post_meta(14, 'optin_text', true);

?>

		<!-- OPT IN SECTION -->
        <section id="optin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="lead"><?php echo $optin_text; ?></p>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                            Click here to subscribe
                        </button>
                    </div>
                </div>
            </div>
        </section>

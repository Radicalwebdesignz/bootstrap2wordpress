<?php

    //Instructor section template part - Referenced this in home-page.php

    //Getting data from custom fields - Instructors section
    
    $instructor_title = get_field('instructor_title');
    $instructor_name = get_field('instructor_name');
    $instructor_bio = get_field('instructor_bio');
    $instructor_details = get_field('instructor_details');
    $number_of_students = get_field('number_of_students');
    $number_of_reviews = get_field('number_of_reviews');
    $number_of_courses = get_field('number_of_courses');
    $facebook = get_field('facebook');
    $twitter = get_field('twitter');
    $google_plus = get_field('google_plus');

?>

        <!-- INSTRUCTOR SECTION -->
        <section id="instructor">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2><?php echo $instructor_title; ?> <small><?php echo $instructor_name; ?></small></h2>
                            </div><!-- end col -->
                            <div class="col-lg-4">
                                <?php if (!empty($twitter)) :?>
                                    <a href="http://twitter.com/<?php echo $twitter; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($facebook)) :?>
                                    <a href="http://facebook.com/<?php echo $facebook; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                <?php endif; ?>
                                <?php if (!empty($google_plus)) :?>
                                    <a href="http://plus.google.com/<?php echo $google_plus; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <?php endif; ?>
                            </div><!-- end col -->
                        
                        </div><!-- row -->
                        
                        <p class="lead"><?php echo $instructor_bio; ?><p>
                        
                        <p><?php echo $instructor_details; ?></p>
                        
                        <hr>
                        
                        <h3>The Numbers <small class="text-muted">They Don't Lie</small></h3>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        <?php echo $number_of_students; ?> <span>students</span>
                                    </div><!-- num-content -->
                                </div><!-- num -->
                            </div><!-- end col -->
                            
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        <?php echo $number_of_reviews; ?> <span>reviews</span>
                                    </div><!-- num-content -->
                                </div><!-- num -->
                            </div><!-- end col -->
                            
                            <div class="col-xs-4">
                                <div class="num">
                                    <div class="num-content">
                                        <?php echo $number_of_courses; ?> <span>courses</span>
                                    </div><!-- num-content -->
                                </div><!-- num -->
                            </div><!-- end col -->
                        </div><!-- row -->
                        
                    </div><!-- end col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- instructor -->
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Google Fonts - Use: " font-family: 'Raleway', sans-serif; " to reference it-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
		
		<!-- HEADER SECTION -->
	    <header class="site-header" role="banner">
		    <div class="navbar-wrapper">
		        <nav class="navbar navbar-expand-lg navbar-toggleable-md navbar-dark bg-dark fixed-top">
		            <div class="container">
		                <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="Bootstrap To Wordpress"></a>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		                    <span class="navbar-toggler-icon"></span>
		                </button>
						
						<!-- wp_nav_menu function -->

                        <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 MEANING - If the menu is not set in dashboard the below wp_nav_menu will not work-->

                        <?php
                            wp_nav_menu( array(
							    'theme_location'	=> 'menu-1',
							    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse',
								'container_id'		=> 'navbarSupportedContent',
								'menu_class'		=> 'navbar-nav ml-auto',
							    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
							    'walker'			=> new WP_Bootstrap_Navwalker()
							) );
							?>
                        
                        <!-- The above php code is replacing the below commented code -->
						<!--  
		                <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                    <ul class="navbar-nav ml-auto">
		                        <li class="nav-item active">
		                            <a class="nav-link" href="/">Home</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="blog.html">Blog</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="resources.html">Resources</a>
		                        </li>
		                        <li class="nav-item">
		                            <a class="nav-link" href="contact.html">Contact</a>
		                        </li>
		                    </ul>
		                </div>
		                -->

		            </div>
		        </nav>    
		    </div>
		</header>
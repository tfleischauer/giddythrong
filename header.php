<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <!-- Remy Sharp Shim --> 
    <!--[if lt IE 9]> 
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
    <![endif]-->  

    <!-- sans-serif typefaces -->
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'> <!-- similar to Futura -->
 
    <!-- serif typefaces -->
    <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>  

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    
    <!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
    <!-- jQuery local library -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.min.js"></script>
        
	<!-- bxSlider Javascript file -->
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
		<link href="<?php bloginfo('template_url'); ?>/lib/jquery.bxslider.css" rel="stylesheet" />
        
        
		<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
        
        <meta name="viewport" content="initial-scale=1">

	  <?php /*?> Always have wp_head() just before the closing </head>
	   tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header-wide">
            <header class="page-wrapper">
                <div id="utility">
                
                  <ul id="media-icons">
                    <li class="first-in-html-list"><a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/icons-pinterest-white-24x24.png" alt="Icon: link to Pinterest"></a></li>
                    <li><a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/icons-facebook-white-24x24.png" alt="Icon: link to Facebook"></a></li>
                    <li class="last-in-html-list"><a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/icons-twitter-white-24x24.png" alt="Icon: link to Twitter"></a></li>
                  </ul>
                        
                  <!--<form id="search-bar">
                      <input type="search" size="14" maxlength="16" name="search-input" placeholder="Search..." />
                  </form>-->
                  
                  <?php get_sidebar( 'header' ); ?>
                
                </div> <!-- end utility -->  
                          
                <!-- Begin Logo -->
                  <h1>
                      <a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span>
                          <img src="<?php bloginfo('template_url'); ?>/images/logo-4-280x35px-white.png" width="280" height="35" id="logo" alt="<?php bloginfo('name'); ?>" />
                      </a>
                  </h1>
                  
                  <p  id="tagline"><?php bloginfo('description'); ?></p>
                <!-- End Logo -->
           </header>
    </div> <!-- end header-wide -->   

<!-- START NAVIGATION -->
 <div id="nav-wide">
        <a href="#nav-main" class="nav-collapse" id="nav-collapse">Menu &equiv;</a>
        <nav id="nav-main" class="page-wrapper">

			<?php wp_nav_menu( array( 
                        'theme_location' => 'nav-main' ,
                        'menu' => 'Nav-Main' ,
                        'container'  => 'ul', 
            
                    ) ); ?>
                    
            <div class="clear"></div>
        </nav> <!-- end nav-main -->
      </div> <!-- end nav-wide -->
<!-- END NAVIGATION -->

<!-- START MIDDLE -->
<!--<div id="middle-content-wrapper">-->


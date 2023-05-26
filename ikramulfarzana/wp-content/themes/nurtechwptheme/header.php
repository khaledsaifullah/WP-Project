<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Latest compiled and minified CSS for bootstrap-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme for bootstrap-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/3.2.0/css/bootstrap-theme.min.css">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

 
<link href="<?php echo get_template_directory_uri(); ?>/menu.css" rel="stylesheet">

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 165 || document.documentElement.scrollTop > 165) {
    document.querySelectorAll('.header-top-menu')[0].className = "header-top-menu sticky-header-menu";
  } else {
    document.querySelectorAll('.header-top-menu')[0].className = "header-top-menu ";
  }
}
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header-section">
	<div  class="header-content-section">
    	<?php //echo do_shortcode( '[logo]' ); ?>
        <div class="company-logo"><a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Company Logo"></a></div>
 <div class="social-link">
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.png" alt="social" />
    </a>
	<a target="_blank" href="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="social" />
    </a>
 </div>
        
       
		<a href="<?php echo home_url( '/apply-now' ); ?>" class="donatenow-header">Want To Apply ?</a>
        <div class="sologan-text">
            <?php echo get_option('slogan_text') ?>
        </div>
<div class="header-search-box">
<?php get_search_form(); ?>
		</div>		
		
    </div>
</header>
<section class="header-top-menu">
<div class="main-menu">
    <div class="header-menu">
        <nav id="nav" class="navbar navbar-default menu-main-container" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header visible-xs">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <?php
                        wp_nav_menu( array(
                                'menu'              => 'main-menu',
                                'theme_location'    => 'primary',
                                'depth'             => 3,
                                'container'         => '',
                                'container_class'   => 'menu-header',
                                'menu_class'        => 'main-menu nav navbar-nav no-float',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div><!-- /.navbar-collapse -->
                </nav>
    </div>
 </div>
</section>



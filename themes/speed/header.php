<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

   <header class="header">

         <div class="site-branding">
            <a href="#slider-section" rel="m_PageScroll2id">
               <div class="logo-cont"></div>
            </a>
   		</div><!-- .site-branding -->


         <!-- <div class="head-right-cont"> -->


         <div class="social-cont-lowres">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-facebook.svg" alt="facebook icon" /></a>
            <a href="https://www.instagram.com/elmostix.visualpoi/"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-instagram.svg" alt="instagram icon" /></a>
            <a href="https://www.youtube.com/channel/UCtsmnpTCq4hcguTFJoaJQgA"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-youtube.svg" alt="youtube icon" /></a>
         </div>


            <!-- .site-navigation -->
            <nav id="site-navigation" class="main-navigation" role="navigation">


            			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            </nav><!-- #site-navigation -->


            <div class="social-cont">
               <a href="#"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-facebook.svg" alt="facebook icon" /></a>
               <a href="https://www.instagram.com/elmostix.visualpoi/"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-instagram.svg" alt="instagram icon" /></a>
               <a href="https://www.youtube.com/channel/UCtsmnpTCq4hcguTFJoaJQgA"><img src="<?php bloginfo('template_url'); ?>/dev/img/icon-youtube.svg" alt="youtube icon" /></a>
            </div>

         <!-- </div> -->
         <!-- head-right-cont -->
   </header><!-- header -->

	<div id="content" class="site-content">
      <!-- <div class="row"> -->

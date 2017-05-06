<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acc_wp_project
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<title> 
  <?php bloginfo('name'); ?> | 
  <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
</title>


<!-- Latest compiled and minified JavaScript -->
<?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default nav-color">
  <div class="container-fluid">

  <a class="navbar-brand" href="http://muniroute.com" style="margin-right: 38.5px">
		<img src="http://giiam.org/MuniRoutev2/img/logo.png" height="40" width="65" style="position: absolute; margin: auto; top: 0; left: 200; bottom: 0; margin-left: 60px;">
		<p style="margin-left: 140px;">MuniRoute™</p>
	</a>
  <div class="pull-right">
    <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
              );
          ?>
  </div>
  </div><!-- /.container-fluid -->
</nav>

<script type="text/javascript">
 jQuery(window).load(function () {
 	  jQuery('a[title="Book"], a[title="Image"], a[title="Audio"]').attr('download', '');
 });
</script>


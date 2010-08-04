<?php
/**
 * Theme header
 * @package WordPress
 * @subpackage utacatholics.org
 * @since utacatholics.org 1.0
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php
	bloginfo('name');
  wp_title(' | ' );
	?></title>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link href="<?php bloginfo( 'template_url' ); ?>/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo( 'template_url' ); ?>/css/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if lt IE 8]>
      <link href="<?php bloginfo( 'template_url' ); ?>/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
</head>

<body class="bp two-col">
<div id="wrap"><div id="main">
<header id="page-header">
  <div class="container">
  <div id="logo"><a href="<?php echo get_bloginfo( 'url' );?>">University Catholic Community</a></div>
  <div id="actionbuttons">
    New Student?<br />
    <a href="<?php echo get_bloginfo( 'url'); ?>/register" class="awesome blue" id="registernow">Register now</a>
    <a href="http://www.facebook.com/group.php?gid=12933052751" class="awesome blue" id="joinfacebook">Facebook</a>
  </div>
  <nav>
    <?php get_template_part( 'navigation'); ?>  
  </nav>
  </div>
</header>


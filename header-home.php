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
  <link href="<?php bloginfo( 'template_url' ); ?>/css/home.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo( 'template_url' ); ?>/css/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if lt IE 8]>
      <link href="css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
  <script>
    $(document).ready(function () {
      $('.box').hover(function() {
        $('.cover', this).stop().animate({height:'125px'},{queue:false,duration: 250});
      }, function() {
        $('.cover', this).stop().animate({height:'45px'},{queue:false,duration: 250});
      });
    });
  </script>
</head>

<body class="bp two-col">
<div id="wrap"><div id="main">
<header id="page-header">
  <div class="container">
  <div id="logo"><a href="#">University Catholic Community</a></div>
  <div id="actionbuttons">
    New Student?<br />
    <a href="#" class="awesome blue" id="registernow">Register now</a>
    <a href="#" class="awesome blue" id="joinfacebook">Facebook</a>
  </div>
  <nav>
    <ul>
      <li class="nav home"><a href="#" class="active"><span>HOME</span><br />Return to the start</a></li>
      <li class="nav about"><a href="#"><span>ABOUT</span><br />Learn who we are</a></li>
      <li class="nav events"><a href="#"><span>EVENTS</span><br />Join our activities</a></li>
      <li class="nav media"><a href="#"><span>MEDIA</span><br />See our pictures</a></li>
      <li class="nav links"><a href="#"><span>LINKS</span><br />Visit our firends</a></li>
      <li class="nav contact"><a href="#"><span>CONTACT</span><br />Meet us in person</a></li>
    </ul>
  </nav>
  </div>
</header>


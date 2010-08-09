<?php
/**
Template Name: Home
**/

get_header('home'); ?>

<div id="content">
<div class="container">

<div id="article-container">
    <img src='<?php bloginfo( 'template_url' ); ?>/images/main-graphic3.jpg' />
    <div id="smallboxes">
      <div class="box"><a href="/events">
        <img src='<?php bloginfo( 'template_url' ); ?>/images/action-graphic-cartwheel.jpg' />
        <div class="cover">
          <span>Events</span>
        </div></a>
      </div>
      <div class="box"><a href="#">
        <img src='<?php bloginfo( 'template_url' ); ?>/images/action-graphic-blog.jpg' />
        <div class="cover">
          <span>Photos</span>
        </div></a>
      </div>
      <div class="box last"><a href="/staff">
        <img src='<?php bloginfo( 'template_url' ); ?>/images/action-graphic-jumping.jpg' />
        <div class="cover">
          <h2>Staff</h2>
          <p>Who We Are</p> 
        </div></a>
      </div>
    </div>

  <?php 
    get_template_part( 'loop', 'index');
  ?>

  </div>
  <div id="sidebar">
    <h2>Join us!</h2>
    <p>12:10 PM Wednesday for Lunch<br />
    5:30 PM Sunday for Weekend Mass</p>
    <h2>Visit Us!</h2>
    <p>9-5 Monday - Friday <br />
    4-8 Sunday <br />
    (817) 460-1155</p>
    <p><a href="<?php get_bloginfo('url'); ?>/location">1010 Benge Street <br />
    Arlington, Texas 76013</a></p>
    <div id="calendar-list">
      <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar()) ; ?>

    </div> 

  </div>


</div> <!-- .container -->
</div> <!-- #content -->


<?php get_footer(); ?>

<?php
/**
Template Name: Home
**/

get_header('home'); ?>

<div id="content">
<div class="container">

<div id="article-container">
    <img src='<?php bloginfo( 'template_url' ); ?>/images/ucc-main.jpg' />
    <div id="smallboxes">
      <div class="box"><a href="http://www.google.com/calendar/embed?src=universitycatholiccommunity%40gmail.com&ctz=America/Chicago">
        <img src='<?php bloginfo( 'template_url' ); ?>/images/action-graphic-cartwheel.jpg' />
        <div class="cover">
          <h2>Events</h2>
          <p>Our Calendar of Events</p>
        </div></a>
      </div>
      <div class="box"><a href="/media">
        <img src='<?php bloginfo( 'template_url' ); ?>/images/action-graphic-blog.jpg' />
        <div class="cover">
          <h2>Media</h2>
          <p>Weekly Bulletin, Photos and Video</p>
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
    <p>12:00 PM Wednesday for Lunch<br />
    5:30 PM Sunday for Weekend Mass</p>
    <h2>Visit Us!</h2>
    <p>12-5 Monday - Friday <br />
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

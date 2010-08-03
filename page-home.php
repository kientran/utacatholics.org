<?php
/**
Template Name: Home
**/

get_header('home'); ?>

<div id="content">
<div class="container">

<div id="top-main">
    <img src='<?php bloginfo( 'template_url' ); ?>/images/main-graphic3.jpg' />
    <div id="smallboxes">
      <div class="box"><a href="#">
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
      <div class="box last"><a href="#">
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
    <h2>Join us for Mass</h2>
    <p>12:10 PM Wednesday followed by Lunch<br />
    5:30 PM Sunday</p>
    <h2>Visit Us!</h2>
    <p>9-5 Monday - Friday <br />
    4-8 Sunday <br />
    (817) 555-1234</p>
    <p>1010 Benge Street <br />
    Arlington, Texas 76013</p>
    <div id="calendar-list">
      <h2>Upcoming Events</h2>
      <ul>
        <li><a href="#">This Event</a><br>
        January 1 | 10:00am - 11:00am
        </li>
        <li><a href="#">This Event</a><br>
        March 1 | 10:00am - 11:00am
        </li>
        <li><a href="#">This Event</a><br>
        March 1 - 10:00am - 11:00am
        </li>
      </ul>
    </div> 

  </div>


</div> <!-- .container -->
</div> <!-- #content -->


<?php get_footer(); ?>

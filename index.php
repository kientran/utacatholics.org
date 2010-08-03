<?php
/**
  * The Main Template file.
**/

get_header(); ?>

<div id="content">
<div class="container">

<?php get_template_part('loop', 'index') ?>


<?php get_sidebar(); ?>

</div> <!-- .container -->
</div> <!-- #content -->


<?php get_footer(); ?>

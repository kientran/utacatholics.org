<?php
/**
  * The Main Template file.
**/

get_header(); ?>

<div id="content">
<div class="container">
<div id="article-container">
<?php get_template_part('loop', 'index') ?>

</div>
<?php get_sidebar(); ?>

</div> <!-- .container -->
</div> <!-- #content -->


<?php get_footer(); ?>

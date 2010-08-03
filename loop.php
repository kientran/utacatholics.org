<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header><h1><?php the_title(); ?></h1></header>

  <?php if (is_archive() || is_search() ) : ?>
    <section class="post-summary">
      <?php the_excerpt(); ?>
    </section>
 <?php else : ?>
    <section class="post-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
		</section><!-- .entry-content -->
	<?php endif; ?>

</article>
<?php endwhile; // End of main loop. ?>

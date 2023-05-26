<?php get_header(); ?>
<section class="inner-section">
	<div class="inner-content-body">
    <article id="post-250" class="post-250 page type-page status-publish has-post-thumbnail hentry">
    <?php if ( have_posts() ) : ?>
			<header class="entry-header-page"><h2><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h2></header>
		<?php else : ?>
			<header class="entry-header-page"><h2><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h2>
            </header>
		<?php endif; ?>
   
	<div class="entry-content">
		 <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>
	</div><!-- .entry-content -->
</article>
 	</div>
 </section>
<?php get_footer();?>




 
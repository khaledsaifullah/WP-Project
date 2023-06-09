<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-page">
		<h2><?php the_title(); ?></h2>
 	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content();	?>
		<?php the_post_thumbnail(); ?> 
	</div><!-- .entry-content -->
</article><!-- #post-## -->

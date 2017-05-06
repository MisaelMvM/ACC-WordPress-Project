<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package acc_wp_project
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'accproject' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->	
</article><!-- #post-## -->

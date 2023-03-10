<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="layer-622-holder">
		<div class="copy-intro">
			<p class="breadcrumb-text">Home / Pages / <strong class="text-style"><?php the_title(); ?></strong></p>
			<?php 
				the_title( '<h2 class="contact">', '</h2>' ); 
				the_content();
			?>
			
		</div>

        <br><br>

	<?php ct_custom_post_thumbnail(); ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'ct-custom' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

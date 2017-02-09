<?php
/**
 * The template for displaying Author bios
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */
?>

<div class="author-info">
	<h3 class="author-heading"><?php _e( 'Autor', 'jpcom' ); ?></h3>
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @since Twenty Fifteen 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */

		echo get_avatar( get_the_author_meta( 'user_email' ) );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h4 class="author-title"><?php echo get_the_author(); ?></h4>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			
		</p><!-- .author-bio -->

	</div><!-- .author-description -->
</div><!-- .author-info -->

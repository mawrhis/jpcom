 <?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */
?>

<article class="post_home" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        // Post thumbnail.
        the_post_thumbnail( );
    ?>

    <header class="entry-header">
        <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;
        ?>
    </header><!-- .entry-header -->

</article><!-- #post-## -->
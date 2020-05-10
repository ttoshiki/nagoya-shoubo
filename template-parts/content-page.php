<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagoya-shoubo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php nagoya_shoubo_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        the_title('<h1 class="entry-title">', '</h1>');

        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'nagoya-shoubo'),
            'after'  => '</div>',
        ));
        ?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

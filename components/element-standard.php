<?php
/**
 * Template part for displaying posts and pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UWC_Website
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'category-post' ); ?>>
	<?php if ( get_field( 'feed_image' ) ) :
		$image = get_field( 'feed_image' );
		$size = 'medium';
		$url = $image['sizes'][ $size ];
		?>
		<a class="category-image" style="background-image: url(<?php echo esc_url( $url ); ?>)" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"></a>
	<?php elseif ( has_post_thumbnail() ) : ?>
		<a class="category-image" style="background-image: url(<?php the_post_thumbnail_url( 'medium' ); ?>)" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"></a>
	<?php endif; ?>
	<div class="category-text">

	<?php if ( is_sticky() ) : ?>
		<span class="sticky"><?php echo esc_html__( 'Featured', 'uwc-website' ); ?></span>
	<?php endif; ?>

		<header class="header -category">
		<?php the_title( '<h2 class="category-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header>
		<p class="category-body"><?php the_excerpt(); ?></p>

		<?php echo '<a class="category-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html__( 'Weiter lesen', 'uwc-website' ) . '</a>'; ?>
	</div>
</article> <!-- // post-## -->

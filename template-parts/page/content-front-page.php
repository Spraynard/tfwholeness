<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<?php twentyseventeen_edit_link( get_the_ID() ); ?>
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->
			<div id="front-testimonials">
				<?php $args = array(
					'posts_per_page' => 5,
					'category_name' => 'Testimonial');
				$posts_array = get_posts( $args ); ?>
					<h3 style="display: inline-block; padding-right: 5px;">Testimonials</h3><span class="smaller">-Please go to 	the <a style="text-decoration: underline" href="/thirstingforwholeness/testimonials">Testimonials Page</a> to see all testimonials!</span>
				<?php
				foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="testimonial">
						<?php the_excerpt(); ?>
						<div class="t-quotee">
							- <?php the_meta(); ?>
						</div>
					</div>
					<?php if (array_search($post, $posts_array) !== sizeof($posts_array) - 1) {
						echo '<hr>';
					}?>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div><!-- #front-testimonials -->
		</div><!-- .wrap -->
	</div><!-- .panel-content -->
</article><!-- #post-## -->


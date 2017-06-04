<?php
/**
 * Template part for displaying `testimonial` page content in page.php
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
	<div class="wrap">
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<div id="front-testimonials">
				<?php $args = array(
					'posts_per_page' => - 1 ,
					'category_name' => 'Testimonial');
				$posts_array = get_posts( $args ); ?>
					<h3 style="display: inline-block; padding-right: 5px;">Testimonials</h3>
				<?php
				foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="testimonial">
						<?php the_content(); ?>
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
				</div><!-- .page-body -->
			</div><!-- #front-testimonials -->
		</div><!-- .entry-content -->
	</div> <!-- .wrap -->
</article><!-- #post-## -->
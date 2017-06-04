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
	<div class="wrap">
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<div id="frequently-asked-questions">
				<?php $args = array(
					'posts_per_page' => -1,
					'category_name' => 'FAQ',
					'order' => 'ASC');
				$posts_array = get_posts( $args ); ?>
				<h1>Frequently Asked Questions</h1>
				<?php
				foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="question">
						<div class="question-title">
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="question-body">
							<?php the_content(null); ?>
						</div>
					</div>
				<?php if (array_search($post, $posts_array) !== sizeof($posts_array) - 1) {
					echo '<hr>';
				}?>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
		</div><!-- .entry-content -->
	</div> <!-- .wrap -->
</article><!-- #post-## -->
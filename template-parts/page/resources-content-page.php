<?php
/**
 * Template part for displaying page content in page-resources.php
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
			<div class="body-header">Reading</div>
			<hr>
			<!-- List all `Meditation` category books -->
			<h3>Meditation</h3>
			<div id="meditation-books" class="book-wrapper">
				<?php $args = array(
						'posts_per_page' => -1,
						'category_name' => 'Meditation',
						'order' => 'ASC');
					$posts_array = get_posts( $args ); ?>
					<?php
					foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="book">
						<div class="book-pic">
							<?php  echo get_the_post_thumbnail($post = $post, $size = array(150,250)); ?>
						</div>
						<div class="book-title">
							<strong><?php the_title(); ?></strong>
						</div>
						<div class="book-author">
							<?php the_meta(); ?>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div>
			<!-- List all `Allegorical` category books -->
			<h3>Allegorical</h3>
			<div id="allegorical-books" class="book-wrapper">
				<?php $args = array(
						'posts_per_page' => -1,
						'category_name' => 'Allegorical',
						'order' => 'ASC');
					$posts_array = get_posts( $args ); ?>
					<?php
					foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="book">
						<div class="book-pic">
							<?php  echo get_the_post_thumbnail($post = $post, $size = array(150,250)); ?>
						</div>
						<div class="book-title">
							<strong><?php the_title(); ?></strong>
						</div>
						<div class="book-author">
							<?php the_meta(); ?>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div>
			<!-- List all `Mind-Body Connection` category Books -->
			<h3>Mind-Body Connection</h3>
			<div id="mind-body-connection-books" class="book-wrapper">
				<?php $args = array(
						'posts_per_page' => -1,
						'category_name' => 'Mind-Body Connection',
						'order' => 'ASC');
					$posts_array = get_posts( $args ); ?>
					<?php
					foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="book">
						<div class="book-pic">
							<?php  echo get_the_post_thumbnail($post = $post, $size = array(150,250)); ?>
						</div>
						<div class="book-title">
							<strong><?php the_title(); ?></strong>
						</div>
						<div class="book-author">
							<?php the_meta(); ?>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div>
			<!-- List all `Spiritual Growth` category books -->
			<h3>Spiritual Growth</h3>
			<div id="spiritual-growth-books" class="book-wrapper">
				<?php $args = array(
						'posts_per_page' => -1,
						'category_name' => 'Spiritual Growth',
						'order' => 'ASC');
					$posts_array = get_posts( $args ); ?>
					<?php
					foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="book">
						<div class="book-pic">
							<?php  echo get_the_post_thumbnail($post = $post, $size = array(150,250)); ?>
						</div>
						<div class="book-title">
							<strong><?php the_title(); ?></strong>
						</div>
						<div class="book-author">
							<?php the_meta(); ?>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div>
			<!-- List all `Recovery` category books -->
			<h3>Recovery</h3>
			<div id="recovery-books" class="book-wrapper">
				<?php $args = array(
						'posts_per_page' => -1,
						'category_name' => 'recovery-book',
						'order' => 'ASC');
					$posts_array = get_posts( $args ); ?>
					<?php
					foreach ( $posts_array as $post): setup_postdata( $post );?>
					<div class="book">
						<div class="book-pic">
							<?php  echo get_the_post_thumbnail($post = $post, $size = array(150,250)); ?>
						</div>
						<div class="book-title">
							<strong><?php the_title(); ?></strong>
						</div>
						<div class="book-author">
							<?php the_meta(); ?>
						</div>
					</div>
				<?php
				endforeach;
				wp_reset_postdata();
				$row_count = 1;
				?>
			</div>
		</div><!-- .entry-content -->
	</div> <!-- .wrap -->
</article><!-- #post-## -->
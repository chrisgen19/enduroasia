<?php /* Template Name: About Us Template */ get_header(); ?>

	<main role="main" id="about_us">
		<!-- section -->

		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">
				<?php edit_post_link(); ?>

				<?php 
					$query = new WP_Query(array('post_type' => 'post','category_name' => 'staff'));
					$posts = $query->get_posts();
					echo "<pre>";
					print_r($posts);
					echo "</pre><br><br><br>";

					// The Loop
					if ( $query->have_posts() ) {
						echo '<ul>';
						while ( $query->have_posts() ) {
							$query->the_post();
							$image = rwmb_meta( 'your_prefix_image', 'type=image&size=meduim' );
							// echo $image['url'];
							// 
							echo "<pre>";
							print_r($image);
							echo "</pre><br><br>". $image ."sdf<br>";

							// echo "<a href='{" . $image['261']['full_url'] . "}' rel='lightbox'><img src='{" . $image['url'] . "}' width='{" . $image['width'] . "}' height='{" . $image['height'] . "}' alt='{" . $image['alt'] . "}' /></a>";
							echo rwmb_meta( 'your_prefix_jobdesc', $args = array(), $post_id = get_the_id()) . ' of ' . rwmb_meta( 'your_prefix_company', $args = array(), $post_id = get_the_id());
							echo '<li>' . get_the_title() . '</li>';
							echo '<li>' . get_the_content() . '</li><br><br>';

							
						}
						echo '</ul>';
						/* Restore original Post Data */
						wp_reset_postdata();
					} else {
						// no posts found
					}
				 ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
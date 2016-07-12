<?php get_header(); ?>

	<?php if ( is_page('home')) : ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 style="display:none;"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<br class="clear">

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
	
	<?php else : ?>

	<main role="main">
		<!-- section -->
		<section class="custom-page">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

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
	
	<?php endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php get_header(); ?>
				
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/home.css">
	<main role="main">

		<!-- section -->
		<section>
			<div class="container">
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

		</section>
		<!-- /section -->
	
	</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>


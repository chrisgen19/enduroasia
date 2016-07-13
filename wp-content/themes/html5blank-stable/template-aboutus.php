<?php /* Template Name: About Us Template */ get_header(); ?>

	<main role="main" id="about_us">
		<!-- section -->
		<div class="container-fluid">
			<section>

			<!-- <h1><?php the_title(); ?></h1> -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="col-xs-12" id="about-article">
					<h1 style='color: whitesmoke; font-size: 80px; font-weight: lighter; padding-bottom: 20px; text-align:center; letter-spacing: 3px;'>Asian Enduro Series</h1>
						<?php the_content(); ?>
						
					</div>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">
					<!-- <?php edit_post_link(); ?> -->
					
					<div class="col-lg-12" id="tbl_enduro-staff">
					<h1 style='color: whitesmoke; font-size: 80px; font-weight: lighter; padding-bottom: 20px; text-align:center; letter-spacing: 3px;'>Staff</h1>
							<table class="table table-responsive table-striped">
								<tbody>
									
									<?php 
										$ctr = 0;
										$query = new WP_Query(array('post_type' => 'post','category_name' => 'staff'));
										$posts = $query->get_posts();
										// echo "<pre>";
										// print_r($posts);
										// echo "</pre><br><br><br>";

										// The Loop
										if ( $query->have_posts() ) {
											while ( $query->have_posts() ) {
												echo ($ctr%2 == 0) ? '<tr style="font-weight: 300;">' : '<tr style="color:whitesmoke; font-weight: lighter;">';
												$query->the_post();
												$image = rwmb_meta( 'your_prefix_image', 'type=image&size=meduim' );

												$image = rwmb_meta( 'your_prefix_image', 'type=image');

													foreach ($image as $key => $value) {
													echo '<td><img src="' . $image[$key]['full_url'] . '" width="100%"/></td>';
												}	
												
												
												echo '<td style="padding:30px;"><p class="staff_name">'. get_the_title() . '</p>';
												echo '<p class="staff_title">' . rwmb_meta( 'your_prefix_jobdesc', $args = array(), $post_id = get_the_id()) . '</p>';
												echo '<article class="staff_desc">'.  get_the_content() . '</article></td>';
												echo '</tr>';
												$ctr++;
											}

											/* Restore original Post Data */
											wp_reset_postdata();

										} else {
											// no posts found
										}
									 ?>
								</tbody>
						</table>
					</div>

					<div class="col-lg-10" id="tbl_enduro-testimonials" style="color: whitesmoke;  text-align:center;">
					<label style='color: whitesmoke; font-size:36px; font-weight: lighter; letter-spacing: 3px;'>Testimonials</label>
						
						<table class="table table-responsive">
							<tbody>
								
								 <?php 

									$query = new WP_Query(array('post_type' => 'post','category_name' => 'testimonials'));
									$posts = $query->get_posts();

									// echo "<pre>";
									// print_r($posts);
									// echo "</pre><br><br><br>";

									while ( $query->have_posts() ) {
										echo "<tr style='border-top-style:none;'>";
											$query->the_post();
											$image = rwmb_meta( 'your_prefix_image', 'type=image&size=meduim' );
											
											echo '<br><br><td style="text-align: right;padding:30px;"><article class="testimonials-post">' . get_the_content() . '</article>';
											echo '<p class="testimonials-author_name">' . rwmb_meta( 'your_prefix_jobdesc', $args = array(), $post_id = get_the_id()) . ' of ' . rwmb_meta( 'your_prefix_company', $args = array(), $post_id = get_the_id()) . '</p>';
											echo '<p class="testimonials-author_title">' . get_the_title() . '</p></article></td>';

											$image = rwmb_meta( 'your_prefix_image', 'type=image');

												foreach ($image as $key => $value) {
												echo '<td class="col-md-3"><img src="' . $image[$key]['full_url'] . '" height="100%" style="border-radius:50%;background-color: #fff;"/></td>';
											}	
											
										echo '</tr>';
										}
										/* Restore original Post Data */

									wp_reset_postdata();
								  ?>
						</tbody>
					</table>
					</div>
				</div>
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
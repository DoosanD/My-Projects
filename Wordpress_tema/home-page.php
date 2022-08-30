<?php

/**
 * Template Name: Homepage
 *
 * @package Movers_Development
 */
$fields = get_fields('option');
get_header();
?>

<main id="main" class="site-main">
	<div id="primary" class="content-area">
		<section class="hero-section home-sections">
			<div class="container">
				<div id="left-pad" class="hero-left left-padding col-lg-8 col-md-7">
					<h1><?php echo $fields['hero_title']; ?></h1>
					<ul> <?php for ($i = 1; $i <= 3; $i++) {  ?>
							<li><img src="/wp-content/uploads/2022/07/check-1.svg" alt="check mark" />
								<div><?php echo $fields['hero_list_text_' . $i]; ?></div>
							</li>

						<?php 	} ?>
					</ul>
				</div>
				<div class="hero-right right-pad col-lg-4 col-md-5">
					<div class="hero-form">
						<h3>
							Get Your Free Estimate
						</h3>
						<?php
						echo do_shortcode(
							'[gravityform id="1" title="false" description="false" ajax="true"]'
						);
						?>
						<div class="line-bottom"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="services-section home-sections">
			<div class="container">
				<div class="service-single-holder">
					<?php for ($i = 1; $i <= 4; $i++) { ?>

						<div class="single-left md-services-wrap col-xs-12 col-sm-6 col-md-6 <?php if ($i == 2) : echo 'test2';
																								endif; ?> ">
							<div class="service-single-in">
								<div class="service-single-in-top">
									<img src="<?php echo $fields['services_single_img_' . $i]['url']; ?>" alt="Service image" />
								</div>
								<div class="service-single-in-bottom">
									<img src="<?php echo $fields['services_box_img_' . $i]['url']; ?>" alt="Service box image" />
									<h3>
										<?php echo $fields['service_single_' . $i . '_title']; ?>
									</h3>
									<p>
										<?php echo $fields['service_single_' . $i . '_text']; ?>
									</p>
									<div class="services-link">
										<a href='<?php echo $fields['service_single_' . $i . '_link']['url']; ?>'>Learn more</a>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>
				</div>
			</div>
		</section>
		<section class="about-section">
			<div class="container">
				<div class="about-single-holder">
					<div class="single-left col-lg-6">
						<img src="<?php echo $fields['about_img']['url']; ?>" alt="People with boxes" />
					</div>
					<div class="about-right col-lg-6">
						<h3>
							<?php echo $fields['about_title']; ?>
						</h3>
						<p>
							<?php echo $fields['about_text']; ?>
						</p>
						<div class="about-link">
							<a href='<?php echo $fields['about_link']['url']; ?>'>Learn more <img src="/wp-content/uploads/2022/07/read-more-arrow-white-1.svg" alt="right arrow" /></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="howItWorks">
			<div class="container">
				<h4 class="how-it-works-title">
					How it Works
				</h4>
				<div class="how-single-holder col-lg-4">
					<div class="how-single-left ">
						<img src="<?php echo $fields['how_it_works_number']['url']; ?>" alt="People with boxes" />
						<h3>
							<?php echo $fields['how_it_works_1']; ?>
						</h3>
						<p>
							<?php echo $fields['how_it_works_1_text']; ?>
						</p>
					</div>
				</div>
				<div class="how-single-holder col-lg-4">
					<div class="how-single-mid ">
						<img src="<?php echo $fields['how_it_works_2_number']['url']; ?>" alt="People with boxes" />
						<h3>
							<?php echo $fields['how_it_works_2_title']; ?>
						</h3>
						<p>
							<?php echo $fields['how_it_works_2_text']; ?>
						</p>
					</div>
				</div>
				<div class="how-single-holder col-lg-4">
					<div class="how-single-right ">
						<img src="<?php echo $fields['how_it_works_3_number']['url']; ?>" alt="People with boxes" />
						<h3>
							<?php echo $fields['how_it_works_3_title']; ?>
						</h3>
						<p>
							<?php echo $fields['how_it_works_3_text']; ?>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="blog-section">
			<h3 class="blog-section-title">
				Our Blog
			</h3>
			<div class="container">
				<div class="blog-posts-container">
					<?php
					query_posts('post_type=post&post_status=publish&posts_per_page=8&paged=' . get_query_var('paged'));
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							$recent_posts = get_the_ID();
							$postId = get_the_ID();
							// echo get_the_time('Y-m-d', $postId);
							$posts = new WP_Query(array('post_type' => 'post')); //retrieve posts
							if ($posts->have_posts()) {
								while ($posts->have_posts()) {
									$posts->the_post();
									get_the_time('Y-m-d'); //date in Y-m-d format.
								}
							}

							if (!has_post_thumbnail($recent_posts)) {
								$image_id = 11062;
							} else {
								$image_id = get_post_thumbnail_id($recent_posts);
							}
							$excerpt = wp_trim_words(get_the_content(), '20'); // $excerpt contains the excerpt of the concerned post
							$cats = get_the_category($postid);
							$title = get_the_title($recent_posts);
							$datef = get_the_time('F j, Y', $postId);
							//$datej =  date('j');
							//$datey =  date('Y');
					?>
							<div class="blog-wrap-container col-xs-12 col-sm-12 col-xl-12 col-md-6">
								<div class="blog-post-container">
									<div class="blog-post-image-container">
										<?php echo wp_get_attachment_image($image_id, 'full'); ?>
										<div class="blog-post-date">
											<p><?php echo $datef; ?></p>
										</div>
									</div>
									<h3>
										<a href="<?php echo get_permalink($recent_posts) ?>"><?php echo $title; ?></a>
									</h3>
									<p class="blog-post-excerpt"><?php echo $excerpt ?></p>
									<a class="blog-post-more" href="<?php echo get_permalink($recent_posts) ?>">Read More <img src="/wp-content/uploads/2022/07/read-more-arrow-white-1.svg" alt="right arrow" /></a>
								</div>
							</div>
					<?php }
					} ?>
					<div class="md-pagination-holder navigation">
						<?php pagination_bar(); ?>
					</div>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>
		<section class="pictures">
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_1']['url']; ?>" alt="Boxes" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_2']['url']; ?>" alt="Happy couple drinking coffee near boxes" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_3']['url']; ?>" alt="Moving truck" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_4']['url']; ?>" alt="Family moving boxes" />
		</section>
	</div>
</main>

<?php
get_footer();

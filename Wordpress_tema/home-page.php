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
					<ul>
						<li><img src="/wp-content/uploads/2022/07/check-1.svg" alt="check mark" />
							<div><?php echo $fields['hero_list_text_1']; ?></div>
						</li>
						<li><img src="/wp-content/uploads/2022/07/check-1.svg" alt="check mark" />
							<div><?php echo $fields['hero_list_text_2']; ?></div>
						</li>
						<li><img src="/wp-content/uploads/2022/07/check-1.svg" alt="check mark" />
							<div><?php echo $fields['hero_list_text_3']; ?></div>
						</li>
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
					<div class="single-left col-sm-4">
						<div class="service-single-in">
							<div class="service-single-in-top">
								<img src="<?php echo $fields['services_single_1_img']['url']; ?>" alt="Packing and Unpacking" />
							</div>
							<div class="service-single-in-bottom">
								<img src="<?php echo $fields['services_box_img']['url']; ?>" alt="Box" />
								<h3>
									<?php echo $fields['service_single_1_title']; ?>
								</h3>
								<p>
									<?php echo $fields['service_single_1_text']; ?>
								</p>
								<div class="services-link">
									<a href='<?php echo $fields['service_single_1_link']; ?>'>Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-mid col-sm-4">
						<div class="service-single-in">
							<div class="service-single-in-top">
								<img src="<?php echo $fields['service_single_2_img']['url']; ?>" alt="Packing and Unpacking" />
							</div>
							<div class="service-single-in-bottom">

								<img src="<?php echo $fields['service_car_img']['url']; ?>" alt="Box" />
								<h3>
									<?php echo $fields['service_single_2_title']; ?>
								</h3>
								<p>
									<?php echo $fields['service_single_2_text']; ?>
								</p>
								<div class="services-link-middle">
									<a href='<?php echo $fields['service_single_2_link']; ?>'>Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-right col-sm-4">
						<div class="service-single-in">
							<div class="service-single-in-top">
								<img src="<?php echo $fields['service_single_3_img']['url']; ?>" alt="Packing and Unpacking" />
							</div>
							<div class="service-single-in-bottom">
								<img src="<?php echo $fields['service_box_3_img']['url']; ?>" alt="Box" />
								<h3>
									<?php echo $fields['service_single_3_title']; ?>
								</h3>
								<p>
									<?php echo $fields['service_single_3_text']; ?>
								</p>
								<div class="services-link-right">
									<a href='<?php echo $fields['service_single_3_link']; ?>'>Read More</a>
								</div>
							</div>
						</div>
					</div>
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
							<a href='<?php echo $fields['about_link']; ?>'>Read More <img src="/wp-content/uploads/2022/07/read-more-arrow-white-1.svg" alt="right arrow" /></a>
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
		<section class="pictures">
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_1']['url']; ?>" alt="Boxes" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_2']['url']; ?>" alt="Happy couple drinking coffee near boxes" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_3']['url']; ?>" alt="Moving truck" />
			<img class="col-lg-3 col-md-6 col-sm-6 col-xs-6" src="<?php echo $fields['pictures_4']['url']; ?>" alt="Family moving boxes" />
		</section>

		<!-- 	<section class="blog-section home-sections">
      <div class="container section-container">
        <div class="content-container">
          <h2>Latest News</h2>
          <div class="blog-posts-container">
  					<?php
						$args = array(
							'numberposts' => '3',
							'post_type'   => 'post',
							'post_status' => 'publish'
						);
						$recent_posts = wp_get_recent_posts($args);
						foreach ($recent_posts as $recent) {
							$postid = $recent["ID"];
							if (!has_post_thumbnail($recent["ID"])) {
								$image_id = 3962;
							} else {
								$image_id = get_post_thumbnail_id($recent["ID"]);
							}
							$excerpt = wp_trim_words($recent['post_content'], '20'); // $excerpt contains the excerpt of the concerned post
							$cats = get_the_category($postid);
							$date = date('F j. Y', strtotime($recent['post_date']));
						?>
                    <div class="blog-post-container">
                      <div class="blog-post-image-container">
                        <?php echo wp_get_attachment_image($image_id); ?>
                        <div class="blog-post-date"><p><?php echo $date ?></p></div>
                      </div>
                      <h3>
                        <?php echo $recent["post_title"] ?>
                        <a href="<?php echo get_permalink($postid) ?>"></a>
                      </h3>
                      <p class="blog-post-excerpt"><?php echo $excerpt ?></p>
                      <a href="<?php echo get_permalink($postid) ?>">Read More</a>
                    </div>
						<?php } ?>
          </div>
        </div>
      </div>
    </section>
 -->
	</div>
</main>

<?php
get_footer();

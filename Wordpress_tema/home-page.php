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
	  

	  
    <section class="hero-section home-sections" style="padding: 200px 0; background:url(/wp-content/uploads/2022/07/hero-image.jpg) no-repeat;background-size: cover;">
	<div class="container">
		
			<div class="hero-left col-lg-7">
			
	
		<h1><?php echo $fields['hero_title']; ?></h1>
		
		<ul>
			<li><?php echo $fields['hero_list_text_1']; ?></li>
			<li><?php echo $fields['hero_list_text_2']; ?></li>
			<li><?php echo $fields['hero_list_text_3']; ?></li>
		</ul>
				</div>
		<div class="hero-right col-lg-5">
			
		<?php
		  echo do_shortcode(
 			'[contact-form-7 title="Main Quote Form"]'
 // 			'[gravityform id="1" title="false" description="false" ajax="true"]'
		  );
		?>
			</div>
		</div>
	</section>
	 <section class="services-section home-sections">
		 <div class="container">
			 <div class="service-single-holder">
				 <div class="single-left col-lg-4">
					 <div class="service-single-in">		
						 <div class="service-single-in-top">
							  <img src="<?php echo $fields['services_single_1_img']['url']; ?>" alt="Packing and Unpacking"/>
						 </div>
						 <div class="service-single-in-bottom">
							 <img src="<?php echo $fields['services_box_img']['url']; ?>" alt="Box"/>
						 <h3>
							 <?php echo $fields['service_single_1_title']; ?>
						 </h3>
						 <p>
							 <?php echo $fields['service_single_1_text']; ?>
						 </p>
							 <div class="services-link">
								<a href='<?php echo $fields['service_single_1_link']; ?>'>Read More </a>
							 </div>
						 </div>
						 
					 </div>
				 </div>
				 	 <div class="single-mid col-lg-4">
					 <div class="service-single-in">
						 <div class="service-single-in-top">
						 <img src="<?php echo $fields['service_single_2_img']['url']; ?>" alt="Packing and Unpacking"/>
						 </div>
						 <div class="service-single-in-bottom">
						 
						 <img src="<?php echo $fields['service_car_img']['url']; ?>" alt="Box"/>
						 <h3>
							 <?php echo $fields['service_single_2_title']; ?>
						 </h3>
						 <p>
							 <?php echo $fields['service_single_2_text']; ?>
						 </p>
							 <div class="services-link">
								<a href='<?php echo $fields['service_single_2_link']; ?>'>Read More </a>
							 </div>
						 </div>
					 </div>
				 </div>
				 	 <div class="single-right col-lg-4">
					 <div class="service-single-in">
						 <div class="service-single-in-top">
						 <img src="<?php echo $fields['service_single_3_img']['url']; ?>" alt="Packing and Unpacking"/>
						 </div>
						 <div class="service-single-in-bottom">
						 <img src="<?php echo $fields['service_box_3_img']['url']; ?>" alt="Box"/>
						 <h3>
							 <?php echo $fields['service_single_3_title']; ?>
						 </h3>
						 <p>
							 <?php echo $fields['service_single_3_text']; ?>
						 </p>
							 <div class="services-link">
								<a href='<?php echo $fields['service_single_3_link']; ?>'>Read More </a>
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
					  	<a href='<?php echo $fields['about_link']; ?>'>Read More </a>
					  </div>
				  </div>
				  
			  </div>
			  
		  </div>
	  
	  </section>
	  
	  <section class="howItWorks">
	  
		  <div class="container">
			  
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
		  
		 
			  <img class="col-lg-3" src="<?php echo $fields['pictures_1']['url']; ?>" alt="Boxes"/>
			  <img class="col-lg-3" src="<?php echo $fields['pictures_2']['url']; ?>" alt="Happy couple drinking coffee near boxes"/>
			  <img class="col-lg-3" src="<?php echo $fields['pictures_3']['url']; ?>" alt="Moving truck"/>
			  <img class="col-lg-3" src="<?php echo $fields['pictures_4']['url']; ?>" alt="Family moving boxes"/>
		
	  
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
  								'post_status' =>'publish'
  								  );
  							  $recent_posts = wp_get_recent_posts( $args );
  								foreach( $recent_posts as $recent ){
  									$postid = $recent["ID"];
  									if(!has_post_thumbnail($recent["ID"])){
  										$image_id = 3962;
  									}else{
  										$image_id = get_post_thumbnail_id($recent["ID"]);
  									}
  									$excerpt = wp_trim_words( $recent['post_content'], '20'); // $excerpt contains the excerpt of the concerned post
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
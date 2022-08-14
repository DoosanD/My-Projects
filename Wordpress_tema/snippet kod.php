 <!-- Wordpress funkcija za jedinstvene postove i uslovi -->

 <?php if (!is_front_page() and !is_page(array())) : ?>
 	<div class="container">
 		<div class="before-footer col-lg-8 col-md-7">
 			<div class="contact-form ">

 				<?php
					echo do_shortcode(
						'[gravityform id="2" title="false" description="false" ajax="true"]'
					);
					?>

 			</div>
 		</div>
 	</div>
 <?php endif; ?>
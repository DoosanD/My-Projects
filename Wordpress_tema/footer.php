<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Movers_Development
 */
$fields = get_fields('option');
?>
<?php if (!is_front_page()) : ?>
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
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="container">
			<div class="footer-in">
				<div class="footer-left col-lg-3">
					<div class="single-left-footer">
						<img src="<?php echo $fields['footer__badge']['url']; ?>" alt="logo" />
					</div>
				</div>
				<div class="footer-mid col-lg-6">
					<div class="single-mid ">
						<h3>
							<?php echo $fields['footer_title_1']; ?>
						</h3>
						<p>
							<?php echo $fields['footer_text_1']; ?>
						</p>
					</div>
				</div>
				<div class="footer-right col-lg-3">
					<div class="single-right ">
						<h3>
							<?php echo $fields['footer_title_2']; ?>
						</h3>
						<a href='<?php echo $fields['footer_link']; ?>'>Get a quote <img src="/wp-content/uploads/2022/07/read-more-arrow-1.svg" alt="right arrow" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="md-footer-copy-right col-xs-12">
			<p>All rights reserved <?php echo date('Y'); ?> @ <?php echo get_bloginfo('name'); ?> |
				<a href="/sitemap"> Sitemap</a>
			</p>
		</div>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Movers_Development
 */

get_header();
//md_theme_posted_on();
$fields = get_fields('option');
$fieldsInner = get_fields();
$backgroundimg = get_the_post_thumbnail_url();
$backgroundbackup = '/wp-content/uploads/2022/07/gallery02.jpg';
?>

<main id="primary" class="site-main">
    <section class="hero-content-single" style="background:linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url(<?php if (empty($backgroundimg)) : echo $backgroundbackup;
                                                                                                                else : echo $backgroundimg;
                                                                                                                endif; ?>);background-repeat: no-repeat;background-size: cover;">
        <div class="md-breadcrumbs-pages">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('
							<p id="breadcrumbs-single">', '</p>
							');
            }
            ?>
        </div>
        <div class="hero-header">
            <div class="container">

                <h1>
                    <?php the_title(); ?>
                </h1>

                <p>
                    <?php echo $fieldsInner['sub_title']; ?>
                </p>
            </div>
        </div>
    </section>


    <!-- 		<?php
                    // 		while ( have_posts() ) :
                    // 			the_post();

                    // 			get_template_part( 'template-parts/content', get_post_type() );

                    // 			the_post_navigation(
                    // 				array(
                    // 					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'md_theme' ) . '</span> <span class="nav-title">%title</span>',
                    // 					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'md_theme' ) . '</span> <span class="nav-title">%title</span>',
                    // 				)
                    // 			);

                    // 			// If comments are open or we have at least one comment, load up the comment template.
                    // 			if ( comments_open() || get_comments_number() ) :
                    // 				comments_template();
                    // 			endif;

                    // 		endwhile; // End of the loop.
                    ?> -->
    <section class="services-content md-inner-content">
        <div class="container">
            <div class="content-left col-lg-8 col-md-7">
                <div class="content-below-services md-inner-cont-info">
                    <?php the_content(); ?>
                </div>

            </div>
            <div class="content-right hero-right md-sidebar right-pad col-lg-4 col-md-5">

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


                <div class="sidebar">
                    <div class="md-sidebar-menu">
                        <h4>Our Services</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'Sidebar',
                        ));
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

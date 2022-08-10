<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Movers_Development
 */

get_header();
$backgroundimg = get_the_post_thumbnail_url();
$backgroundbackup = '/wp-content/uploads/2022/07/gallery02.jpg';
?>

<main id="primary" class="site-main">
    <section class="hero-content" style="background:url(<?php if (empty($backgroundimg)) : echo $backgroundbackup;
                                                        else : echo $backgroundimg;
                                                        endif; ?>);background-repeat: no-repeat;background-size: cover;">
        <div class="md-breadcrumbs-pages">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('
							<p id="breadcrumbs">', '</p>
							');
            }
            ?>
        </div>
        <div class="hero-header">
            <div class="container">
                <h1>
                    <?php echo $fieldsInner['inner_title']; ?>
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

                    // 			get_template_part( 'template-parts/content', 'page' );

                    // 			// If comments are open or we have at least one comment, load up the comment template.
                    // 			if ( comments_open() || get_comments_number() ) :
                    // 				comments_template();
                    // 			endif;

                    // 		endwhile; // End of the loop.
                    ?>
 -->
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
                        <h3>Our Services</h3>
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
        <div class="container">
            <div class="content-below-services col-lg-8 col-md-7">
                <p>
                    <?php echo $fieldsInner['after_services_text']; ?>
                </p>
                <div>

                    <p class="img-title">
                        <?php echo $fieldsInner['image_title'] ?>
                    </p>
                </div>
                <div class="content-title-text2">
                    <h2>
                        <?php echo $fieldsInner['inner_title_2'] ?>
                    </h2>
                    <p>
                        <?php echo $fieldsInner['sub_title_2'] ?>
                    </p>
                </div>
                <div class="unordered-list-content">

                    <?php if (have_rows('list_items')) : ?>

                        <ul class="list-content">

                            <?php while (have_rows('list_items')) : the_row(); ?>

                                <li class="list-item">
                                    <?php the_sub_field('list_item'); ?>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>
                <div class="content-title-text3">
                    <h2>
                        <?php echo $fieldsInner['inner_title_3'] ?>
                    </h2>
                    <p>
                        <?php echo $fieldsInner['sub_title_3'] ?>
                    </p>
                </div>
            </div>

        </div>
    </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

<?php

/**
 * Template Name: Services
 *
 * @package Movers_Development
 */
$fields = get_fields('option');
$fieldsInner = get_fields();

get_header();
$backgroundimg = get_the_post_thumbnail_url();
?>


<main id="main" class="site-main">
    <div id="primary" class="content-area">
        <section class="hero-content" style="background:url(<?php echo $backgroundimg; ?>);background-repeat: no-repeat;background-size: cover;height: 400px;">
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
        <section class="services-content">
            <div class="container">
                <div class="content-left col-lg-8 col-md-7">
                    <div class="service-single-holder-service-page">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>

                            <div class="single-left md-services-wrap col-xs-12 col-md-6 <?php if ($i == 2) : echo 'test2';
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
                                            <a href='<?php echo $fields['service_single_' . $i . '_link']; ?>'>Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php } ?>
                    </div>

                    <div class="content-below-services md-inner-cont-info">
                        <?php the_content(); ?>
                    </div>

                </div>
                <div class="content-right hero-right right-pad col-lg-4 col-md-5">
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
                            <h4 class="sidebar-header">Our Services</h4>
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
    </div>
</main>

<?php
get_footer();

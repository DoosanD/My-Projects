<?php

/**
 * Template Name: Services
 *
 * @package Movers_Development
 */
$fields = get_fields('option');
get_header();
?>


<main id="main" class="site-main">
    <div id="primary" class="content-area">
        <div class="container">
            <div class="hero-left left-padding col-lg-8 col-md-7">
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
    </div>
</main>

<?php
get_footer();

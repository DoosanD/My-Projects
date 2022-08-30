<?php

/**
 * Template Name: Blog
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
        <section class="hero-content" style="background:url(<?php echo $backgroundimg; ?>);background-repeat: no-repeat;background-size: cover;">
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
        <section class="blog-section">
            <div class="container">
                <div class="blog-posts-container content-left col-lg-8 col-md-7">
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
                            <div class="blog-wrap-container col-xs-12 col-xl-12 col-md-12">
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
        </section>
        <!-- 	<section class="inner-content">
      <div class="container section-container">
              <?php
                query_posts('post_type=post&post_status=publish&posts_per_page=8&paged=' . get_query_var('paged'));
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        $current_post_id = get_the_ID();
                        if (!has_post_thumbnail($current_post_id)) {
                            $image_id = get_post_thumbnail_id(30998);
                        } else {
                            $image_id = get_post_thumbnail_id($current_post_id);
                        }

                        $title = get_the_title($current_post_id);
                        $excerpt = wp_trim_words(get_the_content(), '20'); // $excerpt contains the excerpt of the concerned post
                        $date = get_the_date('F j. Y');
                        $cats = get_the_category($current_post_id);
                ?>
                
                <div id="post-<?php echo $current_post_id; ?>" <?php post_class('blog-post-container'); ?>>
                  <div class="blog-post-image-container">
                    <?php echo wp_get_attachment_image($image_id, [373, 266]); ?>
                    <div class="blog-post-date"><p><?php echo $date ?></p></div>
                  </div>
                  <h3>
                    <?php echo $title ?>
                    <a href="<?php echo get_permalink($current_post_id) ?>"></a>
                  </h3>
                  <p class="blog-post-excerpt"><?php echo $excerpt ?></p>
                  <a href="<?php echo get_permalink($current_post_id) ?>">Read More</a>
                </div>
              <?php
                    }
                } ?>
						
            <div class="md-pagination-holder navigation">
              <?php pagination_bar(); ?>
            </div>
            <?php wp_reset_query(); ?>

			</div>
		</section> -->
    </div>
</main>

<?php
get_footer();

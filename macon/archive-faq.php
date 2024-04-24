<?php

/**
 * Template Name: FAQ Template
 */

get_header();
?>
<style type="text/css">
    .social-macon-icons {
    display: none;
}
@media (min-width: 768px) {

        .seprator {
    width: 337px !important;
    
}
.macon-image-sec img {
   
    height: 290px !important;
    right: 90px !important;
}
}
</style>
<main class="macon-main-wrapper">
    <!---=======================macon-banner start here=====================--->
    <div class="macon-banner main-banner-section" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/faq-banner-bg.png?>)">
        <div class="seprator d-none  d-md-block"></div>
        <div class="container">
            <div class="row banner-faq">
                <div class=" col-lg-8 col-md-6 macon-banner-left-sec">
                    <div class="left-sec-tittle">
                        <h1 class="title">Frequently Asked Questions</h1>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 macon-banner-right-sec d-none  d-md-block">
                    <div class="macon-image-sec">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/banner.png">
                        
                        <div class="review-circle">
                            <div class="review-circle-content">
                                <h6>4.95</h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p>Google Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---=======================macon-banner end here=====================--->
    <!---=======================mid-section start here=====================--->
    <div class="mid-section">
        <div class="container">
							<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
            <div class="row">
                <div class="col-lg-8 col-md-6 class left-sec">
                    <ul class="links-sec" style="
    display: none;
">
                        <li><a class="active js-filter-item" href="#">All</a></li>
                        <?php /* Start the Loop */
                        $cat_args = array(
                            'exclude' => array(1),
                            'option_all' => 'All'
                        );

                        $categories = get_terms(array(
                            'taxonomy' => 'faq_category',
                            'hide_empty' => false,
                        ));

                        foreach ($categories as $cat) : ?>
                            <li data-id="<?= $cat->term_id ?>" class="js-filter-item"><a href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="row js-filter" id="data">
                        <?php
                        $args = array(
                            'post_type' => 'faq',
                            'posts_per_page' => -1
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post(); ?>

                                <div class="col-xl-4 col-md-6 col-sm-6">
                                    <a href="<?= the_permalink(); ?>">
                                        <div class="faq-card">
                                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="car-image" class="faq-card-image" />
                                            <div class="faq-card-body">
                                                <h6 class="faq-card-category"><?= get_the_terms(0, 'faq_category')[0]->name; ?></h6>
                                                <h5 class="faq-card-title"><?= the_title(); ?></h5>
                                                <a class="faq-read-more" href="<?= the_permalink(); ?>">Read more</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="right-sec">
                        <?php dynamic_sidebar('faq_side_bar'); ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!---=======================mid-section end here=====================--->

</main>
<!---=======================macon-main-wrapper end here=====================--->
<script type="text/javascript">
    $(document).ready(function() {
        var windowWidth = window.outerWidth;

        if (windowWidth > 1024) {
            var getMarginRight = $('.container').css("marginRight");
            $(window).resize(function() {
                getMarginRight = $('.container').css("marginRight");
                $('.seprator').css({
                    'width': `calc(${getMarginRight} + 365px)`
                });
            });
            $('.seprator').css({
                'width': `calc(${getMarginRight} + 365px)`
            });
        }

    });
</script>


<?php
get_footer(); ?>
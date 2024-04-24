<?php

/**
 * Template Name: Inner page Template
 */

get_header();
?>
<style>
.innerpage .macon-image-sec img {
    position: absolute;
    height: 290px;
    z-index: 99;
    right: 100px;
}
.innerpage .left-sec li {
    display: list-item !important;
	list-style-type: unset !important;
}
ul.li-2 {
    columns: 2;
	padding: revert;
}
	ul{
		padding: revert;
	}
img.alignright {
    float: right;
    padding: 10px;
}
	.social-macon-icons {
    display: none;
}
</style>

<main class="macon-main-wrapper innerpage">
    <!---=======================macon-banner start here=====================--->
    <div class="macon-banner main-banner-section" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/faq-banner-bg.png?>)">
        <div class="seprator d-none  d-md-block"></div>
        <div class="container">
            <div class="row banner-faq">
                <div class=" col-lg-8 col-md-6 macon-banner-left-sec">
                    <div class="left-sec-tittle">
                        <h1 class="title"><?php the_title(); //echo get_field('title'); ?></h1>
                        <p class="sub-title"><?php echo get_field('subtitle'); ?></p>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 macon-banner-right-sec d-none  d-md-block">
                    <div class="macon-image-sec">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/banner.png">
                        <div class="image-content">
                            <p><?= get_field('banner-text'); ?></p>
                        </div>
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
      <?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>
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
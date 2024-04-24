<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<style type="text/css">

	@media (min-width: 768px) {

		.seprator {
    width: 337px !important;
    
}
.macon-image-sec img {
   
    height: 290px !important;
    right: 90px !important;
}

.left-sec-tittle {
    margin-right: 50px;
}
img.alignright {
    float: right;
    padding: 10px;
}
	
}
.faq-card {
    display: none;
}
.social-macon-icons {
    display: none;
}
</style>
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
<!---=======================single-faq-mid-section start here=====================--->
<section>
	<div class="single-faq-mid-section">
		<div class="container">
			<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
			<div class="row">
				<div class="col-lg-8 col-md-6 single-faq-wrapper ">
					<h2 class="single-faq-title "><?php while (have_posts()) : the_post();
														//the_title(); ?></h2>
					<div class="single-faq-wrapper-content"><?php the_content();
														endwhile; ?>
					</div>

				</div>
				<!---=======================single-faq-mid-section end here=====================--->
				<!---=======================single-faq-right-sec start here=====================--->
				<div class="col-lg-4 col-md-6">
					<div class="right-sec">
						<?php dynamic_sidebar('faq_side_bar'); ?>
					</div>
				</div>
			</div>
			<!---=======================single-faq-right-sec end here=====================--->
		</div>
	</div>
	</div>
</section>



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
get_footer();

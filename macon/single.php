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
<!---=======================macon-banner start here=====================--->
<div class="macon-banner main-banner-section" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/faq-banner-bg.png?>)">
	<div class="seprator d-none  d-md-block"></div>
	<div class="container">
		<div class="row banner-faq">
			<div class=" col-lg-8 col-md-6 macon-banner-left-sec">
				<div class="left-sec-tittle">
					<p class="sub-title">Practice area</p>
					<h1 class="title">
						<?= (get_the_terms(0, 'faq_category')[0]->name); ?>
					</h1>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 macon-banner-right-sec d-none  d-md-block">
				<div class="macon-image-sec">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/03/mike-banner.png">
					<div class="image-content">
						<p>Work with the Macon's Best Car Accident Lawyer</p>
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
			<div class="row">
				<div class="col-lg-8 col-md-6 single-faq-wrapper ">
					<h2 class="single-faq-title "><?php while (have_posts()) : the_post();
														the_title(); ?></h2>
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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.3657636545972!2d-84.39638978539598!3d33.80287293827866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5045529734637%3A0xf61858bb7acfebfe!2s1776%20Peachtree%20Rd%20NW%2C%20Atlanta%2C%20GA%2030309%2C%20USA!5e0!3m2!1sen!2sin!4v1616659152351!5m2!1sen!2sin" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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

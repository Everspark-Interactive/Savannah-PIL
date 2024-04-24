<?php

/**
 * Template Name: Home Template
 */

get_header(); ?>

<!--=========================================== banner-section start =================================-->
<section class="banner-section" >
  <div class="container d-flex">
  <div class="banner-body" >
    <div class="banner-content">
      <h1 class="banner-title"><?= get_field('banner-title'); ?><br /> <span class="banner-text"><?= get_field('banner-text'); ?></span></h1>
      <p class="banner-sub-text"><?= get_field('banner-sub-text'); ?></p>
      <p class="banner-contact">Call us<a href="tel:<?= get_field('banner-contact-number'); ?>"><?= get_field('banner-contact-number'); ?></a></p>
        <div class="banner-address">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p><?= ot_get_option('address'); ?></p>
        </div>
        <div class="contact-driving-btn">
          <a id="driving-btn" href="<?= get_field('driving-button-link'); ?>" target="_blank" ><?= get_field('driving-button'); ?></a>
        </div>
      <a href="<?= get_field('banner-button-link'); ?>" class="banner-button"><?= get_field('banner-button'); ?></a>
    </div>
  </div>
  <div class="banner-body-half">
    <div class="circle-review ">
      <div class="circle-review-body">
        <p class="rating"><?= get_field('google_rating'); ?></p>
        <div class="banner-star">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <p class="review">Google Reviews</p>
      </div>
    </div>
    <div class="lawyer-name">
      <h3><?= get_field('lawyer_name'); ?></h3>
      <p>Attorney</p>
    </div>
    <img src="<?= get_field('banner_image'); ?>"/>
  </div>
</div>
</section>
<!--========================================== banner-section-end ================================-->
<!-- /*=====================================our-results-section==========================*/ -->
<section class="our-results-section">
  <h2 class="our-result-title"><?= get_field('our_results_title'); ?></h2>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-md-6 col-item">
        <div class="our-result-wrapper"><p class="our-result-heading"><?= get_field('our_results_number_1'); ?></p>
        <p class="million"><?= get_field('our_results_text_1'); ?></p>
          <p><?= get_field('our_results_sub_text_1'); ?></p></div>
      </div>
      <div class="col-xl-3 col-md-6 second-col">
        <div class="our-result-wrapper"><p  class="our-result-heading"><?= get_field('our_results_number_2'); ?></p>
        <p class="million"><?= get_field('our_results_text_2'); ?></p>
          <p><?= get_field('our_results_sub_text_2'); ?></p></div>
      </div>
      <div class="col-xl-3 col-md-6 col-item">
        <div class="our-result-wrapper"><p class="our-result-heading"><?= get_field('our_results_number_3'); ?></p>
        <p class="million"><?= get_field('our_results_text_3'); ?></p>
          <p><?= get_field('our_results_sub_text_3'); ?></p></div>
      </div>
      <div class="col-xl-3 col-md-6 ">
        <div class="our-result-wrapper"><p class="our-result-heading"><?= get_field('our_results_number_4'); ?></p>
        <p class="million"><?= get_field('our_results_text_4'); ?></p>
          <p><?= get_field('our_results_sub_text_4'); ?></p></div>
      </div>
    </div>
  </div>

  <div class="container our-result-below-sec">
    <?= get_field('our_results_below_section'); ?>
  </div>
</section>
<!-- /*===================================our-result-section-end===========================*/ -->
<!---------------------------------------------- help-us-start -------------------------------------->
<section class="help-us-section">
  <div class="help-us-row space-padding-right space-padding-left">
  <div class="row ">
    <div class="col-md-12 col-xl-5">
      <h2 class="heading-blue-title "><?= get_field('help_us_-_heading'); ?></h2>
      <div class="help-us-text text-size"><?= get_field('help_us_-_text'); ?></div>
    </div>
    <div class="col-md-12 col-xl-1"></div>
    <div class="col-md-12 col-xl-6">
      <img class="help-us-img" src="<?= get_field('help_us_-_image'); ?>" alt="car-accident-statistics">
    </div>
    <div class="col-md-12">
      <?= get_field('help_us_below'); ?>
    </div>
  </div>
  <div class="help-us-inner-body-section">
  <div class="help-us-inner-body">
    <img class="help-us-logo" src="<?= get_field('help_us_-_logo'); ?>">
    <h2 class="help-us-inner-title"><?= get_field('help_us_-_title'); ?></h2>
  <div class="help-us-inner-text helpinrboxtp">
    <p>Call Us <a href="tel:<?= get_field('help_us_-_contact_number'); ?>"><?= get_field('help_us_-_contact_number'); ?></a></p>
    <!--<p><span>or</span></p>-->
    <a href="<?= get_field('help_us_-_button-link'); ?>" class="help-us-btn"><?= get_field('help_us_-_button'); ?></a>
  </div>
  </div>
</div>
</div>
</section>
<!------------------------------------------------------- help-us-end ---------------------------->

<!------------------------------------------------------ car-crash-section-start ------------------------->
<section class="car-crash-section">
  <div class="row space-padding-right space-padding-left">
    <div class="col-md-12 col-xl-6">
      <img class="car-crash-img" src="<?= get_field('car_crash_-_image'); ?>" alt="car-crash">
    </div>
    <div class="col-md-12 col-xl-6">
      <div class="padding-inner-left">
      <h2 class="heading-blue-title"><?= get_field('car_crash_-_heading'); ?></h2>
      <p class="car-crash-text text-size"><?= get_field('car_crash_-_text'); ?></p>
      <div class="car-crash-inner">
        <h3 class="heading-red-title"><?= get_field('car_accident_-_heading_1'); ?></h3>
        <p class="line-height-text text-size"><?= get_field('car_accident_-_text_1'); ?></p>
      </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <h3 class="heading-red-title car-crash-two-col hdminhg"><?= get_field('car_accident_-_heading_2'); ?></h3>
      <p class="line-height-text text-size"><?= get_field('car_accident_-_text_2'); ?></p>
    </div>
    <div class="col-md-6 col-sm-12">
      <h3 class="heading-red-title car-crash-two-col hdminhg"><?= get_field('car_accident_-_heading_3'); ?></h3>
      <p class="line-height-text text-size"><?= get_field('car_accident_-_text_3'); ?></p>
    </div>
  </div>
</section>
<!------------------------------------------------------ car-crash-end ------------------------->

<!------------------------------------------------- car-accident-section-start ------------------------------->
<section class="car-accident-section ">
  <div class="car-accident-row space-padding-left">
  <div class="four-col-section ">
    <h3 class="heading-red-title caraccdnt-hd"><?= get_field('car_accident_heading_4'); ?></h3>
    <p class="line-height-text text-size"><?= get_field('car_accident_text_4'); ?></p>
  </div>
  <div class="four-col-section">
    <h3 class="heading-red-title caraccdnt-hd"><?= get_field('car_accident_heading_5'); ?></h3>
    <p class="line-height-text text-size"><?= get_field('car_accident_text_5'); ?></p>
  </div>
  <div class="four-col-section">
    <h3 class="heading-red-title caraccdnt-hd"><?= get_field('car_accident_heading_6'); ?></h3>
    <div class="line-height-text text-size"><?= get_field('car_accident_text_6'); ?></div>
  </div>
  <div class="four-col-section car-accident-col-last padding-right-reduce align-right reduce-width">
    <img class="car-accident-img" src="<?= get_field('car_accident_-_image'); ?>" alt="lawyer"/>
  </div>
</div>
</section>
<!------------------------------------------------- car-accident-section-end ------------------------------->
<!--------------------------------------------- car-damage-section --------------------------------------->
<section class="car-damage-section">
  <div class="car-damage-body space-padding-right space-padding-left">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <h2 class="heading-blue-title"><?= get_field('car_damage_-_title'); ?></h2>
        <div class="car-damage-text text-size"><?= get_field('car_damage_-_text'); ?></div>
      </div>
      <div class="col-xl-6 col-md-12">
        <img class="car-damage-img padding-inner-left" src="<?= get_field('car_damage_-_image'); ?>" alt="car-damage-img">
      </div>
    </div>

    <div class="row">
        <!--<div class="col-md-12">
          <div class="car-damage-text text-size"><?= get_field('car_damage_below_text'); ?></div>
        </div>-->
        <div class="col-xl-6 col-sm-12">
          <h3 class="heading-red-title min-height-col minhgh3"><?= get_field('economic_damage_-_heading_1'); ?></h3>
          <p class="line-height-text text-size"><?= get_field('economic_damage_-_text_1'); ?></p>
        </div>
        <div class="col-xl-6 col-sm-12">
          <h3 class="heading-red-title min-height-col minhgh3"><?= get_field('economic_damage_-_heading_2'); ?></h3>
          <p class="line-height-text text-size"><?= get_field('economic_damage_-_text_2'); ?></p>
        </div>
    </div>
  </div>
</section>
<!------------------------------------------------ car-damage-end ------------------------------------------>

<!------------------------------------------------- economic-damage-section-start ------------------------------->
<section class="economic-damage-section">
  <div class="economic-damage-row space-padding-right">
  <div class="four-col-section reduce-width small-right-padding">
    <img class="economic-damage-img" src="<?= get_field('economic_damage_-_side_image'); ?>" alt="lawyer"/>
  </div>
  <div class="four-col-section four-full-col-section">
    <h3 class="heading-red-title min-height-col"><?= get_field('economic_damage_-_heading_3'); ?></h3>
    <p class="line-height-text text-size"><?= get_field('economic_damage_-_text_3'); ?></p>
  </div>
  <div class="four-col-section four-full-col-section">
    <h3 class="heading-red-title min-height-col"><?= get_field('economic_damage_heading_4'); ?></h3>
    <p class="line-height-text text-size"><?= get_field('economic_damage_text_4'); ?></p>
  </div>
  <div class="four-col-section four-full-col-section no-right-padding">
    <h3 class="heading-red-title min-height-col"><?= get_field('economic_damage_heading_5'); ?></h3>
    <p class="line-height-text text-size"><?= get_field('economic_damage_text_5'); ?></p>
  </div>
</div>
</section>

<!------------------------------------------------- economic-damage-section-end ------------------------------->

<!-------------------------------------------------- car-recovery-section ------------------------------------->
<section class="car-recovery-section">
  <div class="car-recovery-row space-padding-left ">
    <div class="car-recovery-row-body ">
    <div class="row">
  <div class=" col-md-12 col-xl-5 car-recovery-col">
    <img class="car-recovery-img" src="<?= get_field('car_recovery_-_image_1'); ?>">
  </div>
  <div class="col-md-12 col-xl-7 car-recovery-col">
    <div class="padding-inner-left">
    <h2 class="heading-blue-title"><?= get_field('car_recovery_-_heading_1'); ?></h2>
    <div class="line-height-text text-size"><?= get_field('car_recovery_-_text_1'); ?></div>
  </div>
</div>
</div>
</div>
  <div class="car-recovery-col padding-right-reduce align-right">
    <img class="car-recovery-img" src="<?= get_field('car_recovery_-_side_image'); ?>">
  </div>
</div>

<div class="car-recovery-row space-padding-left ">
  <div class="row">
    <div class="col-md-12">
      <div class="line-height-text text-size"><?= get_field('car_recovery_below_text'); ?></div>
    </div>
  </div>
</div>

<!--<div class="car-recovery-row space-padding-left">
  <div class="car-recovery-body">
    <div class="row">
      <div class="col-md-12 col-xl-6 car-recovery-col">
        <h2 class="heading-blue-title"><?= get_field('car_recovery_-_heading_2'); ?></h2>
      </div>
      <div class="col-md-12 col-xl-6 car-recovery-col">
        <div class="padding-inner-left">
          <div class="line-height-text text-size"><?= get_field('car_recovery_-_text_2'); ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="car-recovery-row space-padding-left ">
  <div class="car-recovery-body">
    <div class="row">
      <div class="col-md-12">
        <h2 class="heading-blue-title"><?= get_field('understanding_title'); ?></h2>
        <div class="line-height-text text-size"><?= get_field('understanding_text'); ?></div>
      </div>
    </div>
  </div>
</div>

  <div class="car-recovery-row space-padding-left ">
  <div class="car-recovery-body">
  <div class="row">
  <div class="col-md-12 col-xl-5 car-recovery-col">
    <img class="car-recovery-img" src="<?= get_field('car_recovery_-_image_3'); ?>">
  </div>
    <div class="col-md-12 col-xl-7 car-recovery-col">
    <div class="padding-inner-left">
    <h2 class="heading-blue-title"><?= get_field('car_recovery_-_heading_3'); ?></h2>
    <p class="reduce-min-height"><?= get_field('car_recovery_-_text_3'); ?></p>
    <?= get_field('car_recovery_-_text_3_-_points'); ?> 
  </div>
</div>
</div>
</div>
</div>-->

<div class="car-recovery-row space-padding-left ">
  <div class="car-recovery-body">
      <div class="padding-inner-left">
      <div class="row">
        <div class="col-md-12 car-recovery-col text-size">
          <h2 class="heading-blue-title"><?= get_field('car_recovery_-_heading_4'); ?></h2>
          <p class="reduce-min-height text-size"><?= get_field('car_recovery_-_text_4'); ?></p>
          <?= get_field('car_recovery_-_text_4_-_points'); ?> 
        </div>
      </div>
    </div>
  </div>
</div>

<div class="car-recovery-row space-padding-left ">
  <div class="car-recovery-body">
  <div class="row">
  <div class="col-md-12 col-xl-6 car-recovery-col">
    <img class="car-recovery-img" src="<?= get_field('car_recovery_-_image_5'); ?>">
  </div>
  <div class="col-md-12 col-xl-6 car-recovery-col">
    <div class="padding-inner-left">
      <h2 class="heading-blue-title"><?= get_field('car_recovery_-_heading_5'); ?></h2>
      <p  class="line-height-text text-size"><?= get_field('car_recovery_-_text_5'); ?></p>
    </div>
  </div>
  <div class="col-md-12 car-recovery-col">
    <div class="text-size"><?= get_field('car_recovery_below_text_5'); ?></div>
  </div>
</div>
</div>
</div>
</section>

<!-------------------------------------------------- car-recovery-section-end ------------------------------------->

<div class="car-recovery-row space-padding-left text-size mrgtopmins">
  <div class="car-recovery-body">
      <div class="padding-inner-left">
      <div class="row">
        <div class="col-md-12 car-recovery-col">
          <h2 class="heading-blue-title"><?= get_field('lawyer_-_heading_1'); ?></h2>
          <p class="reduce-min-height text-size"><?= get_field('lawyer_-_text_1'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------- lawyer-section-start ---------------------------->

<!------------------------------------------------- lawyer-section-end -------------------------->
<!---------------------------------------------- medical-section -------------------->
<!--<section class="medical-section">
  <div class="medical-row space-padding-right">
    <div class="medical-col">
      <img class="medical-img" src="<?= get_field('medical_-_image'); ?>" alt="medical-image">
    </div>
    <div class="medical-section-body">
    <div class="row">
    <div class="col-xl-4 col-md-12 medical-col ">
      <h3 class="heading-red-title reduce-min-height"><?= get_field('medical_-_heading_1'); ?></h3>
       <div class="line-height-text text-size"><?= get_field('medical_-_text_1'); ?> </div>
    </div>
    <div class="col-xl-8 col-md-12 medical-col">
      <div class="medical-sub-row">
        <div class="medical-sub-col">
          <h3 class="heading-red-title reduce-min-height"><?= get_field('medical_-_heading_2'); ?></h3>
          <div class="line-height-text text-size"><?= get_field('medical_-_text_2'); ?></div>
        </div>
        <div class="medical-sub-col">
          <h3 class="heading-red-title reduce-min-height"><?= get_field('medical_-_heading_3'); ?></h3>
          <p class="line-height-text text-size"><?= get_field('medical_-_text_3'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</section>-->
<!-------------------------------------------- medical-section-end ------------------>  

<?php get_footer(); ?>

<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script async src="//320917.tctm.co/t.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-32HS1CEGFH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-32HS1CEGFH');
</script>
	 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<style type="text/css">
article#post-400 h1 {
    padding: 50px 50px 50px 50px;
}
  h2.gform_title {
    font-family: "Raleway", sans-serif !important;
    font-size: 23px;
    padding-bottom: 20px;
    color: #fff;
    padding: 60px 60px 0px 60px;
}
form#gform_1 div#gform_fields_1 label {
    display: none;
}

form#gform_1 label {
    display: none;
}
form#gform_1 input#gform_submit_button_1:hover, form#gform_1 input#gform_next_button_1_8:hover, form#gform_1 input#gform_previous_button_1:hover {
    background-color: black !important;
    color: #fff;
}
form#gform_1 .gform_wrapper.gravity-theme .gfield textarea.medium {
    height: 120px;
    padding: 8px 8px 8px 4px;
}
form#gform_1 input {
    padding: 8px 8px 8px 4px !important;
}
textarea#input_1_5 {
    height: 140px !important;
    padding: 8px 8px 8px 4px !important;
}
form#gform_1 .gform_wrapper.gravity-theme .gfield input.medium, .gform_wrapper.gravity-theme .gfield select.medium {
    width: calc(100% - 16px / 2) !important;
}
input#input_1_1, input#input_1_6 {
    width: 90% !important;
}
input#input_1_4, input#input_1_7 {
    width: 100% !important;
}
div#gform_confirmation_message_1 {
    padding: 120px 0px 0px 60px;
    color: #fff !important;
    line-height: 23px;
    font-size: 20px;
}



form#gform_1 input#gform_next_button_1_8 {
    width: 100%;
    background-color: #891c1c !important;
    color: #fff;
    border: none;
    padding: 5px !important;
    font-size: 14px;
    letter-spacing: 3px;
    transition: 0.5s all ease-in-out;
    margin-top: 10px;
    text-transform: uppercase;
}
form#gform_1 .gf_progressbar.gf_progressbar_blue {
    display: none;
}

form#gform_1 p.gf_progressbar_title {
    font-family: "Raleway", sans-serif !important;
    font-size: 20px !important;
    padding-bottom: 20px;
    color: #fff !important;
}
form#gform_1 form#gform_1 label {
    display: none;
}

form#gform_1 div#field_1_1 label span {
    display: none;
}
form#gform_1 div#field_1_5 label {
      display: inherit;
    font-weight: normal;
    font-size: 14px;
    color: #fff;
}
form#gform_1 div#field_1_5 label span {
    display: none;
}

@media screen and (max-width: 767px) {
 
}
@media screen and (min-width: 768px) {}
form#gform_1 input#gform_submit_button_1 {
    width: 48%;
    background-color: #891c1c !important;
    color: #fff;
    border: none;
    padding: 5px !important;
    font-size: 14px;
    letter-spacing: 3px;
    transition: 0.5s all ease-in-out;
    margin-top: 10px;
    text-transform: uppercase;
    margin-left: 0px;
    float: right;
}
form#gform_1 input#gform_previous_button_1 {
    width: 46%;
    background-color: #891c1c !important;
    color: #fff;
    border: none;
    padding: 5px !important;
    font-size: 14px;
    letter-spacing: 3px;
    transition: 0.5s all ease-in-out;
    margin-top: 10px;
    text-transform: uppercase;

}
.ginput_container.ginput_container_post_title {
    display: none;
}
</style>
<body>
  <!----------------------------------------- header-start ------------------------------------->
  <header>
    <div class="header-section container">
      <nav class="navbar navbar-expand-xl navbar-light">
        <div class="navbar-brand"><a href="<?= get_site_url(); ?>"><img src="<?= ot_get_option('website_logo'); ?>" class="logo-img" alt="Physician, APC & Practice Management Services"/></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <?php wp_nav_menu(array('theme_location' => 'menu-1', 'container' => 'ul', 'menu_class' => 'navbar-nav ml-auto')); ?>
          <p class="nav-contact-text">Call Us &nbsp; <a class="nav-contact-no" href="tel:<?= ot_get_option('contact_number'); ?>"><?= ot_get_option('contact_number'); ?></a></p>
        </div>
      </nav>
    </div>
  </header>
  <!---------------------------------------------- header-end -------------------------------------->
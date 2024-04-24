<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!----------------------------------------- get-in-touch-section-start -------------->
<section class="get-in-touch" id="contact-form">
  <div class="get-in-touch-row  container">
    <div class="get-in-touch-col">
      <div class="get-in-touch-body">
        <h2 class="get-in-touch-title">Get In Touch</h2>
        <p class="get-in-touch-text"><?= ot_get_option('get_in_touch'); ?></p>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="address">
              <h2 class="address-title">Address</h2>
              <p class="get-in-touch-text"><?= ot_get_option('address'); ?></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="phone">
              <h2 class="phone-title">Phone/Fax</h2>
              <p class="get-in-touch-text">PHONE: <a href="tel:<?= ot_get_option('atlanta_phone'); ?>"><?= ot_get_option('atlanta_phone'); ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="get-in-touch-col background">
      
      <?= do_shortcode('[gravityform id="1" ajax="true"]') ?>
    </div>
  </div>
</section>
<!------------------------------------------- get-in-touch-section-end -------------->
<!--------------------------- map ------------->
<section class="map-wrapper">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="map">
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.281349906123!2d-83.39185258544728!3d33.95960733005486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f66d3b534fffff%3A0x6098ba40210b977d!2s500%20N%20Milledge%20Ave%20Suite%20210%2C%20Athens%2C%20GA%2030601!5e0!3m2!1sen!2sus!4v1649689658492!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
</div>
</section>
<!-------------------------------------------- footer-start -------------------------------------->
<footer class="container ">
  <div class="footer-body">
    <div class="footer-content ">
      <div class="logo ">
        <a href="<?= get_site_url(); ?>"><img src="<?= ot_get_option('website_logo'); ?>" class="logo-img"></a>
      </div>
    </div>
    <div class="footer-content">
      <p class="footer-contact-text">Call Us <a class="footer-contact-no" href="tel:<?= ot_get_option('contact_number'); ?>"><?= ot_get_option('contact_number'); ?></a></p>
    </div>
    <div class="footer-content">
      <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => 'ul', 'menu_class' => 'footer-menu')); ?>
    </div>
    <div class="footer-content footer-social">
      <ul class="footer-social-icon">
		  <?php if(!empty(ot_get_option('facebook'))){ ?>
        <li><a href="<?= ot_get_option('facebook'); ?>"><img src="<?= get_site_url(); ?>/wp-content/uploads/2021/03/facebook.png" /></a></li> <?php } 
		  if(!empty(ot_get_option('twitter'))){ ?>
        <li><a href="<?= ot_get_option('twitter'); ?>"><img src="<?= get_site_url(); ?>/wp-content/uploads/2021/03/twitter.png" /></a></li> <?php } 
		  if(!empty(ot_get_option('youtube'))){ ?>
        <li><a href="<?= ot_get_option('youtube'); ?>"><img src="<?= get_site_url(); ?>/wp-content/uploads/2021/03/youtube.png" /></a></li> <?php } 
		  if(!empty(ot_get_option('linkedin'))){ ?>
        <li><a href="<?= ot_get_option('linkedin'); ?>"><img src="<?= get_site_url(); ?>/wp-content/uploads/2021/03/linkedin.png" /></a></li> <?php } ?>
      </ul>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <p>
      &copy; <?= ot_get_option('copyright'); ?>
    </p>
    <p>
      <a href="<?= ot_get_option('terms_and_conditions'); ?>">Term And Conditions.</a>
    </p>
  </div>
</div>

<!-------------------------------------------------- footer-end --------------------------------->

<script type="text/javascript">
  $(document).ready(function() {
    /* Navbar fixed */
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if (height > 65) {
        $('header').addClass('fixed-header');
      } else {
        $('header').removeClass('fixed-header');
      }
    })

    /* Change banner according to mobile/desktop */
    if ($('.banner-section').length > 0) {
      var windowWidth = window.outerWidth;
      if (windowWidth > 560) {
        var imageUrl = "<?= get_field('banner_image_background'); ?>"
      } else {
        var imageUrl = "<?= get_field('banner_image_background_mobile'); ?>"
      }
      $('.banner-section').css('background-image', 'url(' + imageUrl + ')');
    }
  });
</script>
<?php wp_footer(); ?>
</body>

</html>
<!-------------------------------------------------- footer-end --------------------------------->
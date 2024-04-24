<?php
add_action('wp_enqueue_scripts', 'extra_child_scripts');
function extra_child_scripts()
{
    wp_enqueue_script('Jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_style('Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('FontAwesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('Child-theme', get_stylesheet_directory_uri() . '/style.css', array(), '2.1.2' );
    wp_enqueue_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',  null, null, true);
    wp_enqueue_script('Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',  null, null, true);
}

/*
 * Enqueue scripts.js if file scripts.js exists
 */
function load_scripts()
{

    //wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), NULL, true);

    wp_localize_script(
        'ajax',
        'wp_ajax',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );
}

add_action('wp_enqueue_scripts', 'load_scripts');

add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

/* Display posts from categories in FAQ page */
function filter_ajax()
{
    $category = $_POST['category'];

    $args = array(
        'posts_per_page' => 0,
        'post_type' => 'faq'
    );

    if ($category != NULL) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'faq_category',
                'field' => 'id',
                'terms' => $category
            )
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-xl-4 col-md-6 col-sm-6">
                <a href="<?= the_permalink(); ?>">
                    <div class="faq-card">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="car-image" class="faq-card-image" />
                        <div class="faq-card-body">
                            <h6 class="faq-card-category"><?= get_the_terms(0, 'faq_category')[0]->name; ?></h6>
                            <h5 class="faq-card-title"><?= the_title('<h4>', '</h4>'); ?></h5>
                            <a class="faq-read-more" href="<?= the_permalink(); ?>">Read more</a>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}

function register_widget_side_bar()
{
    register_sidebar(array(
        'name' => __('Side bar', 'smallenvelop'),
        'id' => 'side_bar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'register_widget_side_bar');

function register_widget_faq_side_bar()
{
    register_sidebar(array(
        'name' => __('FAQ side bar', 'smallenvelop'),
        'id' => 'faq_side_bar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
add_action('widgets_init', 'register_widget_faq_side_bar');

/* Recent posts shortcode function */
function recent_posts_shortcode()
{
    if (is_single()) {  ?>

        <div class="row js-filter mt-4" id="data">
            <?php
            $args = array(
                'post_type' => 'faq',
                'posts_per_page' => 2
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="col-md-12">
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
    <?php
    }
}

add_shortcode('recent_posts', 'recent_posts_shortcode');

/* Execute php in widget area */
function php_execute($html)
{
    if (strpos($html, "<" . "?php") !== false) {
        ob_start();
        eval("?" . ">" . $html);
        $html = ob_get_contents();
        ob_end_clean();
    }
    return $html;
}

add_filter('widget_text', 'php_execute', 100);

/* Header menu */
/*
function register_header_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
*/
// add_action('init', 'register_header_menu');

/* removie default div from header */
function jba_remove_twentynineteen_menu_filters()
{
    remove_filter('wp_nav_menu', 'twentynineteen_add_ellipses_to_nav');
    remove_filter('wp_nav_menu_objects', 'twentynineteen_add_mobile_parent_nav_menu_items');
    remove_filter('walker_nav_menu_start_el', 'twentynineteen_add_dropdown_icons');
    remove_filter('nav_menu_link_attributes', 'twentynineteen_nav_menu_link_attributes');
}
add_action('init', 'jba_remove_twentynineteen_menu_filters');

function jba_dequeue_twentynineteen_menu_scripts()
{
    wp_dequeue_script('twentynineteen-priority-menu');
    wp_dequeue_script('twentynineteen-touch-navigation');
}
add_action('wp_print_scripts', 'jba_dequeue_twentynineteen_menu_scripts', 100);

/* Testomonial shortcode */
function testomonial_shortcode()
{
    ob_start(); ?>
    <div class="testimonials-box">
        <div class="testomonials">
            <h3 class="single-faq-testomonials-heading">TESTOMONIALS</h3>
            <h2 class="single-faq-testomonials-about-us">What our clients say about us</h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $args = array('post_type' => 'testomonial', 'posts_per_page' => -1);
                    $query = new WP_Query($args);
                    $count = 0;
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="carousel-item <?php if ($count == 0) echo 'active' ?>">
                                <?php $count++ ?>

                                <!-- <p class="testomonials-content"></p> -->
                                <div class="testomonials-content"><i><?php the_content(); ?></i></div>
                                <p class="single-faq-client-name"><?php the_title(); ?></p>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <?php
    $output = ob_get_clean();
    wp_reset_postdata();
    return $output;
}

add_shortcode('testomonials', 'testomonial_shortcode');

/* Our results shortcode */
function our_results_shortcode()
{
    ob_start(); ?>
    <div class="result-box">
        <div class="our-results-section">
            <h2 class="our-result-title">OUR RESULTS</h2>
            <div class="container">
                <div class="row ">
                    <div class="col-xl-3 col-md-6 col-item-sec">

                        <p class="dollar">$<?= the_field('results_number_1'); ?></p>
                        <p class="million">Million</p>
                        <p class="result-cat"><?= the_field('results_text_1'); ?></p>

                    </div>
                    <div class="col-xl-3 col-md-6 second-col-sec">

                        <p class="dollar">$<?= the_field('results_number_2'); ?></p>
                        <p class="million">Million</p>
                        <p class="result-cat"><?= the_field('results_text_2'); ?></p>

                    </div>
                    <div class="col-xl-3 col-md-6 col-item-sec">

                        <p class="dollar">$<?= the_field('results_number_3'); ?></p>
                        <p class="million">Million</p>
                        <p class="result-cat"><?= the_field('results_text_3'); ?></p>

                    </div>
                    <div class="col-xl-3 col-md-6">

                        <p class="dollar">$<?= the_field('results_number_4'); ?></p>
                        <p class="million">Million</p>
                        <p class="result-cat"><?= the_field('results_text_4'); ?></p>

                    </div>
                    <div class="reviews-sec">
                        <h2 class="review-no">4.95</h2>
                        <div class="star-icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <p class="review-title">Google Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $output = ob_get_clean();
    wp_reset_postdata();
    return $output;
}

add_shortcode('our_results', 'our_results_shortcode');


function custom_textarea_validation_filter($result, $tag) {  
$type = $tag['type'];
$name = $tag['name'];
if($name == 'message') {
$value = $_POST[$name];
$Match_all = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]|[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,8}/";
if(preg_match($Match_all,$value)){

    $result->invalidate( $tag, "One or more fields have an error. Please check and try again." );
                }
}
return $result;
}
add_filter('wpcf7_validate_textarea','custom_textarea_validation_filter', 10, 2);
add_filter('wpcf7_validate_textarea*', 'custom_textarea_validation_filter', 10, 2);

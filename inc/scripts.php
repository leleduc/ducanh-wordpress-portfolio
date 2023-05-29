<?php
function ducanh_portfolio_scripts()
{
    wp_enqueue_style('ducanh-portfolio-style', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_enqueue_style('wp-block-library-css', get_template_directory_uri() . '/css/style.min.css', array(), rand(111, 9999), 'all');
    wp_enqueue_style('classic-theme-styles-css', get_template_directory_uri() . '/css/classic-themes.min.css', array(), rand(111, 9999), 'all');
    wp_enqueue_style('contact-form-7-css', get_template_directory_uri() . '/css/styles.css', array(), rand(111, 9999), 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), rand(111, 9999), 'all');
    wp_enqueue_style("animate-css", get_template_directory_uri() . "/css/animate.css", rand(111, 9999), 'all');
    wp_enqueue_style("barfiller-css", get_template_directory_uri() . "/css/barfiller.css", rand(111, 9999), 'all');
    wp_enqueue_style("fancy-box-css", get_template_directory_uri() . "/css/fancy-box.min.css", rand(111, 9999), 'all');
    wp_enqueue_style("flaticon-css", get_template_directory_uri() . "/css/flaticon.css", rand(111, 9999), 'all');
    wp_enqueue_style("line-awesome-css", get_template_directory_uri() . "/css/line-awesome.min.css", rand(111, 9999), 'all');
    wp_enqueue_style("magnific-popup-css", get_template_directory_uri() . "/css/magnific-popup.css", rand(111, 9999), 'all');
    wp_enqueue_style("nice-select-css", get_template_directory_uri() . "/css/nice-select.css", rand(111, 9999), 'all');
    wp_enqueue_style("owl-carousel-css", get_template_directory_uri() . "/css/owl.carousel.css", rand(111, 9999), 'all');
    wp_enqueue_style("owl-theme-default-css", get_template_directory_uri() . "/css/owl.theme.default.css", rand(111, 9999), 'all');
    wp_enqueue_style("responsive-css", get_template_directory_uri() . "/css/responsive.css", rand(111, 9999), 'all');
    // wp_enqueue_style("proview-style-css", get_template_directory_uri() . "/css/style.css", rand(111, 9999), 'all');

    wp_style_add_data('ducanh-portfolio-style', 'rtl', 'replace');

    wp_enqueue_script('ducanh-portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    // wp_enqueue_script('concatemoji',    get_template_directory_uri() . "/js/wp-emoji-release.min.js", array(), _S_VERSION, true);
    // wp_enqueue_script('jquery-core-js', get_template_directory_uri() . "/js/jquery.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script('jquery-migrate-js', get_template_directory_uri() . "/js/jquery-migrate.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("contact-form-7-js", get_template_directory_uri() . "/js/index.js", array(), _S_VERSION, true);
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("isotope-js", get_template_directory_uri() . "/js/isotope-3.0.6-min.js", array(), _S_VERSION, true);
    wp_enqueue_script("jquery-fancybox-js", get_template_directory_uri() . "/js/jquery-fancybox.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-barfiller-js", get_template_directory_uri() . "/js/jquery.barfiller.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-counterup-js", get_template_directory_uri() . "/js/jquery.counterup.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-easing-js", get_template_directory_uri() . "/js/jquery.easing.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-nice-select-js", get_template_directory_uri() . "/js/jquery.nice-select.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-sticky-js", get_template_directory_uri() . "/js/jquery.sticky.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("jquery-waypoints-js", get_template_directory_uri() . "/js/jquery.waypoints.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("magnific-popup-js", get_template_directory_uri() . "/js/magnific-popup.min.js", array(), _S_VERSION, true);
    wp_enqueue_script("owl-carousel-js", get_template_directory_uri() . "/js/owl.carousel.min.js", ['jquery'], _S_VERSION, true);
    wp_enqueue_script("popper-js", get_template_directory_uri() . "/js/popper.min.js", array(), _S_VERSION, true);
    wp_enqueue_script("wow-js", get_template_directory_uri() . "/js/wow.min.js", array(), _S_VERSION, true);
    wp_enqueue_script("proview-main-js", get_template_directory_uri() . "/js/main.js", array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ducanh_portfolio_scripts');

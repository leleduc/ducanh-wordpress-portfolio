<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducanh_Portfolio
 */

get_header();
?>

<!-- Hero Area -->
<?php get_template_part('template-parts/page/home/section', 'hero'); ?>
<!-- Hero Area -->

<!-- About Section -->
<?php get_template_part('template-parts/page/home/section', 'about'); ?>
<!-- About Section -->

<!-- Qualification Section  -->
<?php get_template_part('template-parts/page/home/section', 'qualify'); ?>
<!-- Qualification Section  -->

<!-- services -->
<?php get_template_part('template-parts/page/home/section', 'service'); ?>
<!-- Service Section  -->

<!-- Portfolio Section  -->
<?php get_template_part('template-parts/page/home/section', 'portfolio'); ?>
<!-- Portfolio Section  -->

<!-- Testimonial Section  -->
<?php get_template_part('template-parts/page/home/section', 'testimonial'); ?>
<!-- Testimonial Section  -->

<!-- Blog Section  -->
<?php get_template_part('template-parts/page/home/section', 'blog'); ?>
<!-- Blog Section  -->

<!-- Contact Section  -->
<?php get_template_part('template-parts/page/home/section', 'contact'); ?>
<!-- Contact Section  -->

<?php
// get_sidebar();
get_footer();

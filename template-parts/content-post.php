<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducanh_Portfolio
 */

$posttags = get_the_tags();
?>





<?php
// ducanh_portfolio_post_thumbnail(); 
?>


<div class="entry-content">
    <?php
    the_content();

    ?>
</div><!-- .entry-content -->

<div class="row d-flex align-items-center mt-50 mb-100">
    <div class="col-xl-6 col-lg-6 col-md-7 col-12">
        <div class="blog-tag-wrap">
            <ul>
                <?php
                if ($posttags) {
                    foreach ($posttags as $tag) {
                ?>
                        <li style="margin-bottom:12px"><a href="<?= get_term_link($tag); ?>"><?= $tag->name; ?></a></li>

                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <!-- <div class="col-xl-6 col-lg-6 col-md-5 col-12 text-end">
                            <div class="social-icon-wrap">
                                <span class="text-dark">Share this:</span>
                                <a class="facebook" href=""><i class="lab la-facebook-f"></i></a>
                                <a class="dribble" href=""><i class="lab la-instagram"></i></a>
                                <a class="behance" href=""><i class="lab la-twitter"></i></a>
                                <a class="behance" href=""><i class="lab la-linkedin"></i></a>
                            </div>
                        </div> -->
</div>










<?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer">
        <?php
        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'ducanh-portfolio'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post(get_the_title())
            ),
            '<span class="edit-link">',
            '</span>'
        );
        ?>
    </footer><!-- .entry-footer -->
<?php endif; ?>
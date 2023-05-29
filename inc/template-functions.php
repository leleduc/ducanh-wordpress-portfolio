<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Ducanh_Portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ducanh_portfolio_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'ducanh_portfolio_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ducanh_portfolio_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'ducanh_portfolio_pingback_header');


/**
 * Changing HTML Structure  of Comments.
 */
if (!function_exists('ducanh_better_commets')) :
	function ducanh_better_commets($comment, $args, $depth)
	{
?>
		<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-<?= comment_ID(); ?>">
			<div class="comment-body">
				<div class="comment-author vcard">
					<?php echo get_avatar($comment, $size = '80', $default = 'http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g'); ?>
				</div>
				<div class="comment-meta commentmetadata">
					<a href="<?php the_permalink() ?>"><?php printf(/* translators: 1: date and time(s). */esc_html__('%1$s at %2$s', '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></a>
				</div>
				<p> <?php comment_text() ?></p>
				<div class="comment-block">
					<div class="comment-arrow"></div>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><?php esc_html_e('Your comment is awaiting moderation.', '5balloons_theme') ?></em>
						<br />
					<?php endif; ?>
					<span class="comment-by">
						<strong><?php echo get_comment_author() ?></strong>
						<span class="float-right">
							<span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
						</span>
					</span>


				</div>
			</div>
		</li>
<?php
	}
endif;

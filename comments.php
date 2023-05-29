<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducanh_Portfolio
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div class="comments-section comments-light">



	<?php
	// You can start editing here -- including this comment!
	if (have_comments()) :
	?>

		<?php
		$ducanh_portfolio_comment_count = get_comments_number();
		if ('1' === $ducanh_portfolio_comment_count) {
		?>
			<h3 class="text-dark">Comments:</h3>
		<?php
			echo '<h3>';
			printf(
				/* translators: 1: title. */
				esc_html__('One responses to &ldquo;%1$s&rdquo;', 'ducanh-portfolio'),
				wp_kses_post(get_the_title())
			);
			echo '</h3>';
		} else {
		?>
			<h3 class="text-dark">Comments (<?= $ducanh_portfolio_comment_count; ?>):</h3>
		<?php
			echo '<h3>';
			printf(
				/* translators: 1: comment count number, 2: title. */
				esc_html(_nx('%1$s responses to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', $ducanh_portfolio_comment_count, 'comments title', 'ducanh-portfolio')),
				number_format_i18n($ducanh_portfolio_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				wp_kses_post(get_the_title())
			);
			echo '</h3>';
		}
		?>
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="commentlist">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback' => 'ducanh_better_commets'
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if (!comments_open()) :
		?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'ducanh-portfolio'); ?></p>
	<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
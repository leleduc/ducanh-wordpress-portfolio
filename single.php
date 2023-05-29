<?php
global $theme_uri;

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ducanh_Portfolio
 */

get_header();
?>



<?php
while (have_posts()) :
	the_post();

	//  Breadcrumb Area 

	get_template_part('template-parts/post/post', 'title');

?>
	<div class="single-blog-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="blog-content-wrap">
						<?php
						get_template_part('template-parts/content', get_post_type());

						// the_post_navigation(
						// 	array(
						// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'ducanh-portfolio') . '</span> <span class="nav-title">%title</span>',
						// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'ducanh-portfolio') . '</span> <span class="nav-title">%title</span>',
						// 	)
						// );

						get_template_part('template-parts/post/post', 'related');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

						?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php

endwhile; // End of the loop.
?>



<?php
// get_sidebar();
get_footer();

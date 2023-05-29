<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ducanh_Portfolio
 */

get_header();
?>

<?php if (have_posts()) : ?>


	<div class="breadcroumb-area gray-bg-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcroumb-title">

						<?php
						the_archive_title('<h1 class="text-dark">', '</h1>');
						the_archive_description('<h6 class="text-gray">', '</h6>');
						?>

					</div>
				</div>
			</div>
			<div class="bread-ellipse">
				<img src="<?= $theme_uri; ?>/img/shape/breadcrumb-ellipse.png" alt="">
			</div>
			<div class="bread-shape">
				<img src="<?= $theme_uri; ?>/img/shape/breadcrumb-shape.png" alt="">
			</div>
		</div>
	</div>



	<div id="blog" class="blog-section blog-three section-padding">
		<div class="container">
			<div class="row">


				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();
				?>
					<div class="col-xl-4 col-lg-4 col-md-6 col-12">
						<div class="single-blog-item">
							<div class="blog-thumb">
								<img width="370" height="400" src="<?php the_post_thumbnail_url(); ?>" class="attachment-large size-large wp-post-image" alt="" decoding="async">
							</div>
							<div class="blog-content">
								<div class="blog-meta">
									<p><?= get_the_date('d M Y'); ?></p>
								</div>
								<div class="blog-title">
									<h4><a href="<?php the_permalink() ?>">"><?php the_title(); ?></a></h4>
								</div>
							</div>
						</div>
					</div>

				<?php
				endwhile;
				?>

			</div>
			<?php
			the_posts_navigation();
			?>
		</div>
	</div>

<?php

else :

	get_template_part('template-parts/content', 'none');

endif;


get_footer();

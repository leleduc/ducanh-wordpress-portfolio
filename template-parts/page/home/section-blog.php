<?php
global $theme_uri;
?>
<div id="blog" class="blog-section section-padding dark-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>Blog <span>.....</span> </h6>
                    <h2>Latest News</h2>
                    <a href="#">
                        <h6>Show All</h6>
                    </a>

                </div>
            </div>
        </div>
        <div class="row">

            <!-- Get post News Query -->
            <?php $getposts = new WP_query();
            $getposts->query('post_status=publish&showposts=3&post_type=post&cat=7'); ?>
            <?php global $wp_query;
            $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInLeft  animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
                    <div class="single-blog-item">
                        <div class="blog-thumb">
                            <img width="370" height="400" src="<?= get_the_post_thumbnail_url(); ?>" class="attachment-large size-large wp-post-image" alt="" decoding="async">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p><?= get_the_date('F j, Y'); ?></p>
                            </div>
                            <div class="blog-title">
                                <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>
            <!-- Get post News Query -->

        </div>
    </div>
</div>
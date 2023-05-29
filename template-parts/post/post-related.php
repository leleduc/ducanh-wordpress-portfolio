<?php
global $post;
$categories = get_the_category($post->ID);


// echo '<pre>';
// print_r($post);
// wp_die();

if ($categories) {
    $category_ids = array();
    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args = array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts' => 2, // Số bài viết bạn muốn hiển thị.
        'caller_get_posts' => 1
    );
    $my_query = new wp_query($args);
    if ($my_query->have_posts()) {
?>


        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="text-dark">Recent Post</h2>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <?php
            while ($my_query->have_posts()) {
                $my_query->the_post();
            ?>


                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="single-blog-item blog-three">
                        <div class="blog-thumb">
                            <img width="370" height="400" src="<?php the_post_thumbnail_url(); ?>" class="attachment-large size-large" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p><?= get_the_date('d M Y'); ?></p>
                            </div>
                            <div class="blog-title">
                                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!--Recent Blog Post End-->



        </div>
<?php
    }
}

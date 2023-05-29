<div class="breadcroumb-area gray-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcroumb-title">
                    <?php the_title('<h1 class="text-dark">', '</h1>'); ?>
                    <div class="blog-meta">
                        <p class="text-gray-2"><?= get_the_date('d M Y'); ?> <span>Posted By <?= get_the_author_meta('display_name'); ?></span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
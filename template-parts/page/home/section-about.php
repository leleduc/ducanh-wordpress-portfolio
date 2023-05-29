<?php
global $theme_uri;
$contact_author_img = get_theme_mod('contact_author_img');
$contact_about_me = get_theme_mod('contact_about_me');
$contact_video = get_theme_mod('contact_video');
?>
<div id="about" class="about-section about-one section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-12 wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="about-left">
                    <div class="repeat-grid">
                        <img src="<?= $theme_uri; ?>/img/Repeat-Grid-3.png" alt="">
                    </div>
                    <div class="section-title">
                        <h6 class="text-gray-2">About Me <span>.....</span> </h6>
                        <h2 class="text-dark">Awarded Designer</h2>
                    </div>
                    <?= $contact_about_me; ?>
                    <div class="about-btn">
                        <a href="#about" class="main-btn primary">Know More</a>
                    </div>
                    <div class="pop-up-video">
                        <a href="<?= $contact_video; ?>" class="video-play-btn mfp-iframe">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                            </svg>
                            <span>Watch Video</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12 wow fadeInDown" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInDown;">
                <div class="about-right">
                    <div class="about-img-wrap">
                        <!-- <img src="" alt=""> -->
                        <img src="<?= $contact_author_img; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-dot-shape">
        <img src="<?= $theme_uri; ?>/img/shape/about-dot-shape.png" alt="">
    </div>
</div>
<?php
global $theme_uri;
?>
<div id="project" class="portfolio-section portfolio-two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-12">
                <div class="section-title">
                    <h2 class="text-dark">Portfolio</h2>
                    <p class="text-dark">Etiam facilisis ligula nec velit posuere egestas. Nunc dictum lectus sem.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-12 d-flex align-items-center justify-content-end">
                <ul class="port-menu recent text-center">
                    <li data-filter="*" class="active">All Works</li>

                    <li data-filter=".apps">Apps</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".illustration">Illustration</li>
                    <li data-filter=".website">Website</li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-list recent">




                    <div class="portfolio-bg-wrap  apps branding" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/6.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Graphics Design</a></h4>
                            <p>Design</p>
                        </div>
                    </div>



                    <div class="portfolio-bg-wrap  branding illustration" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/5.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Website Development</a></h4>
                            <p>development</p>
                        </div>
                    </div>



                    <div class="portfolio-bg-wrap  website" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/4.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Mockup Design</a></h4>
                            <p>Mockup</p>
                        </div>
                    </div>



                    <div class="portfolio-bg-wrap  apps website" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/3.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Business Development</a></h4>
                            <p>UX Research</p>
                        </div>
                    </div>



                    <div class="portfolio-bg-wrap  branding illustration" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/1.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Ecommerce Website</a></h4>
                            <p>Ecommerce</p>
                        </div>
                    </div>



                    <div class="portfolio-bg-wrap  branding illustration website" style="background-image: url(<?= $theme_uri; ?>/img/portfolio/2.png);">
                        <div class="portfolio-details">
                            <h4 class="portfolio-title"><a href="#">Product Landing Page</a></h4>
                            <p>UI/UX Design</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<?php
global $theme_uri;
$contact_address = get_theme_mod('contact_address');
?>
<div id="contact" class="contact-section contact-four section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6 class="text-gray-2">Contact <span>.....</span> </h6>
                    <h2 class="text-dark">Request for Quote</h2>
                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-8 col-lg-8 col-md-6 col-12 wow fadeInUp  animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                <div class="contact-form-wrap">
                    <div class="form">

                        <div id="block-7" class="widget widget_block">
                            <div class="wp-block-contact-form-7-contact-form-selector">
                                <div class="wpcf7 js" id="wpcf7-f161-p278-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>

                                    <form action="/wp/proview/proview4/#wpcf7-f161-p278-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="161">
                                            <input type="hidden" name="_wpcf7_version" value="5.7.5.1">
                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f161-p278-o1">
                                            <input type="hidden" name="_wpcf7_container_post" value="278">
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><input type="text" name="your-name" placeholder="Your Full Name">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" value="" type="email" name="your-email"></span>
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <p><input type="text" name="your-subject" placeholder="Subject">
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <p><input class="wpcf7-form-control has-spinner wpcf7-submit main-btn" type="submit" value="Send"><span class="wpcf7-spinner"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow fadeInRight  animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInRight;">
                <div class="map-wrap">
                    <?= $contact_address; ?>
                </div>
            </div>
        </div>
    </div>
</div>
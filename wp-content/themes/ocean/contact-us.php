<?php
/*

 * Template Name: Contact Us Template

*/
  get_header();
?>

<section class="contact-us-form theme bg-white position-relative z-index-10">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6 px-0">
        <div class="image-container position-relative h-100">
          <img class="w-100 h-100" src="<?php the_field("contact_us_image"); ?>" alt="">
          <div class="content position-absolute">
            <div class="title">
              <p class="font-18px font-octopus-500 uppercase theme color-white position-relative d-inline-block after-white-border">CONTACT US</p>
            </div>
            <div class="sub-title">
              <p class="font-48px font-octopus-500 capitilize theme color-white">We'd love to hear from you</p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-12 col-lg-6 d-flex flex-column justify-content-center p-5">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
      </div>
    </div>
  </div>
</section>
<section class="contact-network">
  <div class="contact-network-sub-container position-relative">
    <div class="bg-image position-absolute w-100 h-100"></div>
    <div class="container py-sm-5">
      <div class="row py-5 px-3 px-sm-0">
        <div class="col-3 col-lg-1 d-flex justify-content-start">
          <div class="call-us-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ic-email.svg" />
          </div>
          </div>
        <div class="col-9 col-lg-4">
          <div class="contact-container">
            <div class="call-us">
              <div class="call-us-text">
                <p class="font-36px font-octopus-300 theme color-black-2">Call Us</p>
              </div>
            </div>
            <div class="call-us-numbers pt-5">
              <?php if( have_rows('contact_numbers') ): ?>
                <?php while( have_rows('contact_numbers') ): the_row(); ?>
                  <div class="number-1">
                    <p class="font-16px font-octopus-300 theme color-black-2"><?php the_sub_field('mobile_number'); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-3 col-lg-1 d-flex justify-content-start pt-5 pt-sm-0">
          <div class="email-us-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ic-email.svg" />
          </div>
        </div>
        <div class="col-9 col-lg-4 pt-5 pt-lg-0">
          <div class="contact-container">
            <div class="email-us">
              <div class="email-us-text">
                <p class="font-36px font-octopus-300 theme color-black-2">Email Us</p>
              </div>
            </div>
            <div class="email-us pt-5">
              <?php if( have_rows('email_us') ): ?>
                <?php while( have_rows('email_us') ): the_row(); ?>
                  <div class="number-1">
                    <p class="font-16px font-octopus-300 theme color-black-2"><?php the_sub_field('email_id'); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-address contact-network">
  <div class="contact-address-sub-container contact-network-sub-container position-relative z-index-100">
    <div class="bg-image position-absolute h-100 w-100"></div>
    <div class="contact-address-overlay position-absolute h-100 w-100 light-overlay"></div>
    <div class="container py-5">
      <div class="row px-3 px-sm-0">
        <div class="col-2 col-lg-1 d-flex justify-content-start justify-sm-start">
          <div class="call-us-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ic-phone.svg" />
          </div>
        </div>
        <div class="col-9 col-lg-11 d-flex align-items-center">
          <div class="address-text">
            <p class="font-36px font-octopus-300 theme color-black-2">Address</p>
          </div>
        </div>
      </div>
      <div class="row px-3 px-sm-0 pt-5">
      <?php $num = 1; ?>
        <?php if( have_rows('contact_us_address') ): ?>
          <?php while( have_rows('contact_us_address') ): the_row(); ?>
          <div class="col-lg-1"></div>
              <div class="col-12 col-sm-5 address-inner pb-5">
                <div class="address-container">
                  <div class="location">
                    <h3 class="theme color-gray font-octopus-500 font-24px"><?php the_sub_field('state'); ?></h3>
                    <div class="current-address pt-3">
                      <div class="logo d-flex">
                        <div class="image">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                        </div>
                        <div class="address-location">
                          <p class="theme color-gray font-octopus-500">Address</p>
                          <div class="address">
                            <p class="theme color-gray font-octopus-300 font-16px"><?php the_sub_field('address'); ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="current-address pt-3">
                      <div class="logo d-flex">
                        <div class="image">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                        </div>
                        <div class="phone">
                          <p class="theme color-gray font-octopus-500">Phone</p>
                          <div class="numbers d-flex flex-column flex-sm-row">
                            <a href="tel:919611983584" data-rel="external" class="d-flex">
                              <p class="mb-0 font-octopus-300 theme color-black font-16px"><?php the_sub_field('phone_1'); ?></p>
                            </a>
                            <span class="px-1 theme color-gray"></span>
                            <a href="tel:919611983584" data-rel="external" class="d-flex">
                              <p class="mb-0 font-octopus-300 theme color-black font-16px"><?php the_sub_field('phone_2'); ?></p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="email pt-3">
                      <div class="logo d-flex">
                        <div class="image">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                        </div>
                        <div class="email-id">
                          <p class="theme color-gray font-octopus-500">Email</p>
                          <div class="numbers d-flex flex-column flex-sm-row">
                            <a href="mailto:info@ocean.net.in">
                              <p class="mb-0 font-octopus-300 theme color-black font-16px"><?php the_sub_field('email'); ?></p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php $num++; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="google-map position-relative z-index-10">
  <div class="map">
  <iframe class="w-100" height="533" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1011&amp;height=533&amp;hl=en&amp;q=Ocean%20Interiors%20Limited%20Bengaluru+(Google%20map)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embed-map.org/'>https://Embed-Map.org</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a35e70ade3fc53f10c8536d67eb80818beb75671'></script>
  </div>
</section>
<?php
  get_footer();
?>

      <footer id="footer" class="footer-section bottom w-100 py-5">
        <div class="contact-block w-100 position-absolute top theme bg-white">
          <div class="container">
            <div class="row">
              <div class="px-3 px-sm-0 d-lg-flex">
                <div class="col-12 col-sm-5 col-md-4 pb-3 pb-lg-0">
                  <div class="mobile ps-3 ps-sm-0">
                    <a href="tel:919611983584" data-rel="external" class="d-flex"> 
                      <div class="call-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ic-footer-phone.svg" />
                      </div>
                      <div class="mob-no d-flex align-items-center ps-5">
                        <p class="mb-0 font-octopus-500 theme color-gray">+91 96119 83584</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4">
                  <div class="mobile email ps-3 ps-sm-0">
                    <a href="mailto:info@ocean.net.in" data-rel="external" class="d-flex"> 
                      <div class="call-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ic-footer-email.svg" />
                      </div>
                      <div class="mob-no d-flex align-items-center ps-5">
                        <p class="mb-0 font-octopus-500 theme color-gray">info@ocean.net.in</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-0 col-sm-2 col-md-4">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bg position-absolute w-100 h-100">
        </div>
        <div class="container pt-5 mt-5 px-4">
          <div class="row pt-5">
            <div class="col-12 col-lg-2 pb-4">
              <div class="footer-site-logo d-none d-lg-block">
                <img src="<?php echo get_theme_mod('footer_logo_url'); ?>" class="site-logo mr-3 h-100">
              </div>
            </div>
            <div class="col-12 col-lg-2">
            </div>
            <div class="pt-md-0 col-6 col-lg-2 pb-4">
              <?php
                if (has_nav_menu('footer_contracting')) {
                  wp_nav_menu(array(
                    'theme_location' => 'footer_contracting',
                    'container' => false,
                    'menu_class' => 'menu-section flex-row navbar-nav ml-auto h-100 theme bg-transparent uppercase font-octopus-700 theme color-white',
                    )
                  );
                }
              ?>
            </div>
            <div class="pt-md-0 col-6 col-lg-2 pb-4">
            <?php
              if (has_nav_menu('footer_real_estate')) {
                wp_nav_menu(array(
                  'theme_location' => 'footer_real_estate',
                  'container' => false,
                  'menu_class' => 'menu-section flex-row navbar-nav ml-auto h-100 theme bg-transparent uppercase font-octopus-700 theme color-white',
                  )
                );
              }
            ?>
            </div>
            <div class="pt-4 pt-md-0 col-12 col-lg-4 pb-4">
            <?php
              if (has_nav_menu('footer_company')) {
                wp_nav_menu(array(
                  'theme_location' => 'footer_company',
                  'container' => false,
                  'menu_class' => 'menu-section menu-section-2 flex-row navbar-nav ml-auto h-100 theme bg-transparent uppercase font-octopus-700 theme color-white',
                  )
                );
              }
            ?>
            </div>
          </div>
          <div class="row pt-5 flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-4 pt-4 pt-lg-0">
              <div class="social-icons d-flex justify-content-around justify-content-lg-start px-5 px-lg-0">
                <?php if( have_rows('social_icons', 749) ): ?>
                  <?php while( have_rows('social_icons', 749) ): the_row(); ?>
                    <div class="twitter mx-2">
                      <a target="_blank" href="<?php the_sub_field('link', 749); ?>">
                        <img src="<?php the_sub_field('icon', 749); ?>" alt="">
                      </a>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-between align-items-center pe-lg-5">
              <a href="<?php the_field('projects_link',749);?>">
                <p class="uppercase font-octopus-700 theme color-white">Gallery</p>
              </a>
              <a href="<?php the_field('news_link',749);?>">
                <p class="uppercase font-octopus-700 theme color-white">News</p>
              </a>
              <a href="<?php the_field('contact_link',749);?>">
                <p class="uppercase font-octopus-700 theme color-white">Contact</p>
              </a>
            </div>
          </div>
        </div>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>

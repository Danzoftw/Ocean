<?php
/*
 * Template Name: Locations template
*/
get_header();
?>
<section class="outer-clients-associations-container position-relative z-index-10">
    <section class="company-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image position-relative">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('company_locations_banner_image'); ?>)"></div>
                        <div class="container d-flex align-items-center h-100">
                            <div class="banner-text position-relative z-index-100">
                                <div class="company">
                                    <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border">locations</p>
                                </div>
                                <div class="company-text">
                                    <p class="theme color-white font-octopus-500 font-48px"><?php the_field('company_locations_banner_title');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="locations-contact contact-address contact-network position-relative z-index-10">
        <?php $num = 1; ?>
        <?php if( have_rows('company_locations_details') ): ?>
            <?php while( have_rows('company_locations_details') ): the_row(); ?>
                <div class="contact-address-sub-container contact-network-sub-container position-relative z-index-100">
                <div class="container py-5">
                    <?php 
                        if($num % 2 == 0){
                    ?>
                        <div class="bg-image position-absolute h-100 w-100 top left"></div>
                        <div class="light-overlay position-absolute h-100 w-100 top left"></div>
                    <?php
                        } else{
                    ?>
                        <div class="bg-image position-absolute h-100 w-100 top left"></div>
                    <?php   
                        }
                    ?>
                    <div class="row py-4 px-3 px-lg-0">
                        <div class="col-12">
                            <h3 class="theme color-gray font-octopus-500 font-24px mb-0"><?php the_sub_field('state'); ?></h3>
                        </div>
                        <div class="col-12 col-md-4 pt-4">
                            <div class="current-address">
                                <div class="logo d-flex">
                                    <div class="image">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                                    </div>
                                    <div class="address-location ps-3">
                                        <p class="theme color-gray font-octopus-500 pb-1 font-16px"><?php the_sub_field('address_title'); ?></p>
                                        <div class="address">
                                            <p class="theme color-gray font-octopus-300 font-16px"><?php the_sub_field('address'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pt-4">
                            <div class="current-address d-flex">
                                <div class="logo">
                                    <div class="image">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-phone.svg" />
                                    </div>
                                </div>
                                <div class="phone-details ps-3">
                                    <div class="phone-title">
                                        <p class="theme color-gray font-octopus-500 pb-1 font-16px"><?php the_sub_field('phone_title'); ?></p>
                                    </div>
                                    <?php if( have_rows('phone_repeater') ): ?>
                                    <?php while( have_rows('phone_repeater') ): the_row(); ?>
                                        <div class="numbers pb-2">
                                            <a href="tel:<?php the_sub_field('phone'); ?>" data-rel="external" class="d-flex">
                                            <p class="mb-0 font-octopus-300 theme color-gray font-16px"><?php the_sub_field('phone'); ?></p>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pt-4">
                            <div class="email d-flex">
                                <div class="logo">
                                    <div class="image">
                                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/images/ic-email.svg" />
                                    </div>
                                </div>
                                <div class="email-details ps-3">
                                    <div class="email-title pb-2">
                                        <p class="theme color-gray font-octopus-500"><?php the_sub_field('email_title'); ?></p>
                                    </div>
                                    <div class="email-id">
                                        <?php 
                                            if( have_rows('email_repeater') ): 
                                            while( have_rows('email_repeater') ): the_row(); 
                                        ?>
                                            <div class="email">
                                                <a href="mailto:<?php the_sub_field('email'); ?>">
                                                <p class="mb-0 font-octopus-300 theme color-gray font-16px"><?php the_sub_field('email'); ?></p>
                                                </a>
                                            </div>
                                        <?php 
                                            endwhile; 
                                            endif; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $num++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="locations-contact contact-address-bottom contact-network position-relative z-index-10">
        <div class="contact-address-sub-container contact-network-sub-container position-relative z-index-100">
            <div class="container py-5">
                <div class="bg-image position-absolute h-100 w-100 top left"></div>
                <div class="light-overlay position-absolute h-100 w-100 top left"></div>
                <div class="row px-3 px-lg-0">
                    <?php if( have_rows('company_locations_details_two') ): ?>
                    <?php while( have_rows('company_locations_details_two') ): the_row(); ?>
                        <div class="col-12 col-md-6 py-4">
                            <h3 class="theme color-gray font-octopus-500 font-24px mb-0"><?php the_sub_field('state'); ?></h3>
                            <div class="current-address">
                                <div class="logo d-flex pt-3">
                                    <div class="image">
                                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/ic-project-location.svg" />
                                    </div>
                                    <div class="address-location ps-3">
                                        <p class="theme color-gray font-octopus-500 pb-1 font-16px"><?php the_sub_field('address_title'); ?></p>
                                        <div class="address">
                                            <p class="theme color-gray font-octopus-300 font-16px"><?php the_sub_field('address'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</section>

<?php
	get_footer();
?>
<?php
/*
 * Template Name: Testimonials template
*/
get_header();
?>

<section class="outer-clients-associations-container company-testimonials position-relative z-index-10">
    <section class="company-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image position-relative">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('testimonials_banner_image'); ?>)"></div>
                        <div class="container d-flex align-items-center h-100">
                            <div class="banner-text">
                                <div class="company">
                                    <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border"><?php the_field('testimonials_banner_text'); ?></p>
                                </div>
                                <div class="company-text position-relative z-index-100">
                                    <p class="theme color-white font-octopus-500 font-48px banner-text-max-width"><?php the_field('testimonials_banner_sub_text');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-contents position-relative">
        <div class="bg-image position-absolute z-index-100-i common-bg w-100 h-100"></div>
        <div class="container position-relative z-index-100-i py-5 px-xl-5">
            <div class="row py-5 justify-content-center justify-content-md-start px-xl-5" id="myList">
                <?php if( have_rows('testimonials_contents') ): ?>
                <?php while( have_rows('testimonials_contents') ): the_row(); ?>
                    <div class="col-12 col-md-6 mb-4">
                        <li class="inner-container theme bg-white custom-box-shadow-2 p-3 p-xl-4 max-w-500 mx-auto h-100 position-relative list-none">
                            <div class="logo">
                                <img src=<?php the_sub_field('logo'); ?>>
                            </div>
                            <div class="ps-5 paragraph theme color-black-2 font-octopus-300 font-16px pb-5 mb-5">
                                <?php the_sub_field('paragraph'); ?>
                            </div>
                            <div class="name-desig position-absolute">
                                <div class="name">
                                    <p class="theme color-black-2 font-octopus-500 font-14px"><?php the_sub_field('name'); ?></p>
                                </div>
                                <div class="desig">
                                    <p class="theme color-black-2 font-octopus-300 font-14px"><?php the_sub_field('designation'); ?></p>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div id="loadMore" class="d-flex justify-content-center">
                <p class="px-5 py-3 theme color-gray-2 font-octopus-300 font-16px text-uppercase d-inline-block theme bg-hover-gray-2 box-shadow-1-gray-3 border-2-gray-2 color-hover-white border-radius-5 cursor-pointer">Load more</p>
            </div>
        </div>
    </section>
</section>

<?php
	get_footer();
?>
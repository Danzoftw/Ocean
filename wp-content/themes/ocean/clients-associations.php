<?php
/*
 * Template Name: Clients and Associations template
*/
get_header();
?>
<section class="outer-clients-associations-container">
    <section class="company-banner position-relative z-index-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image position-relative">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('c_a_banner_image'); ?>)"></div>
                        <div class="container d-flex align-items-center h-100">
                            <div class="banner-text top-50p">
                                <div class="company">
                                    <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border">CLIENTS & ASSOCIATIONS</p>
                                </div>
                                <div class="company-text">
                                    <p class="theme color-white font-octopus-500 font-48px"><?php the_field('c_a_banner_title');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="banner-overlay position-absolute dark-overlay d-none d-xl-block">
                            <div class="container h-100 d-flex align-items-center">
                                <ul class="menu-section uppercase font-octopus-700 ps-0 d-flex align-items-center">
                                    <li class="menu-item uppercase font-octopus-700">
                                        <a href="#clients">CLIENTS</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-section uppercase font-octopus-700">
                                        <a href="#associations">ASSOCIATIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients other-projects awards philosophy other-projects position-relative z-index-100 theme bg-white" id="clients">
        <div class="inner-container-1 position-relative py-md-5 z-index-100">
            <div class="container position-relative">
                <div class="row pb-5">
                    <div class="col-12 p-3 pb-lg-0 mb-lg-4">
                        <div class="title text-center text-lg-start">
                            <p class="uppercase after-border font-octopus-300 font-18px thme color-gray d-inline-block position-relative">clients</p>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="my-custom-slider">
                        <?php if( have_rows('c_a_client_logos') ): ?>
                            <?php while( have_rows('c_a_client_logos') ): the_row(); ?>
                            <div class="row d-flex mx-auto">
                                <?php if( have_rows('client_repeater') ): ?>
                                    <?php while( have_rows('client_repeater') ): the_row(); ?>
                                    <div class="col-4 col-sm-2 py-4">
                                        <img src="<?php the_sub_field('image'); ?>" alt="" class=" cursor-pointer def-image mx-auto">
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="leading-associations z-index-100 position-relative py-lg-5" id="associations">
        <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
        <div class="container py-5">
            <div class="px-3 px-sm-0 py-lg-5">
            <div class="row pb-5">
                <div class="col-12">
                    <p class="position-relative d-inline-block theme color-gray font-octopus-500 font-18px after-border">ASSOCIATIONS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="sub-title">
                        <p class="theme color-gray font-octopus-500 font-30px"><?php the_field('c_a_associations_heading'); ?></p>
                    </div>
                    <div class="architects py-4">
                        <p class="theme color-gray font-octopus-500 font-24px"><?php the_field('c_a_associations_title'); ?></p>
                    </div>
                </div>
            </div>
            <div class="leading-architects">
                <div class="row">
                    <?php if( have_rows('leading_architects_list') ): ?>
                        <?php while( have_rows('leading_architects_list') ): the_row(); ?>
                        <div class="col-12 col-sm-4 pb-4">
                            <p class="theme color-gray font-octopus-300 font-18px ps-3 position-relative"><?php the_sub_field('leading_architects');?></p>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="leading-associations z-index-100 position-relative">
        <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
        <div class="bg-overlay position-absolute w-100 h-100 dark-overlay"></div>
        <div class="container py-5">
            <div class="px-3 px-sm-0 py-lg-5 my-lg-5">
                <div class="row pb-4">
                    <div class="col-12">
                        <div class="architects">
                            <p class="theme color-gray font-octopus-500 font-24px"><?php the_field('c_a_pmcs_title'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="leading-architects">
                    <div class="row">
                        <?php if( have_rows('leading_pmcs_list') ): ?>
                            <?php while( have_rows('leading_pmcs_list') ): the_row(); ?>
                            <div class="col-12 col-sm-4 pb-4">
                                <p class="theme color-gray font-octopus-300 font-18px ps-3 position-relative"><?php the_sub_field('pmcs_list');?></p>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<?php
	get_footer();
?>
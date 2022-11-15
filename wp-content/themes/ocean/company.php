<?php
/*
 * Template Name: Company Template
*/
get_header();
?>

<section class="company-banner position-relative z-index-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="banner-image position-relative d-flex">
                    <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('company_banner_image'); ?>)"></div>
                    <div class="container d-flex align-items-center">
                        <div class="banner-text position-relative z-index-100">
                            <div class="company">
                                <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border">Company</p>
                            </div>
                            <div class="company-text">
                                <p class="theme color-white font-octopus-500 font-48px"><?php the_field('company_banner_text'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-overlay position-absolute dark-overlay d-none d-xl-block">
                        <div class="container h-100 d-flex align-items-center">
                            <?php
                                if (has_nav_menu('company_header')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'company_header',
                                        'container' => false,
                                        'menu_class' => 'menu-section uppercase font-octopus-700 ps-0',
                                        )
                                    );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-establish position-relative position-relative z-index-100" id="profile">
    <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
    <div class="container py-0 py-lg-5 px-lg-5">
        <div class="row py-5 justify-content-center px-lg-5">
            <div class="col-12 py-5">
                <div class="content">
                    <p class="text-center text-lg-start theme color-gray font-octopus-500 font-40px"><?php the_field('company_establishment'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hard-work position-relative z-index-100 theme bg-gray-1">
    <div class="container px-lg-5">
        <div class="row px-lg-5">
            <div class="col-12 col-md-6 col-lg-5 d-flex align-items-center pt-5 pt-md-0">
                <div class="hard-work-text pb-3 pb-lg-0">
                    <p class="pe-xl-5 text-center text-md-start theme color-gray font-octopus-500 font-40px"><?php the_field('hard_work_section_text'); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7 px-lg-0">
                <div class="img-container h-100">
                    <img class="w-100 object-fit-cover h-100" src="<?php the_field("hard_work_section_image"); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="philosophy other-projects position-relative z-index-100">
    <div class="inner-container-1 position-relative py-lg-5 z-index-100">
        <div class="bg-image position-absolute w-100 h-100 left top bottom"></div>
        <div class="container py-lg-5 px-lg-5">
            <div class="row py-5">
                <div class="col-12 pb-3 pb-lg-5 mb-lg-4">
                    <div class="title pb-5">
                        <p class="uppercase after-border font-octopus-500 font-18px theme color-gray d-inline-block position-relative">OUR "ONE" PHILOSOPHY</p>
                    </div>
                    <div class="sub-title">
                        <?php if( have_rows('our_philosophy_images') ): ?>
                            <?php while( have_rows('our_philosophy_images') ): the_row(); ?>
                                <p class="theme color-gray font-octopus-500 font-30px"><?php the_sub_field('title'); ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-3 col-md-2 d-flex align-items-center justify-content-end">
                    <p class="theme color-black font-72px font-octopus-wide-700 uppercase">one</p>
                </div>
                <div class="col-9 col-md-10 px-lg-0">
                    <div class="image-container">
                        <div class="my-slider common-slider my-custom-slider">
                            <?php if( have_rows('our_philosophy_images') ): ?>
                                <?php while( have_rows('our_philosophy_images') ): the_row(); ?>
                                    <div class="image-sizer">
                                        <div class="image position-relative">
                                            <img class="w-100 h-100 px-sm-2" src="<?php the_sub_field('image'); ?>" alt="">
                                            <div class="image-text position-absolute">
                                                <p class="theme color-white font-72px font-octopus-700 uppercase pt-2"><?php the_sub_field('text'); ?></p>
                                            </div>
                                           
                                        </div>
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
<section class="vision-mission position-relative z-index-10" id="mission_vision">
<div class="bg-image-left position-absolute h-100 w-50 left top bg-cover d-none d-md-block z-index-1" style="background-image: url(<?php the_field('vision_image'); ?>)"></div>
<div class="bg-image-right position-absolute h-100 w-50 right top bg-cover d-none d-md-block z-index-1" style="background-image: url(<?php the_field('mission_image'); ?>)"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 position-relative py-5">
            <div class="bg-image-left position-absolute h-100 w-100 left top bg-cover d-md-none" style="background-image: url(<?php the_field('vision_image'); ?>)"></div>
                <div class="ps-4 ps-sm-0 text-wrapper mx-auto position-relative z-index-2">
                    <div class="vision-title py-5 mb-5">
                        <p class="theme color-white font-20px font-octopus-500 uppercase pb-5"><?php the_field('vision_title'); ?></p>
                    </div>
                    <div class="vision-text py-sm-5">
                        <p class="theme color-white font-18px font-octopus-500 capitalize pt-sm-5"><?php the_field('vision_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative py-5">
            <div class="bg-image-right position-absolute h-100 w-100 right top bg-cover d-md-none" style="background-image: url(<?php the_field('mission_image'); ?>)"></div>
                <div class="ps-4 ps-sm-0 text-wrapper mx-auto position-relative z-index-2">
                    <div class="vision-title py-5 mb-5">
                        <p class="theme color-white font-20px font-octopus-500 uppercase pb-5"><?php the_field('mission_title'); ?></p>
                    </div>
                    <div class="vision-text py-sm-5">
                        <p class="theme color-white font-18px font-octopus-500 capitalize pt-sm-5"><?php the_field('mission_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-story position-relative z-index-100 py-5" id="our_story">
    <div class="bg-image position-absolute common-bg w-100 h-100"></div>
    <div class="container py-5 px-xl-5">
        <div class="px-3 px-sm-0">
            <div class="row px-xl-5">
                <div class="col-12 pb-5 mb-3">
                    <div class="title">
                        <p class="theme color-gray font-18px uppercase after-border position-relative d-inline-block">our story</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative px-xl-5" id="sticky-top-trigger">
                <span class="year-counter translate-center px-md-2 py-1 py-lg-3 theme bg-black-1 color-white justify-content-center d-flex" id="sticky-year">
                    <span class="current_year"><p>1996</p></span>
                </span>
                <div class="seperator position-absolute ">
                </div>
                <?php 
                    $counter = 0;
                    if( have_rows('our_story') ):
                    while( have_rows('our_story') ): the_row();
                    if($counter%2 == 0){
                ?>
                  <div class="left-counter col-12 col-md-12 pb-5 mb-4" data-aos="fade-right" data-aos-offset="350">
                        <div class="outer-wrapper">
                            <div class="left-wrapper right-wrapper d-inline-block">
                                <div class="image pb-2">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="left-circle" id="detect_left_circle_<?php echo $counter; ?>">
                                    <p></p>
                                </div>
                                <div class="inner-wrapper left-inner-wrapper max-width-275 d-inline-block">
                                    <div class="title">
                                        <span class="theme color-black-1 font-24px letter"><?php the_sub_field('title'); ?></span>
                                    </div>
                                    <div class="content">
                                        <p class="theme color-gray font-octopus-300 pt-2"><?php the_sub_field('content'); ?></p>
                                    </div>
                                    <div class="year">
                                        <span class="d-none" id="year_<?php echo $counter; ?>"><?php the_sub_field('year'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter++;
                    }
                    else{
                    ?>
                    <div class="col-12 col-md-12 pb-5 mb-4 d-flex flex-lg-row-reverse" data-aos="fade-right" data-aos-offset="350">
                        <div class="outer-wrapper">
                            <div class="left-wrapper right-wrapper d-inline-block">
                                <div class="image pb-2">
                                    <img src="<?php the_sub_field('image'); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="left-circle" id="detect_left_circle_<?php echo $counter; ?>">
                                    <p></p>
                                </div>
                                <div class="inner-wrapper left-inner-wrapper max-width-275 d-inline-block">
                                    <div class="title">
                                        <span class="theme color-black-1 font-24px letter"><?php the_sub_field('title'); ?></span>
                                    </div>
                                    <div class="content">
                                        <p class="theme color-gray font-octopus-300 pt-2"><?php the_sub_field('content'); ?></p>
                                    </div>
                                    <div class="year">
                                        <span class="d-none" id="year_<?php echo $counter; ?>"><?php the_sub_field('year'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                $counter++;
                }
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>

<section class="company-leadership position-relative z-index-100 pt-5 pt-sm-0" id="sticky-bottom-trigger">
    <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
    <div class="container pt-xl-5">
        <div class="px-3 px-xl-5 pt-lg-5">
            <div class="row pt-lg-5 mt-lg-5 px-xl-5">
                <div class="col-12 pb-5 pb-sm-0">
                    <p class="theme color-white font-18px font-octopus-500 uppercase after-white-border position-relative d-inline-block"><?php the_field('company_leadership_title'); ?></p>
                </div>
                <div class="col-0 col-lg-1"></div>
                <div class="col-6 col-lg-5 d-flex flex-column justify-content-center">
                    <div class="leader-name">
                        <p class="theme color-white font-48px font-octopus-wide-700"><?php the_field('company_leadership_name'); ?></p>
                    </div>
                    <div class="leader-desig">
                        <p class="theme color-white font-18px font-octopus-300"><?php the_field('company_leadership_desig'); ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php the_field('company_leadership_image'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-leadership-content position-relative z-index-10">
    <div class="company-leadership-container py-lg-5 theme bg-gray-1">
        <div class="container py-5">
            <div class="row py-md-5 px-3 px-sm-0">
                <div class="col-0 col-md-1"></div>
                <div class="col-12 col-md-11">
                    <div class="content theme color-black-1 font-16px font-octopus-300">
                        <?php the_field('company_leadership_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="company-team theme bg-white py-lg-5 position-relative z-index-10" id="company_team">
    <div class="container py-5 px-xl-5">
        <div class="row py-lg-5 px-3 px-xl-5">
            <?php 
                if( have_rows('company_team') ):
                while( have_rows('company_team') ): the_row();
            ?>
			<div class="col-12 col-md-4 my-3">
                <div class="image pb-2">
                    <img src="<?php the_sub_field('image') ?>" alt="" class="img-fluid">
                </div>
                <div class="team-info">
                    <div class="name">
                        <p class="theme color-black-1 font-octopus-wide-700 font-20px"><?php the_sub_field('name') ?></p>
                    </div>
                    <div class="designation">
                        <p class="theme color-black-1 font-octopus-300 font-14px"><?php the_sub_field('designation') ?></p>
                    </div>

                </div>
            </div>
            <?php 
                endwhile; 
                endif; 
            ?>
        </div>
    </div>
</section>
<section class="dedicated-workforce position-relative z-index-100 py-5">
    <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
    <div class="container py-5 px-xl-5">
        <div class="px-md-0 py-lg-5">
            <div class="px-3">
                <div class="row px-xl-5">
                    <div class="col-12">
                        <div id="counters_1" class="count-container text-center text-lg-start d-flex">
                            <div class="counter theme color-black-1 font-octopus-wide-700 font-48px d-inline-block" 
                                data-TargetNum="<?php the_field("dedicated_workforce_count"); ?>"
                                data-Speed="5678">
                            </div>
                            <p class="theme color-black-1 font-octopus-wide-700 font-48px">+</p>
                        </div>
                        
                        <div class="dedicated-workforce-title">
                            <p class="theme color-black-1 font-octopus-300 font-24px"><?php the_field('dedicated_workforce_title') ?></p>
                        </div>
                    </div>
                </div>
                <div class="row py-5 py-sm-0">
                    <div class="col-12 px-lg-5">
                        <div class="image px-lg-5">
                            <img class="w-100" src="<?php the_field('dedicated_workforce_image') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-padding">
                <div class="pt-lg-5 mt-lg-5 desktop-view d-none d-sm-flex flex-wrap">
                    <div class="row">
                        <?php
                            $counter = 0;
                            $new_counter = 1;
                            if( have_rows('dedicated_workforce_team_counter') ):
                            while( have_rows('dedicated_workforce_team_counter') ): the_row();
                            if($counter % 2 == 0){
                        ?>
                            <div class="single-block col-6 col-sm-4 theme bg-white">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-5 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('odd_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="designation pe-lg-5 text-start">
                                        <p class="text-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('odd_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block col-6 col-sm-4 theme bg-gray-1">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-5 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('even_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="designation pe-lg-5 text-start">
                                        <p class="text-start  theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('even_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                            $new_counter++;
                            } else{
                        ?>
                            <div class="single-block col-6 col-sm-4 theme bg-white">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-5 d-flex flex-column justify-content-center">
                                    <div id="counters_2" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('odd_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="designation pe-lg-5 text-start">
                                        <p class="text-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('odd_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block col-6 col-sm-4 theme bg-gray-1">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-5 d-flex flex-column justify-content-center">
                                    <div id="counters_2" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('odd_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="designation pe-lg-5 text-start">
                                        <p class="text-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('even_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                            $new_counter++;
                            }
                            endwhile;
                            endif;
                        ?>
                    </div>
                    </div>

                    <div class="pt-5 mobile-view d-flex flex-wrap d-sm-none">
                        <?php
                            $counter = 0;
                            if( have_rows('dedicated_workforce_team_counter') ):
                            while( have_rows('dedicated_workforce_team_counter') ): the_row();
                            if($counter % 2 == 0){
                        ?>
                            <div class="single-block col-6 theme bg-white">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-4 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('odd_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-0 designation pe-lg-5 text-center">
                                        <p class="text-center text-lg-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('odd_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block col-6 theme bg-gray-1">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-4 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('even_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-0 designation pe-lg-5 text-center">
                                        <p class="text-center text-lg-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('even_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                            } else{
                        ?>
                            <div class="single-block col-6 theme bg-gray-1">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-4 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('odd_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-0 designation pe-lg-5 text-center">
                                        <p class="text-center text-lg-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('odd_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-block col-6 theme bg-white">
                                <div class="team-counter ps-xl-5 ps-lg-2 h-100 py-4 d-flex flex-column justify-content-center">
                                    <div id="counters_1" class="count-container text-center text-lg-start">
                                        <div class="counter theme color-gray font-octopus-wide-700 font-48px d-inline-block" 
                                            data-TargetNum="<?php the_sub_field('even_count'); ?>"
                                            data-Speed="5678">
                                        </div>
                                    </div>
                                    <div class="px-2 px-sm-0 designation pe-lg-5">
                                        <p class="text-center text-lg-start theme color-gray font-octopus-wide-700 font-16px d-inline-block pe-lg-5"><?php the_sub_field('even_designation') ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                            }
                            endwhile;
                            endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="awards philosophy other-projects position-relative z-index-100 theme bg-white" id="awards">
    <div class="inner-container position-relative py-lg-5 z-index-100">
        <div class="container-fluid py-xl-5">
            <div class="row py-5">
                <div class="col-12 pb-3 pb-lg-5 mb-lg-4">
                    <div class="title pb-3 pb-lg-5 text-center text-lg-start">
                        <p class="uppercase after-border font-octopus-500 font-18px theme color-gray d-inline-block position-relative">awards</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="common-slider" id="awards-slick">
                        <?php if( have_rows('awards_section') ): ?>
                            <?php while( have_rows('awards_section') ): the_row(); ?>
                                <div class="image-sizer">
                                    <div class="image">
                                        <img class="w-100 h-100 pe-xl-4" src="<?php the_sub_field('image'); ?>" alt="">
                                    </div>
                                    <div class="contents d-flex align-items-center pt-4 pt-lg-0 ps-md-4">
                                        <div class="logo">
                                            <img src="<?php the_sub_field('logo'); ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="sub-contents pe-2 le-lg-5">
                                            <div class="title">
                                                <p class="theme color-block-1 font-20px font-octopus-wide-700"><?php the_sub_field('title'); ?></p>
                                            </div>
                                            <div class="contents">
                                                <p class="theme color-block-1 font-14px font-octopus-300"><?php the_sub_field('sub_title'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="award-logos theme bg-white-1 position-relative z-index-100">
    <div class="container py-5 px-xl-5">
        <div class="py-lg-5">
            <div class="row py-lg-5 px-3 px-xl-5">
                <?php if( have_rows('awards_certification') ): ?>
                    <?php while( have_rows('awards_certification') ): the_row(); ?>
                        <div class="col-6 col-md-2">
                            <div class="outer-container">
                                <div class="image d-flex">
                                    <img class="mx-auto" src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="cite text-center">
                                    <p class="px-4 px-lg-5 d-inline-block theme color-gray font-14px font-octopus-300"><?php the_sub_field('cite'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="integrity-quality position-relative z-index-100" id="why_ocean">
    <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
    <div class="overlay position-absolute dark-overlay w-100 h-100 top"></div>
    <div class="container py-5 px-xl-5">
        <div class="py-lg-5">
            <div class="row py-5 px-xl-5">
                <div class="col-12 col-lg-3 pb-5 mb-5">
                    <div class="ps-2 ps-sm-0 title pb-4">
                        <p class="theme color-gray font-18px font-octopus-500 after-border position-relative d-inline-block">WHY OCEAN</p>
                    </div>
                    <div class="ps-2 ps-sm-0 sub-title">
                        <p class="theme color-black-1 font-48px font-octopus-wide-700">Integrity & Quality</p>
                    </div>
                </div>            
                <div class="col-12 col-lg-12 px-xl-5" id="integrity_trigger">
                    <div class="col-12 px-xl-5">
                        <div class="upper-contents d-flex justify-content-around px-xl-5 mx-xl-5">
                            <div class="svg-1 d-inline-block position-relative cursor-pointer">
                                <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
                                <div class="svg">
                                    <?php include 'images/quality-ic-certified.svg' ?>
                                </div>
                                <div class="w-100 cite position-absolute">
                                    <p class="px-3 text-center theme color-white font-octopus-500">IMS Certified, CRISIL & DNB rated company</p>
                                </div>
                            </div>
                            <div class="svg-2 svg-1 d-inline-block position-relative cursor-pointer">
                                <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
                                <div class="svg">
                                    <?php include 'images/quality-ic-network.svg' ?>
                                </div>
                                <div class="w-100 cite position-absolute">
                                    <p class="px-3 text-center theme color-white font-octopus-500">Network of Architectural/Design Consultants & PMC’s Pan India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-xl-5">
                        <div class="lower-contents position-relative d-flex flex-wrap justify-content-around justify-content-lg-between mt-3 mx-xl-5 px-xl-5">
                            <div class="svg-1 svg-2 d-inline-block position-relative cursor-pointer">
                                <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
                                <div class="svg">
                                    <?php include 'images/quality-ic-pioneer.svg' ?>
                                </div>
                                <div class="w-100 cite position-absolute">
                                    <p class="px-3 text-center theme color-white font-octopus-500">Industry Pioneers in General Contracting, Civil Construction, Real Estate</p>
                                </div>
                            </div>
                            <div class="svg-1 d-inline-block position-relative cursor-pointer">
                                <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
                                <div class="svg">
                                    <?php include 'images/quality-ic-clients.svg' ?>
                                </div>
                                <div class="w-100 cite position-absolute">
                                    <p class="px-3 text-center theme color-white font-octopus-500">Delighted repeat clients</p>
                                </div>
                            </div>
                            <div class="svg-1 svg-2 d-inline-block position-relative mt-3 cursor-pointer">
                                <div class="bg-image position-absolute w-100 h-100 footer-bg"></div>
                                <div class="svg">
                                    <?php include 'images/quality-ic-quality.svg' ?>
                                </div>
                                <div class="w-100 cite position-absolute">
                                    <p class="px-3 text-center theme color-white font-octopus-500">Delivered projects with impeccable quality on time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</section>

<section class="company-commitment position-relative z-index-100">
    <div class="bg-image position-absolute w-100 h-100 common-bg"></div>
        <div class="container py-lg-5 px-xl-5">
            <div class="py-lg-5">
                <div class="row py-5 px-xl-5">
                    <div class="col-12 pb-5">
                        <div class="ps-2 ps-sm-0 title d-inline-block">
                            <p class="d-inline-block theme color-black-1 font-48px font-octopus-500 pe-lg-4"><?php the_field('company_commitment_title'); ?></p>
                        </div>
                    </div>
                    <?php if( have_rows('company_commitment') ):
                        while( have_rows('company_commitment') ): the_row(); ?>
                            <div class="col-6 col-lg-3 d-flex align-items-center py-4 flex-column flex-lg-row">
                                <div class="icon">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="text ps-lg-4 pe-lg-5 pt-3 pt-lg-0">
                                    <p class="text-center text-lg-start theme color-black-1 font-16px font-octopus-300"><?php the_sub_field('cite'); ?></p>
                                </div>
                            </div>
                    <?php 
                        endwhile; 
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="downloads">
    <div class="downloads-wrapper position-relative z-index-10 theme bg-white-1">
        <div class="container py-5 px-xl-5">
            <div class="row px-xl-5">
                <div class="col-12">
                    <div class="ps-2 ps-sm-0 title">
                        <p class="theme color-gray font-24px font-octopus-500 position-relative after-border d-inline-block"><?php the_field( 'downloads_title' )?></p>
                    </div>
                </div>
            </div>
            <div class="row-wrapper pt-5 ms-md-5">
                <div class="row px-xl-5">
                    <?php
                        if( have_rows('downloads_file') ):
                        while( have_rows('downloads_file') ): the_row();
                    ?>
                    <div class="py-4 col-3 col-md-2 col-lg-1 d-flex justify-content-center">
                        <div class="svg">
                            <img class="img-fluid" src="<?php the_sub_field( 'logo' )?>" alt="downloads logo">
                        </div>
                    </div>
                    <div class="py-4 col-9 col-md-4 col-lg-5 d-flex align-items-center">
                        <div class="downloads-text position-relative">
                            <p class="theme color-black-1 font-24px font-octopus-500"><?php the_sub_field( 'downloads_text' )?></p>
                            <a target="_blank" class="position-absolute top left right bottom" href="<?php the_sub_field( 'file' ) ?>"></a>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
	get_footer();
?>
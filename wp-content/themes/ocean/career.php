<?php
/*
 * Template Name: Career template
*/
get_header();
?>

<section class="outer-clients-associations-container position-relative z-index-100">
    <section class="company-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="banner-image position-relative">
                        <div class="position-absolute image w-100 h-100 bg-cover" style="background-image: url(<?php the_field('company_career_banner_image'); ?>)"></div>
                        <div class="container d-flex align-items-center h-100">
                            <div class="banner-text top-50p">
                                <div class="company">
                                    <p class="position-relative d-inline-block theme color-white font-octopus-500 font-18px after-white-border uppercase">Careers</p>
                                </div>
                                <div class="company-text">
                                    <p class="theme color-white font-octopus-500 font-48px"><?php the_field('company_career_banner_title');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="life-at-ocean position-relative">
        <div class="bg-image common-bg position-absolute w-100 h-100"></div>
        <div class="container py-5">
            <div class="row px-3 px-sm-0">
                <div class="col-12">
                    <div class="title">
                        <p class="theme color-gray font-octopus-500 font-18px position-relative d-inline-block after-border"><?php the_field('life_at_ocean_title');?></p>
                    </div>
                    <div class="content pt-5 theme color-gray font-octopus-300 font-18px">
                        <?php the_field('life_at_ocean_title_paragraph');?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-career-slider philosophy position-relative z-index-100">
        <div class="inner-container position-relative">
            <div class="bg-container"></div>
                <div class="container-fluid px-0">
                    <?php
                        $num = 0;
                        if( have_rows('company_career_event') ):
                        while( have_rows('company_career_event') ): the_row();
                        if($num % 2 == 0){
                    ?>
                    <div class="py-5 contact-address-sub-container contact-network-sub-container position-relative">
                        <div class="common-bg position-absolute h-100 w-100 top left"></div>
                        <div class="dark-overlay position-absolute h-100 w-100 top-0 left"></div>
                        <div class="py-5 outer-container">
                            <div class="title pb-4 ps-3 ps-sm-0">
                                <p class="theme color-black-1 font-octopus-wide-700 font-36px position-relative d-inline-block"><?php the_sub_field('title');?></p>
                            </div>
                            <div class="images-container common-slider">
                                <?php if( have_rows('images') ): ?>
                                    <?php while( have_rows('images') ): the_row(); ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        }else{
                    ?>
                      <div class="py-5 contact-address-sub-container contact-network-sub-container pb-5 position-relative">
                        <div class="common-bg position-absolute h-100 w-100 top left"></div>
                        
                        <div class="py-5 outer-container">
                            <div class="title pb-4  ps-3 ps-sm-0">
                                <p class="theme color-black-1 font-octopus-wide-700 font-36px position-relative d-inline-block"><?php the_sub_field('title');?></p>
                            </div>
                            <div class="images-container common-slider">
                                <?php if( have_rows('images') ): ?>
                                    <?php while( have_rows('images') ): the_row(); ?>
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                        $num++;
                        endwhile; 
                        endif; 
                    ?>
                </div>
        </div>
    </section>
    
    <section class="job-position">
        <div class="inner-position theme bg-white-1 py-5">
            <div class="container py-5">
                <div class="row pb-4 px-3 px-sm-0">
                    <div class="title pb-5">
                        <p class="position-relative d-inline-block theme color-gray font-octopus-500 font-18px after-border"><?php the_field('career_job_title'); ?></p>
                    </div>
                    <div class="sub-title">
                        <p class="theme color-gray font-octopus-500 font-30px"><?php the_field('career_job_sub_title'); ?></p>
                    </div>
                </div>
                <div class="row custom-box-shadow-3 mx-1">
                    <div class="col-12 col-sm-6 position-relative z-index-10">
                        <div class="bg-image position-absolute w-100 h-100 common-bg left"></div>
                        <div class="image p-5">
                            <img class="img-fluid" src="<?php the_field('career_job_svg') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <div class="job-resizer p-3 p-md-5 mx-auto">
                            <div class="job-position-title pb-2">
                                <p class="theme color-gray font-octopus-500 font-18px"><?php the_field('job_position_title'); ?></p>
                            </div>
                            <div class="z-index-10 cursor-pointer outer-job-container position-relative d-flex justify-content-between p-2">
                               <div class="default-select-position">
                                   <p class="theme color-gray-4 font-octopus-300 font-16px">Select position</p>
                               </div>
                               <div class="job-position-select position-absolute w-100 theme bg-gray-4 left">
                                    <?php
                                        $i = 0;
                                        if( have_rows('career_job') ):
                                        while( have_rows('career_job') ): the_row();
                                    ?>
                                        <div class="p-2 job-position" id="position_<?php echo $i?>">
                                            <p class="theme color-white font-octopus-300 font-16px" value="<?php the_sub_field('job_position'); ?>"><?php the_sub_field('job_position'); ?></p>
                                        </div>
                                    <?php
                                        $i++;
                                        endwhile;
                                        endif;
                                    ?>
                                </div>
                                <div class="down-arrow d-flex align-items-center position-absolute top-50 translateY-center">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/001-down-arrow.png" alt="">
                                </div>
                            </div>
                            <div class="job-description-title pt-5 pb-2">
                                <p><?php the_field('job_description_title'); ?></p>
                            </div>
                            <div class="job-description-container">
                                <?php
                                    $i = 0;
                                    if( have_rows('career_job') ):
                                    while( have_rows('career_job') ): the_row();
                                ?>
                                <div class="job-description-wrapper position_<?php echo $i?>" id="job_desc_<?php echo $i?>">
                                    <div class="job-description theme color-gray font-octopus-300 font-16px">
                                        <?php the_sub_field('job_description'); ?>
                                    </div>
                                    <div class="job-email pt-4">
                                        <p class="theme color-gray font-octopus-300 font-18px"><?php the_sub_field('email_resume'); ?></p>
                                    </div>
                                </div>
                                <?php
                                    $i++;
                                    endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>

    jQuery(document).ready(function($){
    $( ".job-position-select" ).addClass( "display-hide" );

    $( ".outer-job-container" ).click(function(){
        $( ".job-position-select" ).toggleClass('display-hide');
    });

    $('.job-position-select .job-position').click(function(e){
        
        e.preventDefault();
        $(this).toggleClass('active').toggleClass('inactive').siblings().addClass('inactive').removeClass('active');
        $( ".default-select-position p").text($(this).text());
        
        var myId = $(this)[0].id;
        
        if($( ".job-description-container" ).find(myId)){
            $( ".job-description-container ."+myId ).addClass('display-show').removeClass('display-hide').siblings().addClass('display-hide').removeClass('display-show');
        }
    });

    $( ".job-description-container #job_desc_0").addClass( "display-show active" ).siblings().addClass( "display-hide inactive" );

        var of_1 = $('.life-at-ocean .container').offset();
        var left = of_1.left;
        var innerContainerWidth_1 = $(window).width() - left - $('.life-at-ocean .container').width();

        // Career slider left width
        if (window.matchMedia('(min-width: 1024px)').matches){
            $('section.company-career-slider .outer-container').css({'padding-left': innerContainerWidth_1});
            }else{
        }
        $(window).resize(function() {
            if (window.matchMedia('(min-width: 1024px)').matches){
            $('section.company-career-slider .outer-container').css({'padding-left': innerContainerWidth_1});
            }else{
            }
        });
    });
</script>
<?php
	get_footer();
?>